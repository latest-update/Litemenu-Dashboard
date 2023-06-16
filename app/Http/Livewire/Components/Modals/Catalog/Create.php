<?php

namespace App\Http\Livewire\Components\Modals\Catalog;

use App\Http\Livewire\Image\EditorComponent;
use App\Models\Category;

class Create extends EditorComponent
{
    protected $disk = 'catalog';
    public string $name = '';
    public string $description = '';
    public int $parentCategory = 0;

    protected $queryString = ['parentCategory'];

    protected array $customRules = [
        'name' => ['required', 'string', 'max:30'],
        'description' => ['required', 'string', 'max:50']
    ];

    public function save()
    {
        $category = $this->validate();
        unset($category['photo']);

        Category::create([
            ...$category,
            'branch_uuid' => auth()->user()->getBranch()->uuid,
            'parent_category_id' => $this->parentCategory,
            'image' => [
                $this->imageLink
            ]
        ]);
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.components.modals.catalog.create');
    }
}
