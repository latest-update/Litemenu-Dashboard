<div>
    <livewire:dashboard.pages.company.header :company="$company"/>
    <div class="my-8 pb-2">
        <x-common.grid name="Branches">
            @foreach($company->branches()->get() as $company)
                <x-common.grid.branch />
            @endforeach
            <x-common.grid.create-branch />
        </x-common.grid>
    </div>

</div>
