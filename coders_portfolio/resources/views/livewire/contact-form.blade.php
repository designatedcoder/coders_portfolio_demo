<div class="flex-auto p-5 lg:p-10">
    <h4 class="text-2xl font-semibold">Want to work with us?</h4>
    <p class="leading-relaxed mt-1 mb-4 text-gray-600">
        Complete this form and we will get back to you in 24 hours.
    </p>
    <form wire:submit.prevent="submit">
        <div class="relative w-full mb-3 mt-8">
            <label for="name" class="block uppercase text-gray-700 text-xs font-bold mb-2">{{ __('Full Name') }}</label>
            <input type="text" wire:model.debounce.500ms="name" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full">
            @error('name')
                <span class="text-red-600 mt-4">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative w-full mb-3">
            <label for="email" class="block uppercase text-gray-700 text-xs font-bold mb-2">{{ __('Email') }}</label>
            <input type="email" wire:model.debounce.500ms="email"  class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full">
            @error('email')
                <span class="text-red-600 mt-4">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative w-full mb-3">
            <label for="message" class="block uppercase text-gray-700 text-xs font-bold mb-2">{{ __('Message') }}</label>
            <input type="text" wire:model.debounce.500ms="message" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full">
            @error('message')
                <span class="text-red-600 mt-4">{{ $message }}</span>
            @enderror
        </div>
        <div class="text-center mt-6">
            <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow transition hover:shadow-lg outline-none focus:outline-none mr-1 mb-1" type="submit">
                <i class="fas fa-circle-notch animate-spin" wire:loading></i>
                <span wire:loading.remove>Send Message</span>
            </button>
        </div>
    </form>
</div>
