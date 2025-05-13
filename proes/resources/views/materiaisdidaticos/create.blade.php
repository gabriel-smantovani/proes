@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2>Adicione um material didático para o módulo "{{ $modulo->titulo }}"</h2>
    </div>

    <div class="border rounded p-3 bg-light">

        <form action="{{ route('materiais_didaticos.store') }}" method="POST" class="mt-4">
            @csrf

            <input type="hidden" name="modulo_id" value="{{ $modulo->id }}">

            <div class="row mb-2">
                <label for="material-titulo">Título</label>
                <input type="text" name="titulo" id="material-titulo">
            </div>

            <div class="row mb-2">
                <label for="material-caminho">Arquivo</label>
                <input type="text" name="caminho" id="material-caminho">
            </div>

            <button type="submit" class="btn btn-primary">Adicionar</button>
        </form>

    </div>
</div>
@endsection
