<?php

namespace App\Http\Livewire\Image;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditorComponent extends Component
{
    use WithFileUploads;
    /**
     * Upload file, for example: <input type="file" wire:model="photo">
     * @var $photo
     */
    public $photo;

    /**
     * Saved image url from image editor
     * @var $imageLink
     */
    public $imageLink;

    /**
     * Temporary filename in `storage/tmp` directory
     * @var $tempImage
     */
    public $tempImage;

    /**
     * Disk to save image
     * @var $disk
     */
    protected $disk = 'public';
    protected $subDir = '';

    protected $listeners = ['handleBase64Image'];
    protected $rules = [
        'photo' => ['nullable', 'image', 'max:1024', 'mimes:png,jpg']
    ];
    protected array $customRules = [];

    public function saveAndGetImage()
    {
        $filename = Str::random(10) . '.png';
        $this->photo->storeAs('public/tmp', $filename);
        $this->tempImage = $filename;
        return 'storage/tmp/' . $filename;
    }

    public function handleBase64Image($base64Image, $filename)
    {
        $base64Str = substr($base64Image, strpos($base64Image, ",")+1);
        $decodedData = base64_decode($base64Str);
        $this->saveImage($decodedData, $filename);
        $this->photo = null;
        $this->imageLink = Storage::disk($this->disk)->url($this->subDir . '/' . $filename);
        Storage::disk('public')->delete('tmp/' . $this->tempImage);
    }

    public function saveImage($image, $imageName): void
    {
        Storage::disk($this->disk)->put($this->subDir . '/' . $imageName, $image);
    }

    public function reload(): void
    {
        Storage::disk('public')->delete('tmp/' . $this->tempImage);
        $this->resetExcept($this->disk);
    }

    protected function rules()
    {
        return array_merge($this->rules, $this->customRules);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, array_merge($this->rules, $this->customRules));
    }

}
