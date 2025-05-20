@extends('layouts.app')

@section('title', 'Pergunta')

@section('content')
<div class="container">
    <h2>Nova Pergunta</h2>

    <form action="{{ route('perguntas.store') }}" method="POST">
        @csrf
        <input type="hidden" name="fase_id" value="{{ $fase_id }}">

        <div class="mb-3">
            <label for="desc" class="form-label">Texto da Pergunta</label>
            <input type="text" name="desc" class="form-control" required>
        </div>

        <h4>Respostas</h4>
        @for ($i = 0; $i < 4; $i++)
            <div class="mb-3 border rounded p-2">
                <input type="text" name="respostas[{{ $i }}][desc]" class="form-control mb-1" placeholder="Texto da resposta" required>

                <label>
                    <input type="checkbox" name="respostas[{{ $i }}][correta]" value="1">
                    Correta
                </label>
            </div>
        @endfor

        <button type="submit" class="btn btn-success">Salvar Pergunta</button>
        <a href="{{ route('perguntas.show', $fase_id) }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
