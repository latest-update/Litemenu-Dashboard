<?php

namespace App\Http\Livewire\Components\Common;

use Livewire\Component;

class Modal extends Component
{
    public $myModal;
    public function render()
    {
        return view('livewire.components.common.modal');
    }
}
