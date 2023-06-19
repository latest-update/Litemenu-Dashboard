<div class="mb-10">
    <!-- Filters -->
    <section aria-labelledby="filter-heading" class="relative z-10 border-t border-b border-gray-200 grid items-center">
        <div class="relative col-start-1 row-start-1 py-4">
            <div class="max-w-7xl mx-auto flex space-x-6 divide-x divide-gray-200 text-sm px-4 sm:px-6 lg:px-8">
                <div>
                    <button onclick="$openModal('newDish')" type="button" class="group text-gray-700 font-medium flex items-center" aria-controls="disclosure-1" aria-expanded="false">
                        <x-icon class="flex-none w-5 h-5 mr-2 text-gray-400 group-hover:text-gray-500" name="plus" />
                        Create item
                    </button>
                </div>
            </div>
        </div>
        <div class="col-start-1 row-start-1 py-4">
            <div class="flex justify-end max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative inline-block">
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Sort
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="flex-shrink-0 -mr-1 ml-1 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-dropdown.item label="Most popular" />
                        <x-dropdown.item label="Best ratings" />
                        <x-dropdown.item label="Newest" />
                        <x-dropdown.item label="Price: Low to high" />
                        <x-dropdown.item label="Price: High to low" />
                    </x-dropdown>
                </div>
            </div>
        </div>
    </section>

    <!-- Product grid -->
    <section aria-labelledby="products-heading" class="max-w-7xl mx-auto overflow-hidden sm:px-6 lg:px-8">
        <h2 id="products-heading" class="sr-only">Products</h2>

        <div class="-mx-px border-l border-gray-200 grid grid-cols-2 sm:mx-0 md:grid-cols-3 lg:grid-cols-4">
            @foreach($dishes as $dish)
                <livewire:dashboard.pages.menu.dish-card :dish="$dish" wire:key="{{ time() }}"/>
            @endforeach
            <!-- More products... -->
        </div>
    </section>

    <div class="py-6 px-10">
        {{ $dishes->links() }}
    </div>
</div>
