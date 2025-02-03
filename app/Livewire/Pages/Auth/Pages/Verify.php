<?php

namespace App\Livewire\Pages\Auth\Pages;

use Livewire\Component;

class Verify extends Component
{
    public function render()
    {
        return view('pages.auth.pages.verify')
        ->layout('pages.auth.layouts.layout')
        ->title('Verify')
        ->with('desc', 'fasdfasdfasdfas');
    }
}
