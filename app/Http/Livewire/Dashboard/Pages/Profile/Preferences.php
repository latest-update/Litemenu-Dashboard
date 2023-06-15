<?php

namespace App\Http\Livewire\Dashboard\Pages\Profile;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Preferences extends Component
{

    public User $user;
    public array $roles = ['Owner', 'Manager'];
    public ?string $role = null;

    protected $rules = [
        'user.fullname' => ['required', 'min:6', 'string'],
        'user.email' => ['required', 'min:6', 'email']
    ];

    public function save()
    {
        $this->validate();
        $this->user->save();
        if (in_array($this->role, $this->roles)) {
            $this->user->giveSpecified($this->role);
        }
        return redirect()->to('/profile/preferences');
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->role = $this->user->getRoleNames()[0] ?? 'Гость';
    }

    public function render()
    {
        return view('livewire.dashboard.pages.profile.preferences');
    }
}
