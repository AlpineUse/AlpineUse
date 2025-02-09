<?php

namespace App\Livewire\Pages\Home\Pages\Plugins;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('pages.home.pages.plugins.index')
            ->layout('pages.home.layouts.layout')
            ->title('Plugins');
    }
}
