<?php

namespace App\Livewire\Pages\Home\Pages\Docs;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('pages.home.pages.docs.index')
            ->layout('pages.home.layouts.layout')
            ->title('Docs');
    }
}
