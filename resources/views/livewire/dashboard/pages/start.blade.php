<main class="flex-1 pb-8">
    <x-start.header />

    <div class="mt-8">
        <x-common.grid name="Overview">
            <x-common.grid.account-balance />
            <x-common.grid.create />
        </x-common.grid>

        <x-common.table.power-grid name="Staff">
            <livewire:recent-activity />
        </x-common.table.power-grid>
        <livewire:components.common.modal />
    </div>
</main>
