<x-guest-layout>
    <section class="absolute w-full h-full">
        <div class="absolute top-0 w-full h-full bg-gray-900" style="background-image: url(/storage/assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;"></div>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full lg:w-6/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                        <div class="flex-auto px-4 lg:px-10 py-10">
                            <x-jet-validation-errors class="mb-4" />
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">
                                        {{ __('Email') }}
                                    </label>
                                    <input type="email" id="email" name="email" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow transition focus:outline-none focus:ring w-full" :value="old('email')" required autofocus placeholder="Email" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="password">
                                        {{ __('Password') }}
                                    </label>
                                    <input type="password" id="password" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow transition focus:outline-none focus:ring w-full" placeholder="Password" name="password" required  autocomplete="current-password" />
                                </div>
                                <div>
                                    <label for="remember_me" class="inline-flex items-center cursor-pointer">
                                        <input id="remember_me" type="checkbox"  name="remember" class="form-checkbox border-0 rounded text-gray-800 ml-1 w-5 h-5 transition" />
                                        <span class="ml-2 text-sm font-semibold text-gray-700">
                                            {{ __('Remember me') }}
                                        </span>
                                    </label>
                                </div>
                                <div class="text-center mt-6">
                                    <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow transition hover:shadow-lg outline-none focus:outline-none mr-1 my-1 w-full" type="submit">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                            </form>
                            <div class="flex flex-col items-center">
                                <div>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div>
                                    <a href="{{ route('register') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                                        {{ __('Create new account') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.auth-footer')

    </section>
</x-guest-layout>
