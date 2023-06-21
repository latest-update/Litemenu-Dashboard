<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Models\Branch;
use App\Models\User;
use Livewire\Component;

class Deliver extends Component
{

    public User $user;

    public Branch $branch;

    public function mount()
    {
        $this->user = auth()->user();
        $this->branch = $this->user->accessBranch()->first();
    }
    public function render()
    {
        return view('livewire.dashboard.pages.deliver');
    }
}
