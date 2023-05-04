<?php

namespace App\Http\Livewire\Dashboard\Sidebar\Role;

use App\Traits\Pageable;
use Livewire\Component;

class Owner extends Component
{
    public function render()
    {
        return view('livewire.dashboard.sidebar.role.owner');
    }
}
