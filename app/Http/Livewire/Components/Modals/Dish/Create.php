<?php

namespace App\Http\Livewire\Components\Modals\Dish;

use App\Http\Livewire\Image\MultipleEditorComponent;
use App\Models\Dish;

class Create extends MultipleEditorComponent
{
    protected $disk = 'dish';
    public string $title = '';
    public string $description = '';
    public string $notes = '';
    public string $price = '';

    public array $ingredients = [];
    public array $pictures = [];
    public int $parentCategory = 0;

    public string $optionName = '';
    public string $optionPrice = '';

    protected array $customRules = [
        'title' => ['required', 'string', 'min:2', 'max:50'],
        'description' => ['required', 'string', 'min:5'],
        'price' => ['required', 'integer'],
        'notes' => ['nullable', 'string'],
    ];

    public function save()
    {
        $dish = $this->validate();
        unset($dish['photo']);
        Dish::create([
            ...$dish,
            'category_id' => $this->parentCategory,
            'ingredients' => $this->ingredients,
            'pictures' => $this->imageLinks,
        ]);
        return redirect(request()->header('Referer'));
    }

    public function addIngredient()
    {
        $option = $this->validate([
            'optionName' => 'required|string',
            'optionPrice' => 'required|integer',
        ]);

        $this->ingredients[] = $option;
        $this->optionName = '';
        $this->optionPrice = '';
    }

    public function removeIngredients(int $key)
    {
        unset($this->ingredients[$key]);
    }

    public function render()
    {
        return view('livewire.components.modals.dish.create');
    }
}
