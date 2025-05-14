@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2>Adicione um material didático para o módulo "{{ $modulo->titulo }}"</h2>
    </div>

    <div class="border rounded p-3 bg-light">

        <form action="{{ route('materiais_didaticos.store') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf

            <input type="hidden" name="modulo_id" value="{{ $modulo->id }}">

            <div class="mb-3">
                <label for="material-titulo">Título</label>
                <input type="text" name="titulo" id="material-titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tipo_input">Tipo de material</label>
                <select id="tipo_input" name="tipo_de_arquivo" class="form-select" onchange="alternarTipoMaterial()" required>
                    <option value="">Selecione...</option>
                    <option value="link">Link</option>
                    <option value="upload">Upload de Arquivo</option>
                </select>
            </div>

            <div class="mb-3 d-none" id="campo-link">
                <label for="material-link">Link do material</label>
                <input type="url" name="caminho" id="material-link" class="form-control">
            </div>

            <div class="mb-3 d-none" id="campo-upload">
                <label for="material-upload">Upload do material</label>
                <input type="file" name="arquivo" id="material-upload" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Adicionar</button>
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
