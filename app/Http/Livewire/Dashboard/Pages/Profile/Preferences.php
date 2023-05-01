<?php

namespace App\Http\Livewire\Dashboard\Pages\Profile;

use App\Models\User;
use Livewire\Component;

class Preferences extends Component
{

    public User $user;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function render()
    {
        return view('livewire.dashboard.pages.profile.preferences');
    }
}
