<?php

namespace App\Http\Livewire\Dashboard\Pages\Settings;

use Livewire\Component;

class Privacy extends Component
{
    public bool $hiring = true;
    public bool $private = false;
    public bool $connecting = true;
    public bool $mentions = false;
    public function render()
    {
        return view('livewire.dashboard.pages.settings.privacy');
    }
}
