<?php

namespace App\Livewire\Pages\Auth\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function mount()
    {
        Auth::logout();
        return redirect()->route('auth.index');
    }

    public function render()
    {
        $this->logout();
    }
}
