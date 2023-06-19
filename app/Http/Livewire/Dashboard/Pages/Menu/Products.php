<?php

namespace App\Http\Livewire\Dashboard\Pages\Menu;

use App\Models\Category;
use App\Models\Dish;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Products extends Component
{
    use WithPagination;

    public ?Category $category;

    public function render()
    {
        return view('livewire.dashboard.pages.menu.products', [
            'dishes' => $this->category->dishes()->paginate(8),
        ]);
    }
}
