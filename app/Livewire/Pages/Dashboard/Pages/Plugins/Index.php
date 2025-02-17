<?php

namespace App\Livewire\Pages\Dashboard\Pages\Plugins;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('pages.dashboard.pages.plugins.index')
            ->layout('pages.dashboard.layouts.layout')
            ->title('Plugins');
    }
}
