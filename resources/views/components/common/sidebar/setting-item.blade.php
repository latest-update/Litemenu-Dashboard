<a wire:click="changePage('{{ $name }}')" class="{{ ($name == $currentPage ) ? 'bg-teal-50 border-teal-500 text-teal-700 hover:bg-teal-50 hover:text-teal-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium' : 'border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium' }} hover:cursor-pointer" aria-current="page">
    <x-icon name="{{ $icon }}" class="{{ ($name == $currentPage) ? 'text-teal-500' : 'text-gray-400' }} group-hover:text-teal-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"  />
    <span class="truncate"> {{ $name }} </span>
</a>
