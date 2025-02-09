<?php

namespace App\Livewire\Pages\Dashboard\Pages;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('pages.dashboard.pages.index')
        ->layout('pages.dashboard.layouts.layout')
        ->title('Dashboard');
    }
}
