<x-guest-layout>
    @section('title','Inicio de sesión')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container col-lg-4 col-xl-4 col-xxl-4 d-flex flex-column align-items-center justify-content-center rounded-lg shadow-lg bg-white p-5 mt-5">
        <div>
            <x-application-logo-blue class="block h-9 w-auto fill-current text-gray-800"/>
        </div>
        <form method="POST" action="{{ route('login') }}" class="w-full">
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Correo Electrónico')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-3 btn" style="background-color: #111e60; color: #f2f2f2;">
                    {{ __('Iniciar Sesión') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>

