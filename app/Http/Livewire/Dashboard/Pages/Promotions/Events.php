<?php

namespace App\Http\Livewire\Dashboard\Pages\Promotions;

use App\Models\Place;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Events extends Component
{
    public Place $place;
    public Collection $events;

    public function mount ()
    {
        $this->events = $this->place->events()->get();
    }

    public function remove()
    {
        ///
    }

    public function render()
    {
        return view('livewire.dashboard.pages.promotions.events');
    }
}
