<?php

namespace App\Livewire\Pages\Home\Components;

use App\Models\Document;
use App\Models\Plugin;
use Livewire\Component;

class Aside extends Component
{
    public $documents;
    public $plugins;

    public function mount()
    {
        $this->documents = Document::where('status', 'active')
            ->get();

        $this->plugins = Plugin::where('status', 'active')
            ->get();
    }

    public function render()
    {
        return view('pages.home.components.aside');
    }
}
