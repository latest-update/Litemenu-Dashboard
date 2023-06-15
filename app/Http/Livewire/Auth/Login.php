<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions;

class Login extends Component
{
    use Actions;

    public $email = 'guest@mail.com';
    public $password = 'guestpass';

    public function login()
    {
        $credentials = ['email' => $this->email, 'password' => $this->password];

        $this->validate([
            'email' => 'required|string',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $remember = true)) {
            return redirect()->intended('/');
        }

        $this->addError('auth', 'Invalid email or password');
        $this->notification()->error(
            'Authentication Error!!!',
            'The provided credentials do not match our records.'
        );
    }

    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.auth.login')->layout('layouts.app');
    }
}
