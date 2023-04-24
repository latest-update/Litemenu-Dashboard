<?php


namespace App\Http\Livewire\Dashboard;


trait RoleConfiguration
{
    public array $defaultPage = [
        'guest' => 'Start',
        'default' => 'Dashboard'
    ];

    public function getDefault ()
    {
        return $this->defaultPage[strtolower(auth()->user()->getRoleNames()[0] ?? 'guest')] ?? $this->defaultPage['default'];
    }
}
