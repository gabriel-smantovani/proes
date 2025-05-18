<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium" style="color: #f3f4f6;">
            {{ __('Deletar o material didático') }}
        </h2>

        <p class="mt-1 text-sm" style="color: #9ca3af;">
            {{ __('Uma vez deletado, o arquivo não poderá ser encontrado por aqui novamente.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete o material didático') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('materiais_didaticos.destroy', $material->id) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Você tem certeza que quer deletar o material?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Uma vez deletado, o arquivo não poderá ser encontrado por aqui novamente.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Deletar o material') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
