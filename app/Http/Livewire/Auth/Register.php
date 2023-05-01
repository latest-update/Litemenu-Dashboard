<?php

namespace App\Http\Livewire\Auth;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public string $fullname = '';
    public string $email = '';
    public string $phone = '';
    public string $password = '';

    public function register()
    {
        $this->validate([
            'fullname' => 'required|min:2|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:10|max:16|string',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => bcrypt($this->password)
        ]);

        auth()->login($user);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.app');
    }
}
