<div>
    <livewire:dashboard.pages.company.header :company="$company"/>
    <div class="my-8 pb-2">
        <x-common.grid name="Branches">
            @foreach($company->branches()->get() as $branch)
                <x-common.grid.branch :branch="$branch"/>
            @endforeach
            <x-common.grid.create-branch />
        </x-common.grid>
    </div>

    <livewire:components.modals.branch.create :company_uuid="$company->uuid"/>
</div>
