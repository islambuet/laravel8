<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            

            <div>
                <x-jet-label for="name_en" value="{{ __('Name (English)') }}" />
                <x-jet-input id="name_en" class="block mt-1 w-full" type="text" name="name_en" :value="old('name_en')"  autofocus autocomplete="name_en" />
            </div>
            <div>
                <x-jet-label for="name_bn" value="{{ __('Name (Bangla)') }}" />
                <x-jet-input id="name_bn" class="block mt-1 w-full" type="text" name="name_bn" :value="old('name_bn')"  autofocus autocomplete="name_bn" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')"  />
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Mobile No') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="mobile_no" :value="old('mobile_no')"  />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"  autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"  autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
