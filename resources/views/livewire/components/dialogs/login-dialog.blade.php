<div>
    <div id="dialog"
        class="relative flex flex-col items-center justify-center pt-12 overflow-hidden bg-white h-80 w-80 rounded-2xl">
        <div class="absolute top-0 left-0 flex items-center justify-end w-full h-12 px-8 bg-green-500"><button
                wire:click="$emit('closeModal')">X</button></div>
        <div class="overflow-y-auto">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4">
                        {{ __('login') }}
                    </x-jet-button>
                </div>
            </form>
        </div>


    </div>
    <script>
        document.getElementById('dialog').onclick = (e) => {
            e.stopPropagation();
        };
    </script>
</div>
