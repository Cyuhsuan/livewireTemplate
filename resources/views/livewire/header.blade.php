<div>
    <header class="flex items-center justify-between h-20 px-8 bg-gray-50">
        <h1>DEMO</h1>
        <nav>
            <a href="" class="mr-8">HOME</a>
            <a href="" class="mr-8">ABOUT US</a>
            <a href="" class="mr-8">PRODUCTION</a>
            @if (!$isLogin)
                <button wire:click="$emit('openModal','login')">登入</button>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button>登出</button>
                </form>
            @endif
        </nav>
    </header>
</div>
