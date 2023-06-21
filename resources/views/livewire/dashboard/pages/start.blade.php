<main class="flex-1 pb-8">
    <x-start.header />

    <div class="mt-8">
        <x-common.grid name="Overview">
            <x-common.grid.account-balance />
            <x-common.grid.subscription />
            @foreach($this->companies() as $company)
                <x-common.grid.company name="{{ $company->name }}" address="{{ $company->address }}" uuid="{{ $company->uuid }}"/>
            @endforeach
            @if(count($this->companies()) < 1)
                <x-common.grid.create />
            @else
                <x-common.grid.disabled-create onclick="$openModal('buySubscription')"/>
            @endif
        </x-common.grid>

        <x-common.table.power-grid name="Staff">
            <livewire:employee-tables />
        </x-common.table.power-grid>

        <livewire:components.modals.company.create />
    </div>
</main>
