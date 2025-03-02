<?php

namespace App\Livewire\Pages\Admin\Pages;

use App\Models\Document;
use App\Models\Plugin;
use Livewire\Component;

class Index extends Component
{
    public $plugins;
    public $docs;

    public function render()
    {
        $this->plugins = Plugin::get()->count();
        $this->docs = Document::get()->count();
        
        return view('pages.admin.pages.index')
            ->layout('pages.admin.layouts.layout')
            ->title('Admin');
    }
}
