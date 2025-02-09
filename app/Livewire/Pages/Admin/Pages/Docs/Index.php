<?php

namespace App\Livewire\Pages\Admin\Pages\Docs;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('pages.admin.pages.docs.index')
            ->layout('pages.admin.layouts.layout')
            ->title('Docs');
    }
}
