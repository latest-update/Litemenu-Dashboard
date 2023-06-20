<?php

namespace App\Http\Livewire\Components\Modals\Promotions;

use App\Models\Event;
use Livewire\Component;

class AddElements extends Component
{

    public Event $event;

    public function render()
    {
        return view('livewire.components.modals.promotions.add-elements');
    }
}
