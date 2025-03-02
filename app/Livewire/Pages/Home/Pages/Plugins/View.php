<?php

namespace App\Livewire\Pages\Home\Pages\Plugins;

use App\Models\Plugin;
use Livewire\Component;

class View extends Component
{
    public $plugin;
    
    public function mount($url)
    {
        $this->plugin = Plugin::where('status', 'active')
            ->where('url', $url)
            ->first();

        empty($this->plugin) ? $this->redirect(abort(404), navigate: true) : null;
    }

    public function render()
    {
        return view('pages.home.pages.plugins.view')
            ->layout('pages.home.layouts.layout')
            ->title($this->plugin->name);
    }
}
