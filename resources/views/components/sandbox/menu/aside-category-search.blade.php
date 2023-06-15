<div class="px-6 pt-6 pb-4">
    <h2 class="text-lg font-medium text-gray-900">Categories</h2>
    <p class="mt-1 text-sm text-gray-600">Search directory of 3,018 employees</p>
    <form class="mt-6 flex space-x-4" action="#">
        <div class="flex-1 min-w-0">
            <label for="search" class="sr-only">Search</label>
            <div class="relative rounded-md shadow-sm">
                <x-input icon="search" type="search" name="search" id="search" class="focus:ring-[#FC410C] focus:border-[#FC410C] block w-full pl-10 sm:text-sm border-gray-300 rounded-md" placeholder="Search" {{ $attributes }}/>
            </div>
        </div>
        <button type="submit" class="inline-flex justify-center px-3.5 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FC410C]">
            <!-- Heroicon name: solid/filter -->
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>
</div>
