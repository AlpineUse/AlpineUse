<?php

namespace App\Livewire\Pages\Home\Pages;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('pages.home.pages.index')
        ->layout('pages.home.layouts.layout')
        ->title('Home');
    }
}
