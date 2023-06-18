<x-modal.card title="Add a new dish" max-width="4xl" wire:model.defer="newDish" >
    {{--  x-on:close="$wire.reload()"  --}}
    <div class="space-y-8 divide-y divide-gray-200">
        <div>
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
