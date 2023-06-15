<?php

namespace App\Http\Livewire\Dashboard\Pages\Branch;

use App\Models\Branch;
use Livewire\Component;

class Home extends Component
{
    public Branch $branch;

    public function mount(Branch $branch)
    {
        $this->branch = $branch;
    }

    public function render()
    {
        return view('livewire.dashboard.pages.branch.home');
    }
}
