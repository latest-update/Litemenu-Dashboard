<?php

namespace App\Http\Livewire\Dashboard\Pages\Promotions;

use App\Models\Event;
use Livewire\Component;

class EventProducts extends Component
{

    public Event $event;

    public function addElement(string $dishUuid)
    {

    }

    public function render()
    {
        return view('livewire.dashboard.pages.promotions.event-products', [
            'dishes' => $this->event->dishes()->paginate(8),
        ]);
    }
}
