<?php

namespace App\Http\Livewire\Components\Modals\Promotions;

use App\Http\Livewire\Image\EditorComponent;
use App\Models\Event;
use App\Models\Place;
use Illuminate\Support\Facades\Storage;

class CreateEvent extends EditorComponent
{
    protected $disk = 'promotion';
    public Place $place;
    public Event $event;

    protected array $customRules = [
        'event.title' => ['string', 'required'],
        'event.description' => ['string', 'required']
    ];

    protected $listeners = ['setNewEventPlace', 'handleBase64ImageCreateEvent' => 'handleBase64Image' ];

    public function setNewEventPlace(string $place_uuid)
    {
        $this->place = Place::find($place_uuid);
        $this->event = new Event();

    }

    public function save()
    {
        $this->validate();
        $this->event->image = [$this->imageLink];
        $this->event->places_uuid = $this->place->uuid;
        $this->event->save();

        return redirect(request()->header('Referer'));
    }

    public function reload(): void
    {
        Storage::disk('public')->delete('tmp/' . $this->tempImage);
    }

    public function render()
    {
        return view('livewire.components.modals.promotions.create-event');
    }
}
