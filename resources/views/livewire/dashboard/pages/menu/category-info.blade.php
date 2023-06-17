<main class="flex-1 relative z-0 overflow-y-auto focus:outline-none xl:order-last">
    <!-- Breadcrumb -->
    <nav class="flex items-start px-4 py-3 sm:px-6 lg:px-8 xl:hidden" aria-label="Breadcrumb">
        <a href="#" class="inline-flex items-center space-x-3 text-sm font-medium text-gray-900">
            <!-- Heroicon name: solid/chevron-left -->
            <svg class="-ml-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            <span>Directory</span>
        </a>
    </nav>

    @isset($category)
    <article class="min-h-screen">
        <!-- Category header -->
        <x-sandbox.menu.category.header :$category />


    </article>
    @endisset
    @empty($category)
        Empty,
        TODO: Show all dishes
    @endempty
</main>
