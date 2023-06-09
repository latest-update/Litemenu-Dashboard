<div class="h-full flex">

    <div class="flex flex-col min-w-0 flex-1 overflow-hidden">

        <div class="flex-1 relative z-0 flex overflow-hidden">
            <livewire:dashboard.pages.menu.category-info :parent-category="$parentCategory" wire:key="{{ time() . Str::random(4) }}"/>
            <livewire:dashboard.pages.menu.aside-category :parent-category="$parentCategory" wire:key="{{ time() . Str::random(4) }}"/>
        </div>
    </div>
    <livewire:components.modals.catalog.create :parent-category="$parentCategory" wire:key="{{ time() . Str::random(4) }}"/>
    <livewire:components.modals.dish.create :parent-category="$parentCategory" wire:key="{{ time() . Str::random(4) }}"/>
    <livewire:components.modals.dish.edit wire:key="{{ time() . Str::random(4) }}"/>
</div>
