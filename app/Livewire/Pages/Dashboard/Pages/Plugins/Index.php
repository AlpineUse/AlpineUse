<?php

namespace App\Livewire\Pages\Dashboard\Pages\Plugins;

use App\Models\Plugin;
use Livewire\Component;

class Index extends Component
{
    public $plugins;

    public function create()
    {
        $id = Plugin::insertGetId([
            'name' => 'New Plugin',
        ]);

        return $this->redirect(route('dashboard.plugins.view', ['id' => $id]), navigate: true);
    }

    public function render()
    {
        $this->plugins = Plugin::all();

        return view('pages.dashboard.pages.plugins.index')
            ->layout('pages.dashboard.layouts.layout')
            ->title('Plugins');
    }
}
