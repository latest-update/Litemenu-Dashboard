<div>
    <livewire:dashboard.pages.branch.header :branch="$branch" />

    <x-common.table.power-grid name="Employees">
        <x-button positive label="Add new employee" class="my-2" onclick="$openModal('addEmployee')" />
        <livewire:employee-tables :branch="$branch" />
    </x-common.table.power-grid>
    <livewire:components.modals.employees.add-employee :branch="$branch" />
</div>
