@extends('layouts.app')

@section('title', 'Módulo')

@section('content')
<div class="container mt-4 flex-column align-items-center justify-content-center">
    <div class="text-center">
        <h2 style="color: #f3f4f6; font-size: 2em">{{ $modulo->titulo }}</h2>
    </div>

    <div class="w-full sm:max-w-5xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">

        <form method="POST" action="{{ route('modulos.update', $modulo) }}" class="mt-4">
            @csrf
            @method('PUT')

            <input type="hidden" name="titulo" value="{{ $modulo->titulo }}">

            <div class="mt-3 mb-3" style="display: flex; flex-direction: column; justify-content: center">
                <label for="modulo-desc" style="color: #f3f4f6">Descreva o módulo (insira informações como os objetivos, habilidades e competências adquiridas pelos alunos, como na ementa)</label>
                <textarea name="desc" rows="4" cols="50" class="sm:rounded-lg" style="width: 100%; height: 15em; resize: none; margin-top: 1em">{{ old('desc', $modulo->desc ?? '') }}</textarea>
            </div>

            <div style="display: flex; justify-content: end">
                <button type="submit" class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399; margin-right: 1em">Salvar alterações</button>
                <a href="{{ route('modulos.show', $modulo->id) }}" class="btn btn-danger" style="margin-right: 1em">Cancelar</a>
            </div>
            
        </form>
    </div>
</div>

@endsection
