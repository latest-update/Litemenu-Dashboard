<x-modal.card title="Profile image upload" wire:model.defer="profileImage">
    <form wire:submit.prevent="save">
        @if ($photo)
            <label>Preview</label>
            <div class="flex justify-center bg-gray-200 rounded-2xl mb-4">
                <img src="{{ $photo->temporaryUrl() }}" class="object-contain h-48 w-96">
            </div>
            @if (!$errors->has('photo'))
                <div class="flex flex-row-reverse mt-4">
                    <x-button label="Upload" wire:click="save" />
                </div>
            @endif
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

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <x-input label="Name" placeholder="Your full name" />
            <x-input label="Phone" placeholder="USA phone" />

            <div class="col-span-1 sm:col-span-2">
                <x-input label="Email" placeholder="example@mail.com" />
            </div>
        </div>

        @error('photo') <span class="error mt-4">{{ $message }}</span> @enderror
    </form>
</x-modal.card>
