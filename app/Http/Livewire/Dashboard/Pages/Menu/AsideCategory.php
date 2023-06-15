<?php

namespace App\Http\Livewire\Dashboard\Pages\Menu;

use App\Models\Branch;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class AsideCategory extends Component
{

    public string $search;
    public User $user;
    public Branch $branch;
    public array $categories;
    public array $dynamicCategories;
    public int $parentCategory = 0;

    protected $queryString = ['parentCategory'];

    public function sortCategories()
    {
        foreach ($this->categories as $group => $category) {
            $filteredCategories = array_filter($category, function ($catalog) {
                return isset($catalog['parent_category_id']) && $catalog['parent_category_id'] == $this->parentCategory ;
            });

            $this->dynamicCategories[$group] = $filteredCategories;
        }
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->branch = $this->user->getBranch();
        $this->categories = Category::query()
            ->where('branch_uuid', $this->branch->uuid)
            ->get()
            ->groupBy(function ($category) {
                return strtoupper(substr($category->name, 0, 1));
            })->toArray();
    }

    public function render()
    {
        $this->sortCategories();
        return view('livewire.dashboard.pages.menu.aside-category');
    }
}
