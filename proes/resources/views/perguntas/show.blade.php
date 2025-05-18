@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="border rounded p-3"  style="background-color: #1f2937; color: #f3f4f6; margin-bottom: 1em">
        <div style="display: flex; justify-content: space-between; align-items: center">
            <h1 style="color: #f3f4f6; font-size: 1.2em; margin-left: 2em">Perguntas da fase: {{ $fase->titulo }}</h1>
            @if (auth()->user()?->tipo === 'professor')
                <a href="{{ route('perguntas.create', $fase->id) }}" class="btn btn-success" style="margin-right: 2em; background-color: #3730a3; border: 1px solid #34d399; font-weight: bold">
                    Adicionar nova pergunta
                </a>
            @endif
        </div>
    </div>

    @foreach ($perguntas as $pergunta)
        <div class="card mb-3" style="background-color: #1f2937">
            <div class="card-body">
                <p style="margin-bottom: 1.5em; color: #f3f4f6"><strong>Pergunta:</strong> {{ $pergunta->desc }}</p>
                <p style="margin-bottom: 1em; color: #f3f4f6"><strong>Respostas:</strong></p>
                <ul>
                    @foreach ($pergunta->respostas as $resposta)
                        <li style="margin-bottom: 1em; color: #9ca3af">{{ $resposta->desc }} @if($resposta->correta) <strong>(Correta)</strong> @endif</li>
                    @endforeach
                </ul>

                <div style="display: flex; justify-content: end">
                    <a href="{{ route('perguntas.edit', $pergunta->id) }}" class="btn btn-warning btn-sm" style="margin-right: 1em">
                        <i class="bi bi-pencil-fill"></i>
                    </a>

                    <form action="{{ route('perguntas.destroy', $pergunta->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja realmente excluir esta pergunta?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"  style="margin-right: 1em">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
