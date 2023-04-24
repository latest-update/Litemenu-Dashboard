<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Home extends Component
{
    use RoleConfiguration;

    public string $currentPage = 'Dashboard';

    protected $listeners = ['changePage'];

    public function mount()
    {
        $this->currentPage = $this->getDefault();
    }

    public function changePage ($page)
    {
        $this->currentPage = $page;
    }

    public function render()
    {
        return view('livewire.dashboard.home');
    }
}
