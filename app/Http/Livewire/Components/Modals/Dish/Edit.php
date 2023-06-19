<?php

namespace App\Http\Livewire\Components\Modals\Dish;

use App\Http\Livewire\Image\MultipleEditorComponent;
use App\Models\Dish;
use Illuminate\Support\Facades\Storage;

class Edit extends MultipleEditorComponent
{
    protected $disk = 'dish';
    public Dish $dish;
    public string $title = '';
    public string $description = '';
    public string $notes = '';
    public string $price = '';

    public array $ingredients = [];
    public string $optionName = '';
    public string $optionPrice = '';

    protected array $customRules = [
        'title' => ['required', 'string', 'min:2', 'max:50'],
        'description' => ['required', 'string', 'min:5'],
        'price' => ['required', 'integer'],
        'notes' => ['nullable', 'string'],
    ];

    protected $listeners = [
        'editDishUuid',
        'handleBase64ImageEditDish' => 'handleBase64Image'
    ];

    public function editDishUuid(string $uuid)
    {
        $this->dish = Dish::find($uuid);
        $this->title = $this->dish->title;
        $this->description = $this->dish->description;
        $this->notes = $this->dish->notes;
        $this->price = $this->dish->price;
        $this->ingredients = $this->dish->ingredients;
        $this->imageLinks = $this->dish->pictures;
    }

    public function save()
    {
        $dish = $this->validate();
        $this->dish->title = $dish['title'];
        $this->dish->description = $dish['description'];
        $this->dish->notes = $dish['notes'];
        $this->dish->price = $dish['price'];
        $this->dish->ingredients = $this->ingredients;
        $this->dish->pictures = $this->imageLinks;
        $this->dish->save();
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
        return view('livewire.components.modals.dish.edit');
    }
}
