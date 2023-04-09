<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @wireUiScripts
    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/js/main.js')
</head>
<body class="p-4 sm:px-6 grow">
    <div class="container mx-auto mt-6">
        <h1 class="text-5xl mb-4">LiteMenu</h1>
    </div>

    <div class="flex justify-center items-center h-screen mt-[-130px]">
        <div class="container mx-auto max-w-sm">
            <h1 class="text-2xl mb-4 text-center">Dashboard</h1>
            <br>
            <x-input class="pr-28" label="Login" value="guest" placeholder="Your login" />
            <br>
            <x-inputs.password label="Password" value="guest" placeholder="Your password"/>
            <br>
            <livewire:counter />
        </div>
    </div>

    <x-notifications position="top-right" />
    @livewireScripts
</body>
</html>
