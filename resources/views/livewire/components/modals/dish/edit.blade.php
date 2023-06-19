<x-modal.card title="Edit a dish" max-width="4xl" wire:model.defer="editDish" x-on:close="$wire.reload()">
    <div class="space-y-8 divide-y divide-gray-200">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Add dish images</h3>
            <p class="mt-1 text-sm text-gray-500">The beautiful pictures of dish can improve a client to purchase.</p>
        </div>
        @csrf
        @php($id = Str::random(4))
        <div>
            @if ($photo)
                <div class="flex justify-center bg-white rounded-2xl mb-4">
                    <x-image.editor alias="EditDish" image-to-edit="{{ asset($this->saveAndGetImage()) }}" class="max-w-full" />
                </div>
            @else
                <div class="sm:col-span-6 mt-6">
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload_{{ $id }}" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload_{{ $id }}" name="file-upload" type="file" class="sr-only" wire:model="photo">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 1MB</p>
                        </div>
                    </div>
                </div>
            @endif

            @if(!empty($imageLinks))
                <div class="mt-4 flow-root">
                    <div class="-my-2">
                        <div class="box-content py-2 relative h-80 overflow-x-auto xl:overflow-visible">
                            <div class="absolute min-w-screen-xl px-4 flex space-x-8 sm:px-6 lg:px-8 xl:relative xl:px-0 xl:space-x-0 xl:grid xl:grid-cols-5 xl:gap-x-8">
                                @foreach($imageLinks as $key => $image)
                                    <a href="#" class="relative w-56 h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75 xl:w-auto">
                                    <span aria-hidden="true" class="absolute inset-0">
                                        <img src="{{ $image }}" alt="" class="w-full h-full object-center object-cover">
                                    </span>
                                        <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                        <span class="relative mt-auto text-center text-xl font-bold text-white">#{{ ++$key }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row-reverse">
                    <x-button label="Reset" wire:click="reload" />
                </div>
            @endif
        </div>










        <div class="pt-8">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">Dish instance</h3>
                <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-input label="Name" placeholder="Dish name" wire:model.defer="title" />
                </div>

                <div class="sm:col-span-6">
                    <x-textarea label="Description" placeholder="Dish description" wire:model.defer="description" />
                </div>

                <div class="sm:col-span-2">
                    <x-inputs.currency
                        label="Price"
                        placeholder="Dish price"
                        icon="currency-dollar"
                        thousands=" "
                        decimal=","
                        precision="4"
                        wire:model.defer="price"
                        suffix="KZT"
                    />
                </div>

            </div>
        </div>

        <div class="pt-8">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">More information</h3>
                <p class="mt-1 text-sm text-gray-500">Provide more information about dish</p>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-6">
                    <x-textarea label="Notes" placeholder="Dish notes" wire:model.defer="notes" />
                </div>
            </div>

            {{--        Upload Dish images        --}}

        </div>
        <!-- Option create -->
        <div class="pt-6">
            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">Create options</h3>
                <p class="mt-1 text-sm text-gray-500">Induvidual options for each dish (optionally)</p>
            </div>
            @if(count($ingredients) > 0)
                <div class="flex flex-row space-x-1 mt-6">
                    @foreach($ingredients as $key => $option)
                        <div class="-m-1 flex flex-wrap items-center">
                        <span class="m-1 inline-flex rounded-full border border-gray-200 items-center py-1.5 pl-3 pr-2 text-sm font-medium bg-white text-gray-900">
                        <span>{{ $option['optionName'] }} - {{ $option['optionPrice'] }} KZT</span>
                            <button wire:click="removeIngredients({{ $key }})" type="button" class="flex-shrink-0 ml-1 h-4 w-4 p-1 rounded-full inline-flex text-gray-400 hover:bg-gray-200 hover:text-gray-500">
                                <span class="sr-only">Remove filter for Objects</span>
                                <svg class="" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                    <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                                </svg>
                            </button>
                        </span>
                        </div>
                    @endforeach
                </div>
            @endif
            <form class="flex flex-row space-x-2 mt-6" wire:submit.prevent="addIngredient">
                <x-input left-icon="dots-circle-horizontal" label="Option create" placeholder="Name" wire:model.defer="optionName"/>
                <x-inputs.currency
                    label="Option price"
                    placeholder="Price"
                    icon="currency-dollar"
                    thousands=" "
                    decimal=","
                    precision="4"
                    wire:model.defer="optionPrice"
                    suffix="KZT"
                />
                <x-button.circle positive label="+" class="mt-6" type="submit" />
            </form>

        </div>

    </div>

    <x-slot name="footer">
        <div class="flex justify-between gap-x-4 flex-row-reverse">
            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close" />
                <x-button primary label="Save" wire:click="save" />
            </div>
        </div>
    </x-slot>
</x-modal.card>
