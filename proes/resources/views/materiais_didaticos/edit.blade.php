@extends('layouts.app')

@section('title', 'Editar Material de Apoio')

@section('content')
<div class="container mt-4 flex-column align-items-center justify-content-center">
    <div class="text-center">
        <h2 style="color: #f3f4f6; font-size: 2em">Edite o material de apoio: {{ $material->titulo }}</h2>
    </div>

    @if (session('success'))
        <div class="w-full flex justify-center mt-4">
            <div class="alert alert-success" style="background-color: #34d399">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="w-full flex justify-center mt-4">
            <div class="border border-red-400 text-red-700 px-4 py-2 rounded mb-2" style="background-color: #f43f5e">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">

        <form action="{{ route('materiais.update', $material->id) }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            @method('PUT')

            <input type="hidden" name="modulo_id" value="{{ $material->modulo_id }}">

            <div class="mb-3">
                <label for="material-titulo" style="color: #f3f4f6">Título</label>
                <input type="text" name="titulo" id="material-titulo" maxlength="70" class="block mt-1 w-full" required value="{{ old('titulo', $material->titulo) }}">
            </div>

            <div class="mb-3">
                <label for="tipo_input" style="color: #f3f4f6">Tipo de material</label>
                <select id="tipo_input" name="tipo_de_arquivo" class="block mt-1 w-full form-select" onchange="alternarTipoMaterial()" required>
                    <option value="">Selecione...</option>
                    <option value="link" {{ $material->tipo_de_arquivo == 'link' ? 'selected' : '' }}>Link</option>
                    <option value="upload" {{ $material->tipo_de_arquivo == 'upload' ? 'selected' : '' }}>Upload de arquivo</option>
                    <option value="youtube" {{ $material->tipo_de_arquivo == 'youtube' ? 'selected' : '' }}>YouTube</option>
                </select>
            </div>

            <div class="mb-3 {{ in_array($material->tipo_de_arquivo, ['link', 'youtube']) ? '' : 'hidden' }}" id="campo-link">
                <label for="material-link" style="color: #f3f4f6">
                    {{ $material->tipo_de_arquivo === 'youtube' ? 'Link do vídeo YouTube' : 'Link' }}
                </label>
                <input type="text" name="caminho" id="material-link" class="block mt-1 w-full"
                    value="{{ old('caminho', $material->tipo_de_arquivo === 'youtube' ? 'https://www.youtube.com/watch?v=' . $material->caminho : $material->caminho) }}">
            </div>

            <div class="mb-3 {{ $material->tipo_de_arquivo == 'upload' ? '' : 'hidden' }}" id="campo-upload">
                <label for="material-upload" style="color: #f3f4f6">Arquivo</label>
                <input type="file" name="arquivo" id="material-upload" class="block mt-1 w-full" style="color: #f3f4f6">
                @if($material->tipo_de_arquivo === 'upload' && $material->caminho)
                    <p class="text-sm mt-1" style="color: #f3f4f6">Arquivo atual: 
                        <a href="{{ asset('storage/' . $material->caminho) }}" target="_blank">Ver arquivo</a>
                    </p>
                @endif
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('modulos.show', $material->modulo_id) }}" class="btn btn-danger me-2">Cancelar</a>
                <button type="submit" class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399;">Atualizar</button>
            </div>
        </form>
    </div>
</div>

<script>
    function alternarTipoMaterial() {
        const tipo = document.getElementById('tipo_input').value;

        const campoLinkDiv = document.getElementById('campo-link');
        const campoLinkInput = document.getElementById('material-link');

        const campoUploadDiv = document.getElementById('campo-upload');
        const campoUploadInput = document.getElementById('material-upload');

        campoLinkDiv.classList.add('hidden');
        campoUploadDiv.classList.add('hidden');

        campoLinkInput.removeAttribute("required");
        campoUploadInput.removeAttribute("required");

        if (tipo === 'link' || tipo === 'youtube') {
            campoLinkDiv.classList.remove('hidden');
            campoLinkInput.setAttribute("required", "true");
            
            // Limpa o campo se mudar de tipo
            if (campoLinkInput.dataset.tipoAnterior !== tipo) {
                campoLinkInput.value = '';
            }
            campoLinkInput.dataset.tipoAnterior = tipo;
        } else if (tipo === 'upload') {
            campoUploadDiv.classList.remove('hidden');
        }
    }
</script>
@endsection
