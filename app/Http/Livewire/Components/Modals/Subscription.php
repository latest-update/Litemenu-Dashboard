<?php

namespace App\Http\Livewire\Components\Modals;

use Livewire\Component;

class Subscription extends Component
{

    public function toMainPage()
    {
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.components.modals.subscription');
    }
}
