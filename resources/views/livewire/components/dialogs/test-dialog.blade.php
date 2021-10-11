<div>
    <div id="dialog"
        class="relative flex flex-col items-center justify-center pt-12 overflow-hidden bg-white h-80 w-80 rounded-2xl">
        <div class="absolute top-0 left-0 flex items-center justify-end w-full h-12 px-8 bg-green-500"><button
                wire:click="$emit('closeModal')">X</button></div>
        <div class="overflow-y-auto">
            <div class="p-5 text-center">
                <h2 class="mb-10">Day17 常用範例：前後端共用的表單輸入驗證</h2>

                <div class="flex justify-center mt-5">
                    <div class="p-4 px-8 text-left border-2 rounded shadow-md bg-grey-50 w-96">
                        <div class="my-5 ui form">
                            <h4 class="mb-2 ui dividing header">請輸入用戶資料</h4>
                            <div class="field">
                                <label>姓名</label>
                                <input type="text">
                            </div>
                            <div class="field">
                                <label>手機號碼</label>
                                <input type="text">
                            </div>
                            <div class="field">
                                <label>Email</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="ui button">下一步</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <script>
        document.getElementById('dialog').onclick = (e) => {
            e.stopPropagation();
        };
    </script>
</div>
