<x-modal.card title="Catalog image upload" wire:model.defer="newCatalog" x-on:close="$wire.reload()">
    @csrf
    @if ($photo)
        <label>Preview</label>
        <div class="flex justify-center bg-gray-200 rounded-2xl mb-4">
            <x-image.editor image-to-edit="{{ asset($this->saveAndGetImage()) }}" class="max-w-full" />
        </div>
    @elseif($imageLink)
        <div class="flex justify-center bg-gray-200 rounded-2xl mb-4">
            <img src="{{ $imageLink }}" class="object-contain h-48 w-96">
        </div>
        <div class="flex flex-row-reverse">
            <x-button label="Reset" wire:click="reload" />
        </div>

    @else
        <div class="sm:col-span-6">
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input id="file-upload" name="file-upload" type="file" class="sr-only" wire:model="photo">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 1MB</p>
                </div>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2">
        <div>
            <x-input label="Name" placeholder="Catalog name" wire:model.debounce="name" />
        </div>
        <div>
            <x-input label="Description" placeholder="Short description" wire:model.debounce="description" />
        </div>
    </div>

    <x-slot name="footer">
        <div class="flex flex-row-reverse justify-between gap-x-4">

            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close"/>
                @if (!$photo)
                    <x-button primary label="Save" wire:click="save"/>
                @endif
            </div>
        </div>
    </x-slot>

    @error('photo') <span class="mt-2 text-sm text-secondary-500 dark:text-secondary-400">{{ $message }}</span> @enderror
</x-modal.card>
