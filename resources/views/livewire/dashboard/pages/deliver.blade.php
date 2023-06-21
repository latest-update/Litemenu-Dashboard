{{--<div>--}}
<div wire:poll>
    <livewire:dashboard.pages.branch.header :branch="$branch" />
    <x-common.table.power-grid name="To deliver">

        <livewire:deliver-table :branch="$branch" wire:key="{{ time() }}" />
    </x-common.table.power-grid>
</div>
