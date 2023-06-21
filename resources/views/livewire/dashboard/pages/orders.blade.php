{{--<div>--}}
<div wire:poll>
    <livewire:dashboard.pages.branch.header :branch="$branch" />
    <x-common.table.power-grid name="Orders">

        <livewire:order-table :branch="$branch" wire:key="{{ time() }}" />
    </x-common.table.power-grid>
</div>
