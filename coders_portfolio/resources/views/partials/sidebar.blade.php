<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" @click="openSidebar = !openSidebar">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-gray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="javascript:void(0)">
            Tailwind Starter Kit
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a class="text-gray-500 block py-1 px-3"
                href="#" @click="openNotification = !openNotification">
                    <i class="fas fa-bell"></i>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" :class="{'block': openNotification, 'hidden': ! openNotification}">
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                        Action
                    </a>
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                        Another
                    </a>
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                        Something else here
                    </a>
                    <div class="h-0 my-2 border border-solid border-gray-100"></div>
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                        Seprated link
                    </a>
                </div>
            </li>
            <li class="inline-block relative">
                <a class="text-gray-500 block" href="#" @click="openUserResponsiveDropdown = !openUserResponsiveDropdown">
                    <div class="items-center flex">
                        <span class="w-12 h-12 text-sm text-white bg-gray-200 inline-flex items-center justify-center rounded-full">
                            <img alt="..." class="w-full rounded-full align-middle border-none shadow-lg" src="/storage/assets/img/team-1-800x800.jpg" />
                        </span>
                    </div>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" :class="{'block': openUserResponsiveDropdown, 'hidden': ! openUserResponsiveDropdown}">
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                        Action
                    </a>
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                        Another action
                    </a>
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                        Something else here
                    </a>
                    <div class="h-0 my-2 border border-solid border-gray-100"></div>
                    <a href="#" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                        Seprated link
                    </a>
                </div>
            </li>
        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar" :class="{'bg-white': openSidebar, 'hidden': ! openSidebar}">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-gray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="javascript:void(0)">
                            Tailwind Starter Kit
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" @click="openSidebar = !openSidebar">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
                <div class="mb-3 pt-0">
                    <input type="text" placeholder="Search" class="px-3 py-2 h-12 border border-solid  border-gray-500 placeholder-gray-300 text-gray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"/>
                </div>
            </form>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a class="text-pink-500 hover:text-pink-600 text-xs uppercase py-3 font-bold block" href="{{ route('dashboard') }}">
                        <i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                        Dashboard
                    </a>
                </li>
                <li class="items-center">
                    <a class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block" href="{{ route('home') }}">
                        <i class="fas fa-newspaper text-gray-400 mr-2 text-sm"></i>
                        Welcome Page
                    </a>
                </li>
                <li class="items-center">
                    <a class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block" href="#">
                        <i class="fas fa-user-circle text-gray-400 mr-2 text-sm"></i>
                        Profile Page
                    </a>
                </li>
                <li class="items-center">
                    <a class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block" href="{{ route('profile.show') }}">
                        <i class="fas fa-user-edit text-gray-400 mr-2 text-sm"></i>
                        Edit Profile Page
                    </a>
                </li>
                <li class="items-center">
                    <a class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block" href="{{ route('login') }}">
                        <i class="fas fa-fingerprint text-gray-400 mr-2 text-sm"></i>
                        Login
                    </a>
                </li>
                <li class="items-center">
                    <a class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block" href="{{ route('register') }}">
                        <i class="fas fa-clipboard-list text-gray-300 mr-2 text-sm"></i>
                        Register
                    </a>
                </li>
                <li class="items-center">
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-gray-500 text-xs uppercase py-3 font-bold block">
                            <i class="fas fa-sign-out-alt text-gray-300 mr-2 text-sm"></i>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
