<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @wireUiScripts
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex h-screen min-h-screen bg-[#FBFBFB] z-0">
        @livewire('elements.sidebar')
        <div class="flex flex-col w-full z-10">
            @livewire('dashboard.components.header')
            <div class="overflow-y-auto">
                {{ $slot }}
            </div>

        </div>

        <div wire:loading><x-common.loader.spinner /></div>
    </div>
    <x-notifications position="top-right" />
    @vite('resources/js/main.js')
    @livewireScripts
</body>
</html>
