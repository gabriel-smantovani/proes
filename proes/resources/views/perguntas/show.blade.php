@extends('layouts.app')

@section('title', 'Perguntas')

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

                    <x-danger-button
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                    >{{ __('Delete a pergunta') }}</x-danger-button>

                    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" action="{{ route('perguntas.destroy', $pergunta->id) }}" class="p-6">
                            @csrf
                            @method('delete')

                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Tem certeza que deseja excluir esta pergunta?') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('As recompensas já obtidas desta fase não serão retiradas dos usuários.') }}
                            </p>

                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Cancelar') }}
                                </x-secondary-button>

                                <x-danger-button class="ms-3">
                                    {{ __('Deletar a pergunta') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
