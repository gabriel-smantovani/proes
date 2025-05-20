@extends('layouts.app')

@section('title', 'Material de apoio')

@section('content')
<div class="container mt-4 flex-column align-items-center justify-content-center">
    <div class="text-center">
        <h2 style="color: #f3f4f6; font-size: 2em">Adicione um material de apoio para o módulo: {{ $modulo->titulo }}</h2>
    </div>

    <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">

        <form action="{{ route('materiais_didaticos.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf

            <input type="hidden" name="modulo_id" value="{{ $modulo->id }}">

            <div class="mb-3">
                <label for="material-titulo" style="color: #f3f4f6">Título</label>
                <input type="text" name="titulo" id="material-titulo"  class="block mt-1 w-full" required>
            </div>

            <div class="mb-3">
                <label for="tipo_input" style="color: #f3f4f6">Tipo de material</label>
                <select id="tipo_input" name="tipo_de_arquivo" class="block mt-1 w-full form-select" onchange="alternarTipoMaterial()" required>
                    <option value="">Selecione...</option>
                    <option value="link">Link</option>
                    <option value="upload">Upload de arquivo</option>
                </select>
            </div>

            <div class="mb-3 d-none" id="campo-link">
                <label for="material-link" style="color: #f3f4f6">Link</label>
                <input type="text" name="caminho" id="material-link"  class="block mt-1 w-full">
            </div>

            <div class="mb-3 d-none" id="campo-upload">
                <label for="material-upload" style="color: #f3f4f6">Arquivo</label>
                <input type="file" name="arquivo" id="material-upload"  class="block mt-1 w-full" style="color: #f3f4f6">
            </div>

            <div class="text-right mt-4 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399">Adicionar</button>
            </div>
        </form>

    </div>
</div>

<script>
function alternarTipoMaterial() {
    const tipo = document.getElementById('tipo_input').value;
    document.getElementById('campo-link').classList.add('d-none');
    document.getElementById('campo-upload').classList.add('d-none');

    if (tipo === 'link') {
        document.getElementById('campo-link').classList.remove('d-none');
    } else if (tipo === 'upload') {
        document.getElementById('campo-upload').classList.remove('d-none');
    }
}
</script>
@endsection
