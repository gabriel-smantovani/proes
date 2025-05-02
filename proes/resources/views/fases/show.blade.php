@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h1 style="color: #f3f4f6; font-size: 2em">{{ $modulo->titulo }} - {{ $fase->titulo }}</h1>
    </div>

    <form id="fase-form" action="{{ route('fases.finalizar', $fase->id) }}" method="POST" class="container mt-4">
        @csrf

        <div id="perguntas-container">
            @foreach ($perguntas as $index => $pergunta)
                <div class="pergunta" style="{{ $index !== 0 ? 'display:none;' : '' }}">
                    <p class="mb-3 text-justify" style="font-size: 1.5em; text-align: justify; color: #f3f4f6"><strong>{{ $pergunta->desc }}</strong></p>
                    @foreach ($pergunta->respostas as $resposta)
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="respostas[{{ $pergunta->id }}]" value="{{ $resposta->id }}" id="resposta-{{ $resposta->id }}" style="background-color: #3730a3">
                            <label class="form-check-label" for="resposta-{{ $resposta->id }}" style="font-size: 1.2em; color: #9ca3af">
                                {{ $resposta->desc }}
                            </label>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            <button type="button" id="btn-anterior" class="btn btn-primary" style="display:none">Anterior</button>
            <button type="button" id="btn-proxima" class="btn btn-primary">Próxima</button>
            <button type="submit" id="btn-finalizar" class="btn btn-success" style="display:none;">Finalizar</button>
        </div>
    </form>
</div>

<script>
    let perguntas = document.querySelectorAll('.pergunta');
    let btnAnterior = document.getElementById('btn-anterior');
    let btnProxima = document.getElementById('btn-proxima');
    let btnFinalizar = document.getElementById('btn-finalizar');
    let current = 0;

    btnAnterior.addEventListener('click', () => {
        if (current < 1) {
            btnAnterior.style.display = 'none';
        } else if (current == perguntas-length) {
            perguntas[current].style.display = 'block';
        } else if (current < perguntas.length) {
            perguntas[current].style.display = 'none';
            current--;
            if (current < perguntas.length) {
                perguntas[current].style.display = 'block';
            } else {
                btnAnterior.style.display = 'none';
            }
            console.log(current);
        }
    });

    btnProxima.addEventListener('click', () => {
        perguntas[current].style.display = 'none';
        current++;
        if (current > 0) {
            btnAnterior.style.display = 'block';
        }
        if (current < perguntas.length) {
            perguntas[current].style.display = 'block';
        } else {
            btnProxima.style.display = 'none';
            btnFinalizar.style.display = 'inline-block';
        }
        console.log(current);
    });
</script>
@endsection
