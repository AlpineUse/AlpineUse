<?php

namespace App\Livewire\Pages\Home\Pages\Docs;

use App\Models\Document;
use App\Models\Plugin;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Index extends Component
{
    #[Locked]
    public $document;

    public function mount($url)
    {
        $this->document = Document::where('status', 'active')
            ->where('url', $url)
            ->first();

        empty($this->document) ? $this->redirect(abort(404), navigate: true) : null;
    }

    public function render()
    {
        return view('pages.home.pages.docs.index')
            ->layout('pages.home.layouts.layout')
            ->title($this->document->title);
    }
}
