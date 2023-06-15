<?php

namespace App\Http\Livewire\Components\Modals\Tables;

use Livewire\Component;

class Qr extends Component
{
    public string $link = 'Temporary';
    public string $uuid = '';
    public string $internal_id = '';

    protected $listeners = ['generateQr'];

    public function generateQr($link, $uuid, $internal_id)
    {
        $this->link = $link;
        $this->uuid = $uuid;
        $this->internal_id = $internal_id;
    }

    public function render()
    {
        return view('livewire.components.modals.tables.qr');
    }
}
