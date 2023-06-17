<li>
    <div class="relative px-6 py-5 flex items-center space-x-3 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#FC410C]">
        <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full object-cover object-center" src="{{ $image }}" alt="">
        </div>
        <div class="flex-1 min-w-0">
            <a class="focus:outline-none cursor-pointer" {{ $attributes }}>
                <!-- Extend touch target to entire panel -->
                <span class="absolute inset-0" aria-hidden="true"></span>
                <p class="text-sm font-medium text-gray-900">{{ $name }}</p>
                <p class="text-sm text-gray-500 truncate">{{ $description }}</p>
            </a>
        </div>
        <div>
            <x-dropdown class="absolute z-20">
                <x-dropdown.header label="Actions">
                    <x-dropdown.item icon="pencil" label="Edit" disabled/>
                    <x-dropdown.item icon="trash" label="Remove" wire:click="remove" />
                </x-dropdown.header>
            </x-dropdown>
        </div>
    </div>
</li>
