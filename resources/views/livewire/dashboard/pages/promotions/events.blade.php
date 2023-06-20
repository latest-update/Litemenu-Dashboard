<div class="grid grid-cols-1 w-full mb-8">
    <div class="flex flex-row items-center space-x-1">
        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">{{ $place->name }} </h2>
        <x-icon class="w-5 h-5 cursor-pointer" name="trash" wire:click="remove"/>
    </div>

    <p class="mt-4 text-base text-gray-500">Type: {{ $place->type }} | Size: {{ $place->size }}</p>
    <div class="h-85 w-full soft-scrollbar overflow-x-auto p-2">
        <div class="relative flex items-center h-80">
            <div class="absolute min-w-screen-xl px-4 flex space-x-8">
                <x-sandbox.promotions.event onclick="Livewire.emit('setNewEventPlace', '{{ $place->uuid }}'); $openModal('newEvent')" name="Create" image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCBLDsJahPXhfxCcDOyHONycaEJUz3FvOgKTEA-EAe6OoWkMmc-3xpTn3awjCnRQMbTO4&usqp=CAU"/>
                @foreach($events ?? [] as $event)
                    <x-sandbox.promotions.event onclick="Livewire.emit('editEvent', '{{ $event->uuid }}'); $openModal('editEvent')" name="{{ $event->title }}" image="{{ $event->image[0] ?? 'https://www.berchielli.co.uk/wp-content/themes/barberry/images/placeholder.jpg' }}"/>
                @endforeach
            </div>
        </div>
    </div>
</div>
