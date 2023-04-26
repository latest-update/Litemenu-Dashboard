<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Livewire\Dashboard\Control\DynamicRoutingComponent;

class Company extends DynamicRoutingComponent
{
    public \App\Models\Company $company;
    public function mount(\App\Models\Company $company)
    {
        $this->company = $company;
        $this->currentPage = 'sub.company';
    }
    public function render()
    {
        return view('livewire.dashboard.company');
    }
}
