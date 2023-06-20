<?php

namespace App\Http\Livewire\Components\Modals\Promotions;

use App\Http\Livewire\Image\EditorComponent;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EditEvent extends EditorComponent
{
    protected $disk = 'promotion';
    public Event $event;

    protected array $customRules = [
        'event.title' => ['string', 'required'],
        'event.description' => ['string', 'required']
    ];

    protected $listeners = ['editEvent', 'handleBase64ImageEditEvent' => 'handleBase64Image' ];

    public function editEvent(string $event_uuid)
    {
        $this->event = Event::find($event_uuid);
        $this->imageLink = $this->event->image[0];
    }

    public function save()
    {
        $this->validate();
        $this->event->image = [$this->imageLink];
        $this->event->save();

        return redirect(request()->header('Referer'));
    }

    public function reload(): void
    {
        Storage::disk('public')->delete('tmp/' . $this->tempImage);
    }

    public function render()
    {
        return view('livewire.components.modals.promotions.edit-event');
    }
}
