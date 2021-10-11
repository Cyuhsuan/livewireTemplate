<div class="absolute top-0 left-0">
    @if ($isOpen === true)
        <div class="z-10 flex items-center justify-center w-screen h-screen bg-black bg-opacity-50"
            wire:click="closeModal">
            <p class="text-pink-50">
                @if ($dialog === 'test')
                    <livewire:components.dialogs.test-dialog />
                @elseif ($dialog === 'register')
                    <livewire:components.dialogs.register-dialog />
                @elseif ($dialog === 'login')
                    <livewire:components.dialogs.login-dialog />
                @endif
            </p>
        </div>
    @endif
</div>
