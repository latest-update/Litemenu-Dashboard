<?php

namespace App\Http\Livewire\Components\Modals\Catalog;

use App\Traits\ImageEditor;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Str;

class Create extends Component
{
    use WithFileUploads;

    public $photo;
    public $user;
    protected $rules = [
        'photo' => ['image', 'max:1024', 'mimes:png,jpg']
    ];

    protected $listeners = ['handleBase64Image'];

    public function updatedPhoto()
    {
        $this->validate();
    }

    public function save()
    {

    }

    public function getImage()
    {
        $this->validate();
        $filename = Str::random(10) . '.png';
        $this->photo->storeAs('public/tmp', $filename);
        return 'storage/tmp/' . $filename;
    }

    public function handleBase64Image($base64Image)
    {
        $base64Str = substr($base64Image, strpos($base64Image, ",")+1);
        $decodedData = base64_decode($base64Str);
        $filename = \Illuminate\Support\Str::random(10).'.jpg';
        Storage::disk('public')->put($filename, $decodedData);
    }

    public function render()
    {
        return view('livewire.components.modals.catalog.create');
    }
}
