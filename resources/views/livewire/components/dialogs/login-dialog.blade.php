<div class="w-80">
    {{-- <div id="dialog"
        class="relative flex flex-col items-center justify-center pt-12 overflow-hidden bg-white h-80 w-80 rounded-2xl"> --}}
        <div class="absolute top-0 left-0 flex items-center justify-end w-full h-12 px-8 bg-green-500"><button
                wire:click="$emit('closeModal')">X</button></div>
        <div class="overflow-y-auto">

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col mt-4">
                    <label for="account">
                        帳號
                    </label>
                    <input type="text" name="account">
                </div>
                <div class="flex flex-col mt-4">
                    <label for="password">
                        密碼
                    </label>
                    <input type="text" name="password">
                </div>

                <div class="flex items-center justify-between mt-4">
                    <div class="cursor-pointer" wire:click="$emit('openModal','register')">還沒註冊嗎</div>
                    <x-jet-button class="ml-4">
                        {{ __('login') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
</div>
