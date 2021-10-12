<div>
    <div class="flex items-center justify-between h-12 px-8 bg-green-500">
        <h1>DEMO</h1>
        @if (!$isLogin)
            <button wire:click="$emit('openModal','login')">登入</button>
        @else
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                    <span>登出</span>
                </a>
            </form>
        @endif
    </div>
</div>
