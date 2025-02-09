<?php

namespace App\Livewire\Pages\Admin\Pages\Docs;

use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('pages.admin.pages.docs.view')
            ->layout('pages.admin.layouts.layout')
            ->title('View');
    }
}
