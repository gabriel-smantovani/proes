@extends('layouts.app')

@section('title', 'Material de apoio')

@section('content')
<div class="container mt-4 flex-column align-items-center justify-content-center">
    <div class="text-center">
        <h2 style="color: #f3f4f6; font-size: 2em">Editar material</h2>
    </div>

    <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">

        <form method="POST" action="{{ route('materiais.update', $material) }}" enctype="multipart/form-data" class="mt-4">
            @csrf
            @method('PUT')

            <input type="hidden" name="modulo_id" value="{{ $material->modulo_id }}">

            <div class="mb-3">
                <label for="material-titulo" style="color: #f3f4f6">Título</label>
                <input type="text" name="titulo" value="{{ old('titulo', $material->titulo) }}" class="block mt-1 w-full" required>
            </div>

            <div class="mb-3">
                <label for="tipo_input" style="color: #f3f4f6">Tipo do arquivo</label>
                <select id="tipo_input" name="tipo_de_arquivo" class="block mt-1 w-full form-select" onchange="toggleCampos(this.value)">
                    <option value="link" {{ $material->tipo_de_arquivo === 'link' ? 'selected' : '' }}>Link</option>
                    <option value="upload" {{ $material->tipo_de_arquivo === 'upload' ? 'selected' : '' }}>Upload de arquivo</option>
                </select>
            </div>

            <div class="mb-4" id="campo-link" style="{{ $material->tipo_de_arquivo === 'link' ? '' : 'display: none;' }}">
                <label class="block font-semibold" style="color: #f3f4f6">Link:</label>
                <input type="text" name="caminho" value="{{ old('caminho', $material->tipo_de_arquivo === 'link' ? $material->caminho : '') }}" class="w-full border p-2">
            </div>

            <div class="mb-4" id="campo-upload" style="{{ $material->tipo_de_arquivo === 'upload' ? '' : 'display: none;' }}">
                <label class="block font-semibold" style="color: #f3f4f6">Arquivo:</label>
                <input type="file" name="arquivo" class="w-full" style="color: #f3f4f6">
                <p class="text-sm mt-1" style="color: #9ca3af"">Arquivo atual: {{ str_replace('storage/materiais/', '', $material->caminho) }}</p>
            </div>

            <div class="text-right mt-4 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399">Salvar</button>
            </div>
        </form>
    </div>
</div>

<script>
    function toggleCampos(tipo) {
        document.getElementById('campo-link').style.display = tipo === 'link' ? '' : 'none';
        document.getElementById('campo-upload').style.display = tipo === 'upload' ? '' : 'none';
    }
</script>
@endsection
