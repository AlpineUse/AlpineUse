<?php

namespace App\Livewire\Pages\Home\Pages\Docs;

use App\Models\Document;
use App\Models\Plugin;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Index extends Component
{
    #[Locked]
    public $documents;

    #[Locked]
    public $document;

    private function hasTwoOrMoreSegments($url)
    {
        $path = parse_url($url, PHP_URL_PATH);

        $segments = array_filter(explode('/', $path));

        return count($segments) >= 2;
    }

    private function getFirstSegment($url)
    {
        // استخراج الباث فقط من الرابط
        $path = parse_url($url, PHP_URL_PATH);

        // تقسيم الباث إلى أجزاء وإزالة القيم الفارغة
        $segments = array_filter(explode('/', $path));

        // إرجاع أول جزء من المسار (إذا كان موجودًا)
        return reset($segments) ?: null;
    }

    private function getLastSegment($url)
    {
        // استخراج الباث فقط من الرابط
        $path = parse_url($url, PHP_URL_PATH);

        // تقسيم الباث إلى أجزاء وإزالة القيم الفارغة
        $segments = array_filter(explode('/', $path));

        // إرجاع آخر جزء من المسار (إذا كان موجودًا)
        return end($segments) ?: null;
    }

    public function mount($url)
    {
        if ($this->hasTwoOrMoreSegments($url)) {
            $plugin = Plugin::Where('name', $this->getFirstSegment($url))->first();

            $this->documents = Document::where('status', 'active')
                ->where('plugin_id', $plugin->id)
                ->get();

            $this->document = Document::where('status', 'active')
                ->where('plugin_id', $plugin->id)
                ->where('url', $this->getLastSegment($url))
                ->first();

            empty($this->document) ? $this->redirect(abort(404), navigate: true) : null;
        } else {
            $this->documents = Document::where('status', 'active')
                ->whereNull('plugin_id')
                ->get();

            $this->document = Document::where('status', 'active')
                ->whereNull('plugin_id')
                ->where('url', $url)
                ->first();

            empty($this->document) ? $this->redirect(abort(404), navigate: true) : null;
        }
    }

    public function render()
    {
        return view('pages.home.pages.docs.index')
            ->layout('pages.home.layouts.layout')
            ->title($this->document->title);
    }
}
