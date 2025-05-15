<section>
    <header>
        <h2 class="text-lg font-medium" style="color: #f3f4f6;">
            {{ __('Informações adicionais') }}
        </h2>

        <p class="mt-1 text-sm" style="color: #9ca3af;">
            {{ __("Atualize seus contatos.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="instituicao" :value="__('Instituição de ensino')" style="color: #f3f4f6;" />
            <x-text-input id="instituicao" name="instituicao_ensino" type="text" class="mt-1 block w-full" :value="old('instituicao_ensino', $user->instituicao_ensino)" required autofocus autocomplete="instituicao_ensino" />
            <x-input-error class="mt-2" :messages="$errors->get('instituicao_ensino')" />
        </div>

        <div>
            <x-input-label for="github" :value="__('Link do GitHub')" style="color: #f3f4f6;" />
            <x-text-input id="github" name="link_github" type="text" class="mt-1 block w-full" :value="old('link_github', $user->link_github)" required autofocus autocomplete="link_github" />
            <x-input-error class="mt-2" :messages="$errors->get('link_github')" />
        </div>

        <div>
            <x-input-label for="linkedin" :value="__('Link do Linkedin')" style="color: #f3f4f6;" />
            <x-text-input id="linkedin" name="link_linkedin" type="text" class="mt-1 block w-full" :value="old('link_linkedin', $user->link_linkedin)" required autofocus autocomplete="link_linkedin" />
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
