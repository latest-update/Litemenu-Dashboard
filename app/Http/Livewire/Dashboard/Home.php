<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Livewire\Dashboard\Control\DynamicRoutingComponent;

class Home extends DynamicRoutingComponent
{

    public function render()
    {
        return view('livewire.dashboard.home');
    }
}
