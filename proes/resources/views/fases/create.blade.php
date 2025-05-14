@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2>Crie sua fase para o módulo "{{ $modulo->titulo }}"</h2>
    </div>

    <div class="border rounded p-3 bg-light">
        <form action="{{ route('fases.store') }}" method="POST">
            @csrf

            <input type="hidden" name="modulo_id" value="{{ $modulo->id }}">

            <div>
                <label for="titulo">Título da Fase:</label>
                <input type="text" name="titulo" required>
            </div>

            <h3>Perguntas</h3>
            <div id="perguntas-wrapper"></div>
            <button type="button" onclick="adicionarPergunta()">+ Adicionar Pergunta</button>

            <br><br>
            <button type="submit">Salvar Fase</button>
        </form>
    </div>
</div>
@endsection

<script>
let perguntaCount = 0;

function adicionarPergunta() {
    const wrapper = document.getElementById('perguntas-wrapper');

    const perguntaHTML = `
        <div class="pergunta" style="margin-bottom: 20px; padding: 10px; border: 1px solid #ccc;">
            <label>Pergunta:</label>
            <input type="text" name="perguntas[${perguntaCount}][desc]" required>

            <div class="respostas">
                <h4>Respostas</h4>
                <div id="respostas-${perguntaCount}"></div>
                <button type="button" onclick="adicionarResposta(${perguntaCount})">+ Adicionar Resposta</button>
            </div>
        </div>
    `;

    wrapper.insertAdjacentHTML('beforeend', perguntaHTML);
    perguntaCount++;
}

function adicionarResposta(perguntaIndex) {
    const respostaWrapper = document.getElementById(`respostas-${perguntaIndex}`);

    const respostaCount = respostaWrapper.childElementCount;

    const respostaHTML = `
        <div style="margin-bottom: 5px;">
            <input type="text" name="perguntas[${perguntaIndex}][respostas][${respostaCount}][desc]" placeholder="Resposta" required>
            <label>
                Correta?
                <input 
                    type="radio" 
                    name="perguntas[${perguntaIndex}][resposta_correta]" 
                    value="${respostaCount}"
                    required
                >
            </label>
        </div>
    `;

    respostaWrapper.insertAdjacentHTML('beforeend', respostaHTML);
}
</script>