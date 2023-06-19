<?php

namespace App\Http\Livewire\Image;

use Illuminate\Support\Facades\Storage;

class MultipleEditorComponent extends EditorComponent
{
    public array $imageLinks = [];

    public function imageLink($filename)
    {
        $this->imageLinks[] = Storage::disk($this->disk)->url($this->subDir . '/' . $filename);
    }

    public function reload(): void
    {
        Storage::disk('public')->delete('tmp/' . $this->tempImage);
        $this->reset('imageLinks');
    }

}
