<?php

namespace App\Http\Livewire\Dashboard\Pages\Menu;

use App\Models\Dish;
use Livewire\Component;

class DishCard extends Component
{
    public Dish $dish;
    public int $amount;
    public bool $isActive;
    public bool $addToElements = false;


    public function mount()
    {
        $this->amount = $this->dish->amount;
        $this->isActive = $this->dish->is_active;
    }

    public function saveChanges()
    {
        $this->dish->amount = $this->amount;
        $this->dish->is_active = $this->isActive;
        $this->dish->save();
    }



    public function render()
    {
        return view('livewire.dashboard.pages.menu.dish-card');
    }
}
