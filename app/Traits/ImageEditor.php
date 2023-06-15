<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageEditor
{
    public $base64Image;

    protected $listenersImageEditor = ['handleBase64Image'];

    public function handleBase64Image($base64Image): void
    {
        $base64Str = substr($base64Image, strpos($base64Image, ",")+1);
        $decodedData = base64_decode($base64Str);
        $filename = Str::random(10).'.jpg';
        Storage::disk('public')->put($filename, $decodedData);
        $this->base64Image = $filename;
    }
}
