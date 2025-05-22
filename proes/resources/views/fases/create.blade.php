@extends('layouts.app')

@section('title', 'Fase')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2 style="color: #f3f4f6; font-size: 2em">Crie sua fase para o módulo: {{ $modulo->titulo }}</h2>
    </div>

    <div class="w-full sm:max-w-5xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">
        
        <form action="{{ route('fases.store') }}" method="POST" class="mt-4">
            @csrf

            <input type="hidden" name="modulo_id" value="{{ $modulo->id }}">

            <div class="mb-3">
                <label for="titulo" style="color: #f3f4f6">Título da Fase:</label>
                <input type="text" name="titulo" maxlength="70" class="block mt-1 w-full" required>
            </div>

            <h3 style="color: #f3f4f6">Perguntas</h3>
            <div id="perguntas-wrapper"></div>
            <button type="button" onclick="adicionarPergunta()" class="btn btn-primary mt-1" style="background-color: #3730a3; border: 1px solid #34d399">+ Adicionar Pergunta</button>

            <br><br>
            <div style="display: flex; justify-content: end">
                <button type="submit" class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399; margin-right: 1em">Criar</button>
                <a href="{{ route('modulos.show', $modulo->id) }}" class="btn btn-danger" style="margin-right: 1em">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection

<script>
let perguntaCount = 0;

function adicionarPergunta() {
    const wrapper = document.getElementById('perguntas-wrapper');

    const perguntaHTML = `
        <div class="pergunta" style="margin-bottom: 20px; padding: 10px; border-top: 2px solid #ccc;">
            <label style="color: #f3f4f6">Pergunta:</label>
            <input type="text" name="perguntas[${perguntaCount}][desc]" maxlength="1000" class="block mt-1 w-full" required>

            <div class="respostas mt-2">
                <h4 style="color: #f3f4f6">Respostas</h4>
                <div id="respostas-${perguntaCount}"></div>
                <button type="button" onclick="adicionarResposta(${perguntaCount})" class="btn btn-primary mt-2" style="background-color: #3730a3; border: 1px solid #34d399">+ Adicionar Resposta</button>
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
        <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 5px;">
            <input type="text" name="perguntas[${perguntaIndex}][respostas][${respostaCount}][desc]" placeholder="Resposta" maxlength="300" class="block mt-1" style="width: 93%" required>
            <input 
                type="radio" 
                name="perguntas[${perguntaIndex}][resposta_correta]" 
                value="${respostaCount}"
                class="mt-1 resposta-correta"
                required
            >
        </div>
    `;

    respostaWrapper.insertAdjacentHTML('beforeend', respostaHTML);
}
</script>

<style>
input[type="radio"].resposta-correta {
  width: 2.5em;
  height: 2.5em;
  appearance: none;
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 0;
  cursor: pointer;
}

input[type="radio"].resposta-correta:checked {
  background-color: #34d399; /* verde água */
  border-color: #10b981;
  outline-color: #10b981;
}
</style>