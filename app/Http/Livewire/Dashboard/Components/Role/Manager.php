<?php

namespace App\Http\Livewire\Dashboard\Components\Role;

use App\Traits\Pageable;
use Livewire\Component;

class Manager extends Component
{
    use Pageable;

    public function render()
    {
        return view('livewire.dashboard.components.role.manager');
    }
}
