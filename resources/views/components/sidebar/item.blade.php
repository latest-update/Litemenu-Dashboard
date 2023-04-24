<li wire:click="changePage('{{ $name }}')">
    <a href="#" class="flex items-center py-4 px-6 {{ ($name == $currentPage ) ? 'hover:bg-[#FEEDE8] text-[#FC410C] border-l-4 border-[#FC410C]' : 'hover:bg-gray-200 text-[#8A8B9F]' }}">
        <x-icon name="{{ $icon ?? 'template' }}" class="h-5 w-5 mr-4"/>
        {{ $name }}
    </a>
</li>
