<div>
    <div class="absolute top-0 left-0 flex items-center justify-end w-full h-12 px-8 bg-green-500">
        <button wire:click="$emit('closeModal')">X</button>
    </div>
    <div class="overflow-y-auto">
        <div class="p-5 text-center">
            <h2 class="mb-10">前後端共用的表單輸入驗證</h2>
            <div class="flex flex-col justify-center mt-5">
                <div class="flex flex-col mt-4">
                    <label class="text-left">
                        name
                    </label>
                    <input type="text" class="rounded-md" wire:model='data.name'>
                    @error('data.name') <span class="text-red-500 error">*{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col mt-4">
                    <label class="text-left">
                        email
                    </label>
                    <input type="text" class="rounded-md" wire:model='data.email'>
                    @error('data.email') <span class="text-red-500 error">*{{ $message }}</span> @enderror
                </div>
            </div>
            <button wire:click="submit">送出</button>
        </div>
    </div>
</div>
