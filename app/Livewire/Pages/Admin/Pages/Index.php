<?php

namespace App\Livewire\Pages\Admin\Pages;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('pages.admin.pages.index')
            ->layout('pages.admin.layouts.layout')
            ->title('Admin');
    }
}
