<?php

namespace App\Http\Livewire\Dashboard\Pages\Sandbox;

use App\Models\Branch;
use Livewire\Component;

class Tables extends Component
{
    public ?Branch $branch;

    public function mount(?Branch $branch)
    {
        $this->branch = $branch;
        if ($branch->getConnectionName() == null)
            $this->branch = auth()->user()->branch()->first();
    }

    public function render()
    {
        return view('livewire.dashboard.pages.sandbox.tables');
    }
}
