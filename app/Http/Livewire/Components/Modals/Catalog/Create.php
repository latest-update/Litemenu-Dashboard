<?php

namespace App\Http\Livewire\Components\Modals\Catalog;

use App\Http\Livewire\Image\EditorComponent;
use Livewire\WithFileUploads;

class Create extends EditorComponent
{
    use WithFileUploads;

    public $user;
    protected $rules = [
        'photo' => ['image', 'max:1024', 'mimes:png,jpg']
    ];

    public function updatedPhoto()
    {
        $this->validate();
    }

    public function save()
    {

    }

    public function render()
    {
        return view('livewire.components.modals.catalog.create');
    }
}
