<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Traits\Pageable;
use Livewire\Component;
use WireUi\Traits\Actions;

class Start extends Component
{
    use Actions;

    public function mount()
    {
        if (auth()->user()->hasRole(['Manager'])) return redirect()->to('/dashboard');
        elseif (auth()->user()->hasRole(['Kitchener'])) return redirect()->to('/orders');
        elseif (auth()->user()->hasRole(['Waiter'])) return redirect()->to('/deliver');
    }

    public function companies()
    {
        return auth()->user()->companies()->get();
    }
    public function render()
    {
        return view('livewire.dashboard.pages.start');
    }
}
