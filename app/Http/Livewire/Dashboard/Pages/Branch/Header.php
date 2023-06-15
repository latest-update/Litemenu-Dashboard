<?php

namespace App\Http\Livewire\Dashboard\Pages\Branch;

use App\Models\Branch;
use Livewire\Component;

class Header extends Component
{
    public Branch $branch;
    public function render()
    {
        return view('livewire.dashboard.pages.branch.header');
    }
}
