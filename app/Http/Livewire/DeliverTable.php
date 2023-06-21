<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\Filters\Filter;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class DeliverTable extends PowerGridComponent
{
    use ActionButton;
    use WithExport;

    public string $primaryKey = 'orders.uuid';
    public string $sortField = 'orders.status';
    public string $sortDirection = 'asc';
    public Branch $branch;

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
     * @return Builder<\App\Models\Order>
     */
    public function datasource(): Builder
    {
        return Order::query()
            ->join('tables', function ($tables) {
                $tables->on('orders.table_uuid', '=', 'tables.uuid');
            })
            ->where('orders.status', '=', 3)
            ->where('branch_uuid', '=', $this->branch->uuid)
            ->select([
                'orders.*',
                'tables.internal_id',
                DB::raw("
                    CASE orders.status
                        WHEN 3 THEN 'To deliver'
                        ELSE 'Unknown Status'
                    END as status_description
                ")
            ]);
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
            ->addColumn('uuid')

           /** Example of custom column using a closure **/
            ->addColumn('uuid_lower', fn (Order $model) => strtolower(e($model->uuid)))

            ->addColumn('phone')
            ->addColumn('internal_id')
            ->addColumn('name')
            ->addColumn('price')
            ->addColumn('status')
            ->addColumn('created_at_formatted', fn (Order $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
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
//            Column::make('Order ID', 'uuid')
//                ->sortable()
//                ->searchable(),
            Column::make('Status', 'status_description')
                ->sortable()
                ->searchable(),

            Column::make('Table', 'internal_id')
                ->sortable()
                ->searchable(),

            Column::make('Phone', 'phone')
                ->sortable()
                ->searchable(),

            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Price', 'price'),
            Column::make('Created at', 'created_at_formatted', 'created_at')
                ->sortable(),

        ];
    }


    public function actions(): array
    {
        return [
            Button::add('actions')
                ->render(function (Order $order) {
                    return Blade::render(<<<HTML
                        <x-button.circle secondary icon="clipboard-list"  />
                        @if($order->status == 3)
                            <x-button.circle positive icon="arrow-circle-right" wire:click="changeStatus('$order->uuid', 4)" />
                        @endif
                        <x-button.circle negative icon="x" wire:click="changeStatus('$order->uuid', 5)"/>
                    HTML);
                })
        ];
    }

    protected $listeners = [
        'changeStatus'
    ];

    public function changeStatus(string $orderUuid, int $status)
    {
        $order = Order::find($orderUuid);
        $order->status = $status;
        $order->save();
    }

    /**
     * PowerGrid Filters.
     *
     * @return array<int, Filter>
     */
    public function filters(): array
    {
        return [
            Filter::inputText('uuid')->operators(['contains']),
            Filter::inputText('phone')->operators(['contains']),
            Filter::inputText('name')->operators(['contains']),
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
     * PowerGrid Order Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('order.edit', function(\App\Models\Order $model) {
                    return $model->id;
               }),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('order.destroy', function(\App\Models\Order $model) {
                    return $model->id;
               })
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Order Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($order) => $order->id === 1)
                ->hide(),
        ];
    }
    */
}
