@extends('layouts.app')

@section('title', 'Pergunta')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2 style="color: #f3f4f6; font-size: 2em">Nova pergunta</h2>
    </div>

    <div class="w-full sm:max-w-5xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">

    <form action="{{ route('perguntas.store') }}" method="POST" class="mt-4">
        @csrf

        <input type="hidden" name="fase_id" value="{{ $fase_id }}">

        <div class="pergunta" style="margin-bottom: 20px; padding: 10px">
            <label style="color: #f3f4f6">Pergunta:</label>
            <input type="text" name="desc" class="block mt-1 w-full" required>

            <div class="respostas mt-2">
                <h4 style="color: #f3f4f6">Respostas:</h4>
                <div id="respostas"></div>
                <button type="button" onclick="adicionarResposta()" class="btn btn-primary mt-2" style="background-color: #3730a3; border: 1px solid #34d399">+ Adicionar Resposta</button>
            </div>
        </div>

        <div style="display: flex; justify-content: end">
            <button type="submit" class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399; margin-right: 1em">Adicionar</button>
            <a href="{{ route('perguntas.show', $fase_id) }}" class="btn btn-danger" style="margin-right: 1em">Cancelar</a>
        </div>
    </form>
</div>

<script>
    function adicionarResposta() {
        const respostaWrapper = document.getElementById(`respostas`);

        const respostaCount = respostaWrapper.childElementCount;

        const respostaHTML = `
            <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 5px;">
                <input type="text" name="perguntas[respostas][${respostaCount}][desc]" placeholder="Resposta" class="block mt-1" style="width: 93%" required>
                <input 
                    type="radio" 
                    name="perguntas[resposta_correta]" 
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
@endsection
