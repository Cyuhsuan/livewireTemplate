<div class="h-96 w-80">
    <div class="absolute top-0 left-0 flex items-center Ｆjustify-end w-full h-12 px-8 bg-green-500"><button
            wire:click="$emit('closeModal')">X</button></div>
    <div class="overflow-y-auto h-80 w-80">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="flex flex-col mt-4">
                <label for="name">
                    名稱
                </label>
                <input type="text" name="name">
            </div>
            <div class="flex flex-col mt-4">
                <label for="email">
                    email
                </label>
                <input type="text" name="email">
            </div>
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
            <div class="flex flex-col mt-4">
                <label for="password_confirmation">
                    密碼確認
                </label>
                <input type="text" name="password_confirmation">
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    註冊
                </x-jet-button>
            </div>
        </form>
    </div>
</div>
