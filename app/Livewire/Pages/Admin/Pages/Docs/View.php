<?php

namespace App\Livewire\Pages\Admin\Pages\Docs;

use App\Models\Document;
use Livewire\Attributes\Locked;
use Livewire\Component;

class View extends Component
{
    #[Locked]
    public $id;

    public $title;
    public $url;
    public $body;

    public function save()
    {
        Document::find($this->id)->update([
            'title' => $this->title,
            'url' => $this->url,
            'body' => $this->body
        ]);
    }

    public function mount($id)
    {
        $this->id = $id;
        $document = Document::find($this->id);
        $this->title = $document->title;
        $this->url = $document->url;
        $this->body = $document->body;
    }

    public function render()
    {
        return view('pages.admin.pages.docs.view')
            ->layout('pages.admin.layouts.layout')
            ->title('View');
    }
}
