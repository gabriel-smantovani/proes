@extends('layouts.app')

@section('title', 'Material de apoio')

@section('content')
<div class="container mt-4 flex-column align-items-center justify-content-center">
    <div class="text-center">
        <h2 style="color: #f3f4f6; font-size: 2em">Adicione um material de apoio para o módulo: {{ $modulo->titulo }}</h2>
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

        <form action="{{ route('materiais_didaticos.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf

            <input type="hidden" name="modulo_id" value="{{ $modulo->id }}">

            <div class="mb-3">
                <label for="material-titulo" style="color: #f3f4f6">Título</label>
                <input type="text" name="titulo" id="material-titulo" maxlength="70" class="block mt-1 w-full" required>
            </div>

            <div class="mb-3">
                <label for="tipo-select" style="color: #f3f4f6">Tipo de material</label>
                <select id="tipo-select" name="tipo_de_arquivo" class="block mt-1 w-full form-select" onchange="alternarTipoMaterial()" required>
                    <option value="">Selecione...</option>
                    <option value="link">Link</option>
                    <option value="upload">Upload de arquivo</option>
                    <option value="youtube">YouTube</option>
                </select>
            </div>

            <div class="mb-3 hidden" id="campo-link">
                <label for="material-link" style="color: #f3f4f6">Link</label>
                <input type="text" name="caminho" id="material-link" class="block mt-1 w-full">
            </div>

            <div class="mb-3 hidden" id="campo-upload">
                <label for="material-upload" style="color: #f3f4f6">Arquivo</label>
                <input type="file" name="arquivo" id="material-upload" class="block mt-1 w-full" style="color: #f3f4f6">
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('modulos.show', $modulo->id) }}" class="btn btn-danger me-2">Cancelar</a>
                <button type="submit" class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399;">Adicionar</button>
            </div>
        </form>
    </div>
</div>

<script>
    function alternarTipoMaterial() {
        let tipo = document.getElementById('tipo-select').value;

        let campoLink = document.getElementById('campo-link');
        let campoUpload = document.getElementById('campo-upload');

        campoLink.classList.toggle('hidden', !(tipo === 'link' || tipo === 'youtube'));
        campoUpload.classList.toggle('hidden', tipo !== 'upload');
    }

    document.getElementById('tipo-select').addEventListener('change', alternarTipoMaterial);
    alternarTipoMaterial();
</script>
@endsection
