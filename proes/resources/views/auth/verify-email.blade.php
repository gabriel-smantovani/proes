<x-guest-layout>
    <div class="mb-4 text-sm" style="color: #f3f4f6">
        {{ __('Obrigado por se inscrever! Antes de começar, poderia verificar seu endereço de email clicando no link que enviamos para você via email? Se não o recebeu, reenviaremos clicando no botão abaixo.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm" style="color: #f3f4f6">
            {{ __('Um novo link de verificação foi enviado para o email informado no cadastro.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button style="background-color: #3730a3">
                    {{ __('Reenviar o email de verificação') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
