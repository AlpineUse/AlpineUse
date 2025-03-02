<?php

namespace App\Livewire\Pages\Home\Pages\Plugins;

use App\Models\Plugin;
use Livewire\Component;

class Index extends Component
{
    public $plugins;

    public function render()
    {
        $this->plugins = Plugin::where('status', 'active')->get();

        return view('pages.home.pages.plugins.index')
            ->layout('pages.home.layouts.layout')
            ->title('Plugins');
    }
}
