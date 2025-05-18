@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <h2 class="text-xl font-bold mb-4">Editar Material</h2>

    <form method="POST" action="{{ route('materiais.update', $material) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold">Título:</label>
            <input type="text" name="titulo" value="{{ old('titulo', $material->titulo) }}" class="w-full border p-2">
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Módulo:</label>
            <select name="modulo_id" class="w-full border p-2">
                @foreach ($modulos as $modulo)
                    <option value="{{ $modulo->id }}" {{ $modulo->id == $material->modulo_id ? 'selected' : '' }}>
                        {{ $modulo->titulo }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold">Tipo de Arquivo:</label>
            <select name="tipo_de_arquivo" class="w-full border p-2" onchange="toggleCampos(this.value)">
                <option value="link" {{ $material->tipo_de_arquivo === 'link' ? 'selected' : '' }}>Link</option>
                <option value="upload" {{ $material->tipo_de_arquivo === 'upload' ? 'selected' : '' }}>Upload</option>
            </select>
        </div>

        <div class="mb-4" id="campo-link" style="{{ $material->tipo_de_arquivo === 'link' ? '' : 'display: none;' }}">
            <label class="block font-semibold">Link:</label>
            <input type="text" name="caminho" value="{{ old('caminho', $material->tipo_de_arquivo === 'link' ? $material->caminho : '') }}" class="w-full border p-2">
        </div>

        <div class="mb-4" id="campo-upload" style="{{ $material->tipo_de_arquivo === 'upload' ? '' : 'display: none;' }}">
            <label class="block font-semibold">Arquivo:</label>
            <input type="file" name="arquivo" class="w-full border p-2">
            <p class="text-sm text-gray-500 mt-1">Arquivo atual: {{ $material->caminho }}</p>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Salvar</button>
    </form>
</div>

<script>
    function toggleCampos(tipo) {
        document.getElementById('campo-link').style.display = tipo === 'link' ? '' : 'none';
        document.getElementById('campo-upload').style.display = tipo === 'upload' ? '' : 'none';
    }
</script>
@endsection
