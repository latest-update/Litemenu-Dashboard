<div>
    <x-common.table.power-grid name="Tables of {{ $branch->name }}">
        <x-button positive label="Create table" class="my-2" wire:click="new"/>
        <livewire:branch-tables />
    </x-common.table.power-grid>
    <livewire:components.modals.tables.qr />
</div>
