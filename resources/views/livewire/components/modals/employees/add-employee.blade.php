<x-modal.card blur title="New company" wire:model.defer="addEmployee">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <x-select
            label="Search a lead manager"
            wire:model.defer="user_id"
            placeholder="Select some user"
            :async-data="route('api.users')"
            option-label="fullname"
            option-value="id"
        />
        <x-select
            label="Select Role"
            placeholder="Select one role"
            :options="$roles"
            clearable="0"
            wire:model.defer="role"
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
