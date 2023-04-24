<div class="p-4 sm:px-6 grow">
    <div class="container mx-auto mt-6">
        <h1 class="text-5xl mb-4">LiteMenu</h1>
    </div>
    <div class="flex justify-center items-center h-screen mt-[-130px]">
        <div class="container mx-auto max-w-sm">
            <h1 class="text-2xl mb-4 text-center">Registration</h1>
            <br>
            <x-input wire:model.defer="fullname" icon="user" label="Fullname" placeholder="Your fullname" />
            <br>
            <x-input wire:model.defer="email" label="Email" placeholder="Your email" />
            <br>
            <x-inputs.maskable wire:model.defer="phone" label="Mobile number" mask="8 (###) ###-####" placeholder="Your phone number"/>
            <br>
            <x-inputs.password wire:model.defer="password" label="Password" placeholder="Your password"/>
            @error('auth') <br>{{ $message }}<br> @enderror
            <br>
            <div class="flex justify-end w-full">
                <x-button dark label="Sign up" wire:click="register" />
            </div>
        </div>
    </div>
</div>
