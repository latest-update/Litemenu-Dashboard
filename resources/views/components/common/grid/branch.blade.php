<div class="bg-white overflow-hidden shadow rounded-lg">
    <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate">
            <h3 class="text-gray-900 text-sm font-medium truncate">{{ $branch->name }}</h3>
            <div class="flex items-center space-x-3">
                <h3 class="mt-1 text-gray-500 text-sm truncate">{{ $branch->admin->fullname }}</h3>
                <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">Manager</span>
            </div>
        </div>
        <img class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" src="{{ $branch->admin->profile_img() }}" alt="">
    </div>
    <div class="bg-gray-50 px-5 py-3">
        <div class="text-sm">
            <a href="/branch/{{ $branch->uuid }}" class="font-medium text-cyan-700 hover:text-cyan-900"> Manage </a>
        </div>
    </div>
</div>
