<div class="bg-white overflow-hidden shadow rounded-lg flex flex-col">
    <div class="p-5">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <!-- Heroicon name: outline/scale -->
                <x-icon name="cash" class="w-6 h-6 text-gray-500" />
            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                    <dt class="text-sm font-medium text-gray-500 truncate">{{ $name }}</dt>
                    <dd>
                        <div class="text-sm font-medium text-gray-900">{{ $address }}</div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 px-5 py-3 mt-auto">
        <div class="text-sm">
            <a href="/company/{{ $uuid }}" class="font-medium text-cyan-700 hover:text-cyan-900"> Open </a>
        </div>
    </div>
</div>
