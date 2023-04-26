<x-modal.card blur title="New company" wire:model.defer="newCompany">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <x-input label="Name" placeholder="New company name" wire:model.defer="name"/>
        <x-input label="Address" placeholder="Company address" wire:model.defer="address"/>
        <x-input label="Phone" placeholder="Company's phone number" wire:model.defer="phone"/>
        <div class="col-span-1 sm:col-span-2 ">
            <x-textarea label="Description" placeholder="Tell us about your company" class="rounded-xl shadow h-72" wire:model.defer="description"/>
        </div>
    </div>
    <x-slot name="footer">
        <div class="flex justify-between">
            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close" />
                <x-button primary label="Save" wire:click="save" />
            </div>
        </div>
    </x-slot>
</x-modal.card>
