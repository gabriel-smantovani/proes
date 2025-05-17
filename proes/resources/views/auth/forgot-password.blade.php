<x-guest-layout>
    <div class="mb-4 text-sm" style="color: #f3f4f6">
        {{ __('Nos informe seu endereço de email para que possamos lhe enviar um link de redefinição da senha.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" style="color: #f3f4f6"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button style="background-color: #3730a3">
                {{ __('Envie o link de redefinição') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
