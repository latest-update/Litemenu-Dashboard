<div>
    <livewire:dashboard.pages.company.header :company="$company"/>

{{--    @if($company->branches()->get()->count() == 0)--}}
        <livewire:dashboard.pages.company.get-started uuid="{{ $company->uuid }}"/>
{{--    @endif--}}

</div>
