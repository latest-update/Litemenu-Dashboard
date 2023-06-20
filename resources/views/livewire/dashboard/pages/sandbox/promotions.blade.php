<div>
    <livewire:dashboard.pages.branch.header :branch="$branch" />

    <div class="p-6">
        <x-sandbox.promotions.new-place onclick="$openModal('newPlace')" />
    @foreach($places as $place)
        <livewire:dashboard.pages.promotions.events :place="$place" />
    @endforeach

    </div>
    <livewire:components.modals.promotions.create-place :branch="$branch" wire:key="{{ time() . Str::random(4) }}" />
    <livewire:components.modals.promotions.create-event wire:key="{{ time() . Str::random(4) }}" />
    <livewire:components.modals.promotions.edit-event wire:key="{{ time() . Str::random(4) }}" />
</div>
