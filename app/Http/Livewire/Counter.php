<?php

namespace App\Http\Livewire;

use Livewire\Component;
use WireUi\Traits\Actions;

class Counter extends Component
{
    use Actions;

    public function notifyError ()
    {
        $this->notification()->error(
            $title = 'Error !!!',
            $description = 'Incorrect login or password'
        );
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
