@extends('layout.app')

@section('content')
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <img src="images/logo.png" alt="" style="">
                </a>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <p class="text-center font-semibold" style="font-size: xx-large"> Register </p>

                <!-- First Name -->
                <div class="mt-4">
                    {{-- <x-label for="name" :value="__('Name')" /> --}}

                    <x-input id="name" class="block mt-1 w-full" placeholder="Your First Name" type="text" name="name"
                        :value="old('name')" required autofocus />
                </div>

                <!-- Last Name -->
                <div class="mt-4">
                    {{-- <x-label for="name" :value="__('Name')" /> --}}

                    <x-input id="last_name" class="block mt-1 w-full" placeholder="Your Last Name" type="text" name="last_name"
                        :value="old('last_name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-3">
                    {{-- <x-label for="email" :value="__('Email')" /> --}}

                    <x-input id="email" class="block mt-1 w-full" placeholder="Your Email" type="email" name="email"
                        :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mt-3">
                    {{-- <x-label for="password" :value="__('Password')" /> --}}

                    <x-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password"
                        required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-3">
                    {{-- <x-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                    <x-input id="password_confirmation" class="block mt-1 w-full" placeholder="Confirm Password"
                        type="password" name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-center">
                    {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}

                    <x-button class="mt-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
@endsection
