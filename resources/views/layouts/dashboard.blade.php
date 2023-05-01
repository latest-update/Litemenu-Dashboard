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
    <livewire:dashboard.content />
{{--    <livewire:store.route />--}}
    <x-notifications position="top-right" />
    @vite('resources/js/main.js')
    @livewireScripts
</body>
<script>
    const navigate = (url) => {
        window.history.pushState({}, '', url);
        Livewire.emit('changeContent', url);
    }
</script>
</html>
