<?php

namespace App\Http\Livewire\Dashboard\Pages\Company;

use App\Models\Company;
use Livewire\Component;

class Home extends Component
{
    public Company $company;

    public function mount(Company $company)
    {
        $this->company = $company;
    }

    public function render()
    {
        return view('livewire.dashboard.pages.company.home');
    }
}
