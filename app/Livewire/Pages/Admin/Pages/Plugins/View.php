<?php

namespace App\Livewire\Pages\Admin\Pages\Plugins;

use App\Models\Plugin;
use Livewire\Attributes\Locked;
use Livewire\Component;

class View extends Component
{
    #[Locked]
    public $id;

    public $name;
    public $url;
    public $body;

    public function save()
    {
        Plugin::find($this->id)->update([
            'name' => $this->name,
            'url' => $this->url,
            'body' => $this->body
        ]);
    }

    public function mount($id)
    {
        $this->id = $id;
        $plugin = Plugin::find($this->id);
        $this->title = $plugin->title;
        $this->url = $plugin->url;
        $this->body = $plugin->body;
    }


    public function render()
    {
        return view('pages.admin.pages.plugins.view')
            ->layout('pages.admin.layouts.layout')
            ->title('View');
    }
}
