<?php

namespace App\Http\Livewire\Dashboard\Sidebar;

use App\Traits\Routeable;
use Livewire\Component;

class Item extends Component
{
    use Routeable;
    public string $icon;

    public function render()
    {
        return view('livewire.dashboard.sidebar.item');
    }
}
