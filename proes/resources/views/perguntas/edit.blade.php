@extends('layouts.app')

@section('title', 'Pergunta')

@section('content')
<div class="container mt-4 flex-column align-items-center justify-content-center">
    <div class="text-center">
        <h2 style="color: #f3f4f6; font-size: 2em">Editar pergunta</h2>
    </div>

    <div class="w-full sm:max-w-5xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">

        <form action="{{ route('perguntas.update', $pergunta->id) }}" method="POST" class="mt-4">
            @csrf
            @method('PUT')

            <div class="pergunta" style="margin-bottom: 20px; padding: 10px">
                <label style="color: #f3f4f6">Pergunta:</label>
                
                <textarea name="desc" rows="4" cols="50" class="sm:rounded-lg" maxlength="2000" style="width: 100%; height: 15em; resize: none; margin-top: 1em" required>{{ old('desc', $pergunta->desc) }}</textarea>

                <div class="respostas mt-2">
                    <h4 style="color: #f3f4f6">Respostas</h4>
                    <div id="respostas">
                        @foreach ($pergunta->respostas as $resposta)
                            <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 5px;">
                                <input type="text" name="respostas[{{ $resposta->id }}][desc]" maxlength="300" class="block mt-1"
                                    value="{{ old("respostas.{$resposta->id}.desc", $resposta->desc) }}"
                                    style="width: 93%" required>
                                <input 
                                    type="radio" 
                                    name="resposta_correta" 
                                    value="{{ $resposta->id }}"
                                    {{ old('resposta_correta', $pergunta->respostas->where('correta', 1)->first()?->id) == $resposta->id ? 'checked' : '' }}
                                    class="mt-1 resposta-correta"
                                    required
                                >
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: end">
                <a href="{{ route('perguntas.show', $pergunta->fase_id) }}" class="btn btn-danger" style="margin-right: 1em">Cancelar</a>
                <button type="submit" class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399; margin-right: 1em">Salvar alterações</button>
            </div>
        </form>
    </div>
</div>
@endsection

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