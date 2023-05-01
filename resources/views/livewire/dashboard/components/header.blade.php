<div class="bg-white border-b min-h-[64px] w-full flex items-center justify-center">
    <div class="flex items-center justify-start px-4 w-[90%] ">
        <x-icon name="search" class="h-6 w-5 mr-4"/>
        <div class="flex items-center ">
            <x-input class="bg-transparent border-[#C4C5CF] rounded-lg h-[35px] w-[220px] text-sm " placeholder="Search Here..."/>
        </div>
    </div>
    <div class="flex items-center justify-center w-[25%] space-x-6 h-8">
        <x-icon name="bell" class="h-6 w-6"/>
        <x-icon name="chat" class="h-6 w-6"/>
        <x-dropdown>
            <x-dropdown.header label="Settings">
                <x-dropdown.item icon="cog" label="Preferences" />
                <x-dropdown.item icon="user" label="Profile" />
            </x-dropdown.header>

            <x-dropdown.item separator label="Help Center" />
            <x-dropdown.item label="Live Chat" />
            <x-dropdown.item label="Logout" wire:click="logout" />
            <x-slot name="trigger"><x-icon name="user-circle" class="h-6 w-6"/></x-slot>
        </x-dropdown>
        <div class="flex flex-col justify-center">
            <h1 class="text-black-500 text-sm">{{ abbreviateName(auth()->user()->fullname) }}</h1>
            <h1 class="text-[#C4C5CF] text-xs">{{ auth()->user()->getRoleNames()[0] ?? 'Гость' }}</h1>
        </div>
    </div>
</div>

