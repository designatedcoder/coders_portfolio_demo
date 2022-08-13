<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3" x-data="{ open: false}">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="{{ route('home') }}">
                My Portfolio
            </a>
            <button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" @click="open = !open">
                <i class="text-white fas fa-bars"></i>
            </button>
        </div>
        <div class="rounded lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden" id="example-collapse-navbar" :class="{'block': open, 'hidden': !open}">
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                @auth
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="{{ route('dashboard') }}">
                            <span class="inline-block ml-2">Dashboard</span>
                        </a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="{{ route('profile.show') }}">
                            <span class="inline-block ml-2">Profile</span>
                        </a>
                    </li>
                    <li class="flex items-center">
                        <form method="POST" action="{{ route('logout') }}" class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" x-data>
                            @csrf
                            <button type="submit" class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold focus:outline-none">
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    @if (Route::has('register'))
                        <li class="flex items-center">
                            <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="{{ route('register') }}">
                                <span class="inline-block ml-2">Register</span>
                            </a>
                        </li>
                        <li class="flex items-center">
                            <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="{{ route('login') }}">
                                <span class="inline-block ml-2">Login</span>
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>
