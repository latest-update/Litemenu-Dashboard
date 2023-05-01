<div class="flex h-screen min-h-screen bg-[#FBFBFB] z-0">
    @livewire('elements.sidebar', key(time()))
    <div class="flex flex-col w-full z-10">
        @livewire('dashboard.components.header')
        <div class="overflow-y-auto">
            @livewire($content, key(time()))
        </div>

    </div>

    <div wire:loading><x-common.loader.spinner /></div>
</div>

