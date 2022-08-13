<footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
    <div class="container mx-auto px-4">
        <hr class="mb-6 border-b-1 border-gray-700" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4">
                <div class="text-sm text-white font-semibold py-1">
                    Copyright © <?php echo date("Y"); ?>
                    <a href="{{ route('home') }}" class="text-white hover:text-gray-400 text-sm font-semibold py-1">
                        My Portfolio
                    </a>
                </div>
            </div>
            <div class="w-full md:w-8/12 px-4">
                <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                    <li>
                        <a href="{{ route('home') }}" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3">
                            MIT License
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
