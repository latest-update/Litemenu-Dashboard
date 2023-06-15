<?php

namespace App\Http\Livewire\Image;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;

class EditorComponent extends Component
{

    public $photo;
    public $imageLink;
    protected $listeners = ['handleBase64Image'];

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
        $filename = Str::random(10).'.jpg';
        Storage::disk('public')->put($filename, $decodedData);
        $this->photo = null;
    }

}
