<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'TALL Stack APP' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col h-full m-0 p-0 bg-base-100">
    <!-- Navbar -->
    <div class="navbar">
        <div class="max-w-screen-{{ config('app.screen_max_width') }} mx-auto w-full flex items-center">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>
                        </svg>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Home</a></li>
                        <li><a>About</a></li>
                        <li><a>Services</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">{{ $title ?? 'TALL Stack APP' }}</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a>Home</a></li>
                    <li><a>About</a></li>
                    <li><a>Services</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                @auth
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-ghost">
                            {{ Auth::user()->name }}
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="/login" class="btn btn-ghost">ログイン</a>
                    <a href="/register" class="btn btn-primary">新規登録</a>
                @endauth

                <div class="dropdown dropdown-end ml-2">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        Theme
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 max-h-96 overflow-y-auto">
                        <li><a onclick="setTheme('light')">Light</a></li>
                        <li><a onclick="setTheme('dark')">Dark</a></li>
                        <li><a onclick="setTheme('cupcake')">Cupcake</a></li>
                        <li><a onclick="setTheme('bumblebee')">Bumblebee</a></li>
                        <li><a onclick="setTheme('emerald')">Emerald</a></li>
                        <li><a onclick="setTheme('corporate')">Corporate</a></li>
                        <li><a onclick="setTheme('synthwave')">Synthwave</a></li>
                        <li><a onclick="setTheme('retro')">Retro</a></li>
                        <li><a onclick="setTheme('cyberpunk')">Cyberpunk</a></li>
                        <li><a onclick="setTheme('valentine')">Valentine</a></li>
                        <li><a onclick="setTheme('halloween')">Halloween</a></li>
                        <li><a onclick="setTheme('garden')">Garden</a></li>
                        <li><a onclick="setTheme('forest')">Forest</a></li>
                        <li><a onclick="setTheme('aqua')">Aqua</a></li>
                        <li><a onclick="setTheme('lofi')">Lofi</a></li>
                        <li><a onclick="setTheme('pastel')">Pastel</a></li>
                        <li><a onclick="setTheme('fantasy')">Fantasy</a></li>
                        <li><a onclick="setTheme('wireframe')">Wireframe</a></li>
                        <li><a onclick="setTheme('black')">Black</a></li>
                        <li><a onclick="setTheme('luxury')">Luxury</a></li>
                        <li><a onclick="setTheme('dracula')">Dracula</a></li>
                        <li><a onclick="setTheme('cmyk')">CMYK</a></li>
                        <li><a onclick="setTheme('autumn')">Autumn</a></li>
                        <li><a onclick="setTheme('business')">Business</a></li>
                        <li><a onclick="setTheme('acid')">Acid</a></li>
                        <li><a onclick="setTheme('lemonade')">Lemonade</a></li>
                        <li><a onclick="setTheme('night')">Night</a></li>
                        <li><a onclick="setTheme('coffee')">Coffee</a></li>
                        <li><a onclick="setTheme('winter')">Winter</a></li>
                        <li><a onclick="setTheme('dim')">Dim</a></li>
                        <li><a onclick="setTheme('nord')">Nord</a></li>
                        <li><a onclick="setTheme('sunset')">Sunset</a></li>
                        <li><a onclick="setTheme('caramellatte')">Caramellatte</a></li>
                        <li><a onclick="setTheme('abyss')">Abyss</a></li>
                        <li><a onclick="setTheme('silk')">Silk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <main class="flex-1">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-100 text-base-content">
        <nav class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <div class="grid grid-flow-col gap-4">
                <a>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg>
                </a>
                <a>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                    </svg>
                </a>
                <a>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                    </svg>
                </a>
            </div>
        </nav>
        <aside>
            <p>Copyright © 2024 - All right reserved by DaisyUI Test</p>
        </aside>
    </footer>

    <script>
        function setTheme(theme) {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
        }

        // Load saved theme or default to light
        const savedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', savedTheme);
    </script>

    @livewireScripts
</body>

</html>
