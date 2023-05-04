<?php

namespace App\Http\Livewire\Dashboard\Pages\Company;

use App\Models\Company;
use Livewire\Component;

class Header extends Component
{
    public Company $company;

    public function mount()
    {

    }
    public function render()
    {
        return view('livewire.dashboard.pages.company.header');
    }
}
