<x-modal.card title="Create a new place"  wire:model.defer="newPlace" >
    {{--    x-on:close="$wire.reload()"--}}
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-3 sm:col-span-2">
            <x-input icon="user" label="Name" placeholder="place name" wire:model.defer="place.name" />
        </div>
    </div>
    <div class="flex flex-row flex-wrap space-x-2 mt-5">

        <x-select
            label="Select type"
            placeholder="Select type"
            :options="$types"
            clearable="0"
            wire:model.defer="place.type"
        />
        <x-select
            label="Select size"
            placeholder="Select size"
            :options="$sizes"
            clearable="0"
            wire:model.defer="place.size"
        />
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
