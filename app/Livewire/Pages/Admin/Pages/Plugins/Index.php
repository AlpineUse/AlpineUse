<?php

namespace App\Livewire\Pages\Admin\Pages\Plugins;

use App\Models\Plugin;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $plugins = Plugin::all();

        return view('pages.admin.pages.plugins.index', ['plugins' => $plugins])
            ->layout('pages.admin.layouts.layout')
            ->title('Plugins');
    }
}
