@extends('layout.app')

@section('content')
    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <a>
                    <img src="images/logo.png" alt="" style="">
                </a>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <p class="text-center font-semibold" style="font-size: xx-large"> Login </p>

                <!-- Email Address -->
                <div class="mt-4">
                    {{-- <x-label for="email" :value="__('Email')" /> --}}

                    <span class="iconify" data-icon="dashicons:email"></span>

                    <x-input id="email" class="block mt-1 w-full" placeholder="Your Email" type="email" name="email"
                        :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-3">
                    {{-- <x-label for="password" :value="__('Password')" /> --}}

                    <x-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password"
                        required autocomplete="current-password" />
                </div>

                <div class="flex items-center justify-center mt-4">

                    <x-button class="">
                        {{ __('Login') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
@endsection
