<?php

namespace App\Livewire\Pages\Admin\Pages\Plugins;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('pages.admin.pages.plugins.view')
            ->layout('pages.admin.layouts.layout')
            ->title('View');
    }
}
