<?php

namespace App\Http\Livewire\Dashboard\Pages\Menu;

use App\Models\Category;
use Livewire\Component;

class Products extends Component
{
    public ?Category $category;
    public array $dishes;

    public function getDishes()
    {
        $this->dishes = $this->category->dishes()->get()->toArray();
    }

    public function render()
    {
        $this->getDishes();
        return view('livewire.dashboard.pages.menu.products');
    }
}
