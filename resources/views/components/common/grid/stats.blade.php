<div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
    <dt>
        <div class="absolute bg-indigo-500 rounded-md p-3">
            <!-- Heroicon name: outline/users -->
            <x-icon name="{{ $icon }}" class="h-6 w-6 text-white" />
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">{{ $name }}</p>
    </dt>
    <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-gray-900">{{ $stat }}</p>
        @if($up)
            <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                <x-icon name="chevron-up" class="self-center text-sm flex-shrink-0 h-5 w-5 text-green-500" />
                <span class="sr-only"> Increased by </span>
                {{ $index }}
            </p>
        @else
            <p class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
                <!-- Heroicon name: solid/arrow-sm-down -->
                <x-icon name="chevron-down" class="self-center flex-shrink-0 h-5 w-5 text-red-500" />
                <span class="sr-only"> Decreased by </span>
                {{ $index }}
            </p>
        @endif
        <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> View all </a>
            </div>
        </div>
    </dd>
</div>
