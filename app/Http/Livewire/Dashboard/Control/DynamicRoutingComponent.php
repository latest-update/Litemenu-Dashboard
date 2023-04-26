<?php

namespace App\Http\Livewire\Dashboard\Control;

use Livewire\Component;

class DynamicRoutingComponent extends Component
{
    use RoleConfiguration;
    public string $currentPage = 'Dashboard';

    protected $listeners = ['changePage'];

    public function boot()
    {
        $this->currentPage = $this->getDefault();
    }

    public function changePage ($page): void
    {
        $this->currentPage = $page;
    }
}
