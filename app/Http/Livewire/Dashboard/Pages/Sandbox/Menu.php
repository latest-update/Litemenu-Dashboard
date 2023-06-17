<?php

namespace App\Http\Livewire\Dashboard\Pages\Sandbox;

use Livewire\Component;

class Menu extends Component
{
    public int $parentCategory = 0;
    protected $queryString = ['parentCategory'];
    protected $listeners = ['changeParent'];

    public function changeParent(int $catalogId)
    {
        $this->parentCategory = $catalogId;
    }

    public function render()
    {
        return view('livewire.dashboard.pages.sandbox.menu');
    }
}
