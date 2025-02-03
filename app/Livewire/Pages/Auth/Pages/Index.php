<?php

namespace App\Livewire\Pages\Auth\Pages;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('pages.auth.pages.index')
        ->layout('pages.auth.layouts.layout')
        ->title('Login')
        ->with('desc', 'fasdfasdfasdfas');
    }
}
