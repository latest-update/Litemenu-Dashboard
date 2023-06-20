<?php

namespace App\Http\Livewire\Dashboard\Pages\Promotions;

use App\Models\Element;
use App\Models\Event;
use Livewire\Component;

class EventProducts extends Component
{

    public Event $event;

    protected $listeners = ['addDishToEventUp'];

    public function addDishToEventUp($dishUuid)
    {
        Element::create([
            'dish_uuid' => $dishUuid,
            'event_uuid' => $this->event->uuid
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.pages.promotions.event-products', [
            'dishes' => $this->event->dishes()->paginate(8),
        ]);
    }
}
