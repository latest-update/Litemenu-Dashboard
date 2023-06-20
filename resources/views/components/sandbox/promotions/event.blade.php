<a {{ $attributes }} class="relative min-w-max h-80 rounded-lg p-6 flex flex-col overflow-hidden hover:opacity-75">
    <span aria-hidden="true" class="absolute inset-0">
        <img src="{{ $image ?? '' }}" alt="" class="w-full h-full object-center object-cover">
    </span>
    <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
    <span class="relative mt-auto text-center text-xl font-bold text-white w-36">{{ Str::limit($name, 10, '...') }}</span>
</a>
