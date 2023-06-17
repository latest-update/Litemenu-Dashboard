<aside class="hidden xl:order-first xl:flex xl:flex-col flex-shrink-0 w-96 border-r border-gray-200">
    <x-sandbox.menu.aside-category-search wire:model="search" />
    <!-- Category list -->
    <nav class="flex-1 min-h-0 overflow-y-auto" aria-label="Category">
        @forelse($dynamicCategories ?? [] as $key=>$catalogs)
            @continue(count($catalogs) == 0)
            <div class="relative">
                <div class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                    <h3>{{ $key }}</h3>
                </div>
                <ul role="list" class="relative z-0 divide-y divide-gray-200">
                    @foreach($catalogs as $catalog)
                        <x-sandbox.menu.category.element :catalog="$catalog" wire:click="$emit('changeParent', {{ $catalog['id'] }})" />
                    @endforeach
                </ul>
            </div>
            @empty
            <div class="relative">
                <div class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                    <h3>Oops! There is a nothing</h3>
                </div>
            </div>
        @endforelse
        <div class="relative">
            <div class="z-10 sticky top-0 border-t border-b border-gray-200 bg-gray-50 px-6 py-1 text-sm font-medium text-gray-500">
                <h3>Actions</h3>
            </div>
            <ul role="list" class="relative z-0 divide-y divide-gray-200">
                <x-sandbox.menu.category.new-catalog onclick="$openModal('newCatalog')" />
            </ul>
        </div>
    </nav>
</aside>
