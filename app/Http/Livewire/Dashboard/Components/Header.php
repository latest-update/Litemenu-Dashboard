<?php

namespace App\Http\Livewire\Dashboard\Components;

use Livewire\Component;

class Header extends Component
{
    public function logout ()
    {
        auth()->logout();
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.dashboard.components.header');
    }
}
