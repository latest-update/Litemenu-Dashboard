<?php

namespace App\Http\Livewire\Dashboard\Pages;

use App\Traits\Pageable;
use Livewire\Component;

class Settings extends Component
{
    use Pageable;

    public string $currentPage = 'Privacy';

    public function mount()
    {
        $this->changePage($this->currentPage);
    }

    public function render()
    {
        return view('livewire.dashboard.pages.settings');
    }
}
