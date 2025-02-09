<?php

namespace App\Livewire\Pages\Admin\Pages\Plugins;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('pages.admin.pages.plugins.index')
            ->layout('pages.admin.layouts.layout')
            ->title('Plugins');
    }
}
