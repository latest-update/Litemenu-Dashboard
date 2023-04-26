<?php


namespace App\Http\Livewire\Dashboard\Control;


trait RoleConfiguration
{
    public array $defaultPage = [
        'guest' => 'Start',
        'owner' => 'Start',
        'default' => 'Dashboard'
    ];

    public function getDefault ()
    {
        return $this->defaultPage[strtolower(auth()->user()->getRoleNames()[0] ?? 'guest')] ?? $this->defaultPage['default'];
    }
}
