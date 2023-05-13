<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Models\Branch;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public User $user;
    public ?Branch $branch;

    public function mount()
    {
        $this->user = auth()->user();
        $this->branch = $this->user->getBranch();
    }

    public function render()
    {
        return view('livewire.dashboard.pages.dashboard');
    }
}
