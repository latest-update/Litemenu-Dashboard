<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @wireUiScripts
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/js/main.js')
</head>
<body>
    {{ $slot }}
    <x-notifications position="top-right" />
    @livewireScripts
</body>
</html>
