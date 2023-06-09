<div class="p-4 sm:px-6 grow">
    <div class="container mx-auto mt-6">
        <h1 class="text-5xl mb-4">LiteMenu</h1>
    </div>
    <div class="flex justify-center items-center h-screen mt-[-130px]">
        <div class="container mx-auto max-w-sm">
            <h1 class="text-2xl mb-4 text-center">Dashboard</h1>
            <br>
            <x-input wire:model.defer="email" class="pr-28" label="Email" placeholder="Your email" />
            <br>
            <x-inputs.password wire:model.defer="password" label="Password" placeholder="Your password"/>
            @error('auth') <br>{{ $message }}<br> @enderror
            <br>
            <div class="flex justify-between w-full">
                <a href="{{ route('register') }}">Register</a>
                <x-button dark label="Sign in" wire:click="login" />
            </div>
        </div>
    </div>
</div>
