<div class="flex h-full min-h-screen bg-[#FBFBFB] z-0">
    <div class="bg-white w-64 border-r shadow-sm z-20">
        @livewire('dashboard.components.role.' . strtolower(auth()->user()->getRoleNames()[0] ?? 'guest'), ['currentPage' => $currentPage])
    </div>
    <div class="flex flex-col w-full z-10">
        @livewire('dashboard.components.header')
        @livewire('dashboard.pages.' . strtolower($currentPage), key(time()))
    </div>
</div>
