<?php

namespace App\Http\Livewire\Dashboard\Pages\Sandbox;

use App\Models\Branch;
use App\Models\Place;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Promotions extends Component
{

    public User $user;
    public ?Branch $branch;
    public Collection $places;

    public function mount()
    {
        $this->user = auth()->user();
        $this->branch = $this->user->getBranch();
        $this->places = $this->branch->places()->get();
    }

    public function render()
    {
        return view('livewire.dashboard.pages.sandbox.promotions');
    }
}
