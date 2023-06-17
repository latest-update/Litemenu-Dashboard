<?php

namespace App\Http\Livewire\Dashboard\Pages\Menu;

use App\Models\Category;
use Livewire\Component;

class CategoryInfo extends Component
{
    public ?Category $category;
    public int $parentCategory = 0;

    public function mount()
    {
        $this->category = Category::find($this->parentCategory);
    }

    public function render()
    {
        return view('livewire.dashboard.pages.menu.category-info');
    }
}
