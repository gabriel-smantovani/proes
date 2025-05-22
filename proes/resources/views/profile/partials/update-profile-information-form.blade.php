<section>
    <header>
        <h2 class="text-lg font-medium" style="color: #f3f4f6;">
            {{ __('Informações do perfil') }}
        </h2>

        <p class="mt-1 text-sm" style="color: #9ca3af;">
            {{ __("Atualize o nome da sua conta e/ou seu endereço de email.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nome')" style="color: #f3f4f6;" />
            <x-text-input id="name" name="name" type="text" maxlength="50" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" style="color: #f3f4f6;" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="instituicao" :value="__('Instituição de ensino')" style="color: #f3f4f6;" />
            <x-text-input id="instituicao" name="instituicao_ensino" type="text" maxlength="100" class="mt-1 block w-full" :value="old('instituicao_ensino', $user->instituicao_ensino)" autofocus autocomplete="instituicao_ensino" />
            <x-input-error class="mt-2" :messages="$errors->get('instituicao_ensino')" />
        </div>

        <div>
            <x-input-label for="github" :value="__('Link do GitHub')" style="color: #f3f4f6;" />
            <x-text-input id="github" name="link_github" type="text" maxlength="100" class="mt-1 block w-full" :value="old('link_github', $user->link_github)" autofocus autocomplete="link_github" />
            <x-input-error class="mt-2" :messages="$errors->get('link_github')" />
        </div>

        <div>
            <x-input-label for="linkedin" :value="__('Link do Linkedin')" style="color: #f3f4f6;" />
            <x-text-input id="linkedin" name="link_linkedin" type="text" maxlength="100" class="mt-1 block w-full" :value="old('link_linkedin', $user->link_linkedin)" autofocus autocomplete="link_linkedin" />
            <x-input-error class="mt-2" :messages="$errors->get('link_linkedin')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="background-color: #3730a3; border: 1px solid #34d399">{{ __('Salvar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Salvo.') }}</p>
            @endif
        </div>
    </form>
</section>
