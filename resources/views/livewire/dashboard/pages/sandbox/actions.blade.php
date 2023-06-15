<!-- Actions panel -->
<div class="grid grid-cols-1 gap-4 lg:col-span-2 p-8">
    <h2 class="text-lg leading-6 font-medium text-gray-900">Sandbox</h2>
    <section aria-labelledby="quick-links-title">
        <div class="rounded-lg bg-gray-200 overflow-hidden shadow divide-y divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px">
            <h2 class="sr-only" id="quick-links-title">Quick links</h2>

            <x-common.grid.sandbox-action to="/sandbox/tables" icon="receipt-refund" color="rose" name="Tables" description="Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendu" />
            <x-common.grid.sandbox-action disabled to="/sandbox/reservations" icon="clock" color="teal" name="Reservation"  description="Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendu" />
            <x-common.grid.sandbox-action to="/sandbox/employees" icon="users" color="blue" name="Employee's" description="Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendu" />
            <x-common.grid.sandbox-action to="/sandbox/promotions" icon="presentation-chart-line" color="yellow" name="Promotion campaign" description="Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendu" />
            <x-common.grid.sandbox-action to="/sandbox/menu" icon="menu" color="green" name="Menu's sandbox" description="Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendu" />
            <x-common.grid.sandbox-action disabled icon="ban" color="red" name="Reserved place"  description="Doloribus dolores nostrum quia qui natus officia quod et dolorem. Sit repellendu" />

        </div>
    </section>
</div>
