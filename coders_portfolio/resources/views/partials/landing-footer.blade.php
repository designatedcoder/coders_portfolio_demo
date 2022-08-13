<footer class="relative bg-gray-300 pt-8 pb-6">
    <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20 h-20">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                <h5 class="text-lg mt-0 mb-2 text-gray-700">
                    Find us on any of these platforms, we respond 1-2 business days.
                </h5>
                <div class="mt-6">
                    <button class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                        <i class="flex fab fa-twitter"></i>
                    </button>
                    <button class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                        <i class="flex fab fa-facebook-square"></i>
                    </button>
                    <button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                        <i class="flex fab fa-dribbble"></i>
                    </button>
                    <button class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3" type="button">
                        <i class="flex fab fa-github"></i>
                    </button>
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">
                            Useful Links
                        </span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">
                                    Github
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">
                                    Free Products
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">
                            Other Resources
                        </span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm" href="#">
                                        MIT License
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('terms.show') }}" target="_blank" class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">
                                    Terms &amp; Conditions
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('policy.show') }}" target="_blank" class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="#contact" class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    Copyright © <?php echo date("Y"); ?> Tailwind Starter Kit by
                    <a href="./landing-page.html" class="text-gray-600 hover:text-gray-900">
                        Creative Tim
                    </a>.
                </div>
            </div>
        </div>
    </div>
</footer>
