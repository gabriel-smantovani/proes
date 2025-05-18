<section>
    <header>
        <h2 class="text-lg font-medium" style="color: #f3f4f6;">
            {{ __('Editar Material Didático') }}
        </h2>

        <p class="mt-1 text-sm" style="color: #9ca3af;">
            {{ __("Atualize as informações do material didático.") }}
        </p>
    </header>

    <form method="POST" action="{{ route('materiais_didaticos.update', $material->id) }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('PATCH')

        {{-- Módulo --}}
        <div>
            <x-input-label for="modulo_id" :value="__('Módulo')" style="color: #f3f4f6;" />
            <select name="modulo_id" id="modulo_id" required class="mt-1 block w-full bg-gray-800 text-white border-gray-600">
                @foreach($modulos as $modulo)
                    <option value="{{ $modulo->id }}" {{ old('modulo_id', $material->modulo_id) == $modulo->id ? 'selected' : '' }}>
                        {{ $modulo->nome }}
                    </option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('modulo_id')" />
        </div>

        {{-- Título --}}
        <div>
            <x-input-label for="titulo" :value="__('Título')" style="color: #f3f4f6;" />
            <x-text-input id="titulo" name="titulo" type="text" class="mt-1 block w-full"
                :value="old('titulo', $material->titulo)" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('titulo')" />
        </div>

        {{-- Tipo de Arquivo --}}
        <div>
            <x-input-label for="tipo_de_arquivo" :value="__('Tipo de Arquivo')" style="color: #f3f4f6;" />
            <select id="tipo_de_arquivo" name="tipo_de_arquivo" class="mt-1 block w-full bg-gray-800 text-white border-gray-600" required>
                <option value="link" {{ old('tipo_de_arquivo', $material->tipo_de_arquivo) === 'link' ? 'selected' : '' }}>Link</option>
                <option value="upload" {{ old('tipo_de_arquivo', $material->tipo_de_arquivo) === 'upload' ? 'selected' : '' }}>Upload</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('tipo_de_arquivo')" />
        </div>

        {{-- Caminho (Link) --}}
        <div id="link-field" style="{{ old('tipo_de_arquivo', $material->tipo_de_arquivo) === 'link' ? '' : 'display: none;' }}">
            <x-input-label for="caminho" :value="__('Link do Arquivo')" style="color: #f3f4f6;" />
            <x-text-input id="caminho" name="caminho" type="url" class="mt-1 block w-full"
                :value="old('caminho', $material->caminho)" />
            <x-input-error class="mt-2" :messages="$errors->get('caminho')" />
        </div>

        {{-- Upload de Arquivo --}}
        <div id="upload-field" style="{{ old('tipo_de_arquivo', $material->tipo_de_arquivo) === 'upload' ? '' : 'display: none;' }}">
            <x-input-label for="arquivo" :value="__('Enviar novo arquivo')" style="color: #f3f4f6;" />
            <input id="arquivo" name="arquivo" type="file" class="mt-1 block w-full text-white" />
            <x-input-error class="mt-2" :messages="$errors->get('arquivo')" />
        </div>

        {{-- Botão --}}
        <div class="flex items-center gap-4">
            <x-primary-button style="background-color: #3730a3; border: 1px solid #34d399">
                {{ __('Salvar') }}
            </x-primary-button>
        </div>
    </form>
</section>

{{-- Script para alternar tipo de campo --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tipoSelect = document.getElementById('tipo_de_arquivo');
        const linkField = document.getElementById('link-field');
        const uploadField = document.getElementById('upload-field');

        function toggleFields() {
            if (tipoSelect.value === 'link') {
                linkField.style.display = 'block';
                uploadField.style.display = 'none';
            } else {
                linkField.style.display = 'none';
                uploadField.style.display = 'block';
            }
        }

        tipoSelect.addEventListener('change', toggleFields);
        toggleFields(); // Inicializa com base no valor atual
    });
</script>
