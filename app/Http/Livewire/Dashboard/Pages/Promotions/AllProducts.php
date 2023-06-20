<?php

namespace App\Http\Livewire\Dashboard\Pages\Promotions;

use App\Models\Branch;
use App\Models\Category;
use App\Models\Element;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class AllProducts extends Component
{
    public User $user;
    public ?Branch $branch;
    public Event $event;
    public Collection $dishes;

//    protected $listeners = ['addDishToEventUp'];

    public function mount()
    {
        $this->user = auth()->user();
        $this->branch = $this->user->getBranch();
    }

    public function getDishes()
    {
        $categories = Category::query()
            ->where('branch_uuid', $this->branch->uuid)
            ->get();

        $dishes = collect();
        /** @var Category $category */
        foreach ($categories as $category)
        {
            $dishes = $dishes->merge($category->dishes()->get());
        }
        $this->dishes = $dishes;
    }

//    public function addDishToEventUp($dishUuid)
//    {
//        Element::create([
//            'dish_uuid' => $dishUuid,
//            'event_uuid' => $this->event->uuid
//        ]);
//        $this->getDishes();
//    }

    public function render()
    {
        $this->getDishes();
        return view('livewire.dashboard.pages.promotions.all-products');
    }
}
