<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Traits\Pageable;
use Livewire\Component;

class Start extends Component
{
    public function companies()
    {
        return auth()->user()->companies()->get();
    }
    public function render()
    {
        return view('livewire.dashboard.pages.start');
    }
}
