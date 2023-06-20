<?php

namespace App\Http\Livewire\Components\Modals\Promotions;

use App\Models\Branch;
use App\Models\Place;
use Livewire\Component;

class CreatePlace extends Component
{

    public Branch $branch;
    public Place $place;

    public array $sizes = [
        '', 'small', 'wide'
    ];

    public array $types = [
        '', 'slide'
    ];

    protected $rules = [
        'place.name' => ['string', 'required'],
        'place.size' => ['string', 'required'],
        'place.type' => ['string', 'required'],
    ];

    public function save()
    {
        $this->validate();
        $this->place->branch_uuid = $this->branch->uuid;
        $this->place->save();
        return redirect(request()->header('Referer'));
    }

    public function mount()
    {
        $this->place = new Place();
    }


    public function render()
    {
        return view('livewire.components.modals.promotions.create-place');
    }
}
