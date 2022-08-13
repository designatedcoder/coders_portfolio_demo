<x-guest-layout>
    <section class="absolute w-full h-full">
        <div class="absolute top-0 w-full h-full bg-gray-900" style="background-image: url(/storage/assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;"></div>
        <div class="container mx-auto px-4 h-full">
            <div class="flex content-center items-center justify-center h-full">
                <div class="w-full md:w-6/12 px-4">
                    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                        <div class="flex-auto px-4 lg:px-10 py-10">
                            <x-jet-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="name">
                                        {{ __('Name') }}
                                    </label>
                                    <input type="text" id="name" name="name" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow transition focus:outline-none focus:ring w-full" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="email">
                                        {{ __('Email') }}
                                    </label>
                                    <input type="email" id="email" name="email" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow transition focus:outline-none focus:ring w-full" :value="old('email')" required placeholder="Email" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="password">
                                        {{ __('Password') }}
                                    </label>
                                    <input type="password" id="password" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow transition focus:outline-none focus:ring w-full" placeholder="Password" name="password" required autocomplete="new-password" />
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="password_confirmation">
                                        {{ __('Confirm Password') }}
                                    </label>
                                    <input type="password" id="password_confirmation" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow transition focus:outline-none focus:ring w-full" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-jet-label for="terms">
                                            <div class="flex items-center">
                                                <x-jet-checkbox name="terms" id="terms"/>

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-jet-label>
                                    </div>
                                @endif

                                <div class="text-center mt-6">

                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already Registered?') }}
                                    </a>
                                    <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow transition hover:shadow-lg outline-none focus:outline-none mr-1 my-1 w-full" type="submit">
                                        <span>{{ __('Register') }}</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-6">
                        <div class="w-1/2">
                            <a href="#" class="text-gray-300">
                                <small>Forgot password?</small>
                            </a>
                        </div>
                        <div class="w-1/2 text-right">
                            <a href="#" class="text-gray-300">
                                <small>Create new account</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.auth-footer')
    </section>
</x-guest-layout>
