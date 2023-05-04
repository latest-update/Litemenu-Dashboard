<?php

namespace App\Http\Livewire\Components\Modals\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;

class Image extends Component
{
    use WithFileUploads;

    public $photo;
    public $user;
    protected $rules = [
        'photo' => ['image', 'max:1024', 'mimes:png,jpg']
    ];
    public function updatedPhoto()
    {
        $this->validate();
    }

    public function save()
    {
        $this->validate();
        $this->photo->storeAs('public/profile', $this->user->phone . '.png');
        return redirect()->to('profile/preferences');
    }

    public function render()
    {
        return view('livewire.components.modals.profile.image');
    }
}
