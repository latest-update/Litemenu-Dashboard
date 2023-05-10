<?php

namespace App\Http\Livewire;

use App\Models\Table;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class BranchTables extends PowerGridComponent
{
    use ActionButton;
    use WithExport;

    public string $primaryKey = 'uuid';
    public string $sortField = 'uuid';


    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
//            Exportable::make('export')
//                ->striped()
//                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<Table>
     */
    public function datasource(): Builder
    {
        return Table::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('internal_id')

           /** Example of custom column using a closure **/
            ->addColumn('internal_id_lower', fn (Table $model) => strtolower(e($model->internal_id)))

            ->addColumn('temporary_key')
            ->addColumn('branch_uuid')
            ->addColumn('created_at_formatted', fn (Table $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
      * PowerGrid Columns.
      *
      * @return array<int, Column>
      */
    public function columns(): array
    {
        return [
            Column::make('Internal id', 'internal_id')
                ->sortable()
                ->searchable(),

            Column::make('Temporary key', 'temporary_key')
//                ->sortable()
//                ->searchable(),

//            Column::make('Branch uuid', 'branch_uuid')
//                ->sortable()
//                ->searchable(),
//
//            Column::make('Created at', 'created_at_formatted', 'created_at')
//                ->sortable(),

        ];
    }

    /**
     * PowerGrid Filters.
     *
     * @return array<int, Filter>
     */
    public function filters(): array
    {
        return [
            Filter::inputText('internal_id')->operators(['contains']),
//            Filter::inputText('temporary_key')->operators(['contains']),
//            Filter::inputText('branch_uuid')->operators(['contains']),
//            Filter::datetimepicker('created_at'),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Table Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
//           Button::make('edit', 'Edit')
//               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
//               ->route('table.edit', function(Table $model) {
//                    return $model->uuid;
//               }),

//           Button::make('destroy', 'Delete')
//               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
//               ->route('table.destroy', function(Table $model) {
//                    return $model->uuid;
//               })
//               ->method('delete')
            Button::add('qrcode')
                ->render(function (Table $table) {
                    return Blade::render(<<<HTML
                        <x-button dark icon="qrcode" />
                        <x-button white icon="wifi" />
                    HTML);
                })
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Table Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($table) => $table->id === 1)
                ->hide(),
        ];
    }
    */
}
