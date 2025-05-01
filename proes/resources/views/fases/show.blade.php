@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2>{{ $modulo->titulo }}</h2>
    </div>

    <form id="fase-form" action="{{ route('fases.finalizar', $fase->id) }}" method="POST">
        @csrf

        <div id="perguntas-container">
            @foreach ($perguntas as $index => $pergunta)
                <div class="pergunta" style="{{ $index !== 0 ? 'display:none;' : '' }}">
                    <p><strong>{{ $pergunta->desc }}</strong></p>
                    @foreach ($pergunta->respostas as $resposta)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="respostas[{{ $pergunta->id }}]" value="{{ $resposta->id }}" id="resposta-{{ $resposta->id }}">
                            <label class="form-check-label" for="resposta-{{ $resposta->id }}">
                                {{ $resposta->desc }}
                            </label>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            <button type="button" id="btn-proxima" class="btn btn-primary">Próxima</button>
            <button type="submit" id="btn-finalizar" class="btn btn-success" style="display:none;">Finalizar</button>
        </div>
    </form>
</div>

<script>
    let perguntas = document.querySelectorAll('.pergunta');
    let btnProxima = document.getElementById('btn-proxima');
    let btnFinalizar = document.getElementById('btn-finalizar');
    let current = 0;

    btnProxima.addEventListener('click', () => {
        perguntas[current].style.display = 'none';
        current++;
        if (current < perguntas.length) {
            perguntas[current].style.display = 'block';
        } else {
            btnProxima.style.display = 'none';
            btnFinalizar.style.display = 'inline-block';
        }
    });
</script>
@endsection
