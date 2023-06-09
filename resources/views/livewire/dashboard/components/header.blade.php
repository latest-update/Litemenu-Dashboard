<div class="bg-white border-b min-h-[64px] w-full flex items-center justify-between max-lg:fixed top-0 z-30">
    <div class="lg:hidden flex items-center justify-start ml-4">
        <x-dropdown align="left" width="w-64" height="h-full">
            <x-slot name="trigger"><x-icon name="menu-alt-1" class="h-6 w-6"/></x-slot>
            @livewire('dashboard.sidebar.role.' . strtolower(auth()->user()->getRoleNames()[0] ?? 'guest'))
        </x-dropdown>
    </div>
    <div class="flex items-center justify-start px-4">
        <x-icon name="search" class="h-6 w-5 mr-4 max-md:hidden"/>
        <div class="flex items-center ">
            <x-input class="bg-transparent border-[#C4C5CF] rounded-lg h-[35px] w-[220px] text-sm " placeholder="Search Here..."/>
        </div>
    </div>
    <div class="flex items-center justify-center space-x-6 h-8 mr-4">
        <x-icon name="bell" class="h-6 w-6"/>
        <x-icon name="chat" class="h-6 w-6" onclick="$openModal('buySubscription')" />
        <x-dropdown>
            <x-dropdown.header label="Settings">
                <x-dropdown.item icon="user" label="Profile" wire:click="to('/profile/preferences')" />
                <x-dropdown.item icon="cog" label="Preferences" wire:click="to('/settings')"/>
            </x-dropdown.header>

            <x-dropdown.item separator label="Help Center" onclick="$openModal('buySubscription')" />
            <x-dropdown.item label="Live Chat" onclick="$openModal('buySubscription')" />
            <x-dropdown.item label="Logout" wire:click="logout" />
            <x-slot name="trigger"><x-icon name="user-circle" class="h-6 w-6"/></x-slot>
        </x-dropdown>
        <div class="flex flex-col justify-center max-md:hidden">
            <h1 class="text-black-500 text-sm">{{ abbreviateName(auth()->user()->fullname) }}</h1>
            <h1 class="text-[#C4C5CF] text-xs">{{ auth()->user()->getRoleNames()[0] ?? 'Гость' }}</h1>
        </div>
    </div>
</div>

