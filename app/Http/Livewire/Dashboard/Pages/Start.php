<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Traits\Pageable;
use Livewire\Component;
use WireUi\Traits\Actions;

class Start extends Component
{
    use Actions;

    public function companies()
    {
        return auth()->user()->companies()->get();
    }
    public function render()
    {
        return view('livewire.dashboard.pages.start');
    }
}
