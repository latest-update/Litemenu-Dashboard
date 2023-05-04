<?php

namespace App\Http\Livewire\Dashboard\Pages\Company;

use App\Models\Company;
use Livewire\Component;

class Branches extends Component
{
    public Company $company;
    public function render()
    {
        return view('livewire.dashboard.pages.company.branches');
    }
}
