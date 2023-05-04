<?php

namespace App\Http\Livewire\Dashboard\Pages\Company;

use Livewire\Component;

class GetStarted extends Component
{
    public $uuid;
    public function render()
    {
        return view('livewire.dashboard.pages.company.get-started');
    }
}
