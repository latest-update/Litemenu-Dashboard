<?php

namespace App\Http\Livewire\Dashboard\Components;

use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;

class Header extends Component
{
    public function to ($url)
    {
        return redirect()->to($url);
    }
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
