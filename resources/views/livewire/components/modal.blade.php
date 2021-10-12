<div class="absolute top-0 left-0">
    @if ($isOpen === true)
        <div class="z-10 flex items-center justify-center w-screen h-screen bg-black bg-opacity-50"
            wire:click="closeModal">
            <div id="dialog"
                class="relative flex flex-col items-center justify-center px-8 pt-12 pb-8 overflow-hidden bg-white rounded-lg">
                @if ($dialog === 'test')
                    <livewire:components.dialogs.test-dialog />
                @elseif ($dialog === 'register')
                    <livewire:components.dialogs.register-dialog />
                @elseif ($dialog === 'login')
                    <livewire:components.dialogs.login-dialog />
                @endif
            </div>
        </div>
        <script>
            document.getElementById('dialog').onclick = (e) => {
                e.stopPropagation();
            };
        </script>
    @endif
</div>
