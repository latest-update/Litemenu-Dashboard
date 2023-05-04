<x-modal.card blur title="New branch" wire:model.defer="newBranch">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <x-input label="Name" placeholder="New branch name" wire:model.defer="name"/>
        <x-input label="Address" placeholder="Branch address" wire:model.defer="address"/>
        <x-select
            label="Search a lead manager"
            wire:model.defer="admin_id"
            placeholder="Select some user"
            :async-data="route('api.users')"
            option-label="fullname"
            option-value="id"
        />
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
