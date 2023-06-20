<?php

namespace App\Http\Livewire\Dashboard\Pages\Promotions;

use App\Models\Branch;
use App\Models\User;
use Livewire\Component;

class AllProducts extends Component
{
    public User $user;
    public ?Branch $branch;


    public function mount()
    {
        $this->user = auth()->user();
        $this->branch = $this->user->branch();

    }

    public function render()
    {
        return view('livewire.dashboard.pages.promotions.all-products');
    }
}
