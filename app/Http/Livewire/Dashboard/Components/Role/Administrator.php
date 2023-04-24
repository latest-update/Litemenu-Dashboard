<?php

namespace App\Http\Livewire\Dashboard\Components\Role;

use App\Traits\Pageable;
use Livewire\Component;

class Administrator extends Component
{
    use Pageable;

    public function render()
    {
        return view('livewire.dashboard.components.role.administrator');
    }
}
