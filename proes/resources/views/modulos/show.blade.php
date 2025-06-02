@extends('layouts.app')

@section('title', 'Módulo')

@section('content')

<div class="container mt-4">
    <div class="text-center text-black">
        <h1 style="color: #f3f4f6; font-size: 2em">{{ $modulo->titulo }}</h1>
    </div>
    @if (auth()->user()?->tipo === 'professor')
        <div style="display: flex; justify-content: end">
            <a href="{{ route('modulos.edit', ['modulo' => $modulo->id]) }}" class="btn btn-warning btn-sm" style="border: 1px solid white; font-weight: bold; margin-right: 1em">
                <i class="bi bi-pencil-fill"></i>
            </a>
        </div>
    @endif
    <div style="margin: 0 2em 0 2em">
        <p style="color: #f3f4f6; font-size: 1em">{!! nl2br(e($modulo->desc)) !!}</p>
    </div>

    @if (session('success'))
        <div class="w-full flex justify-center mt-4">
            <div class="alert alert-success" style="background-color: #34d399">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="w-full flex justify-center mt-4">
            <div class="border border-red-400 text-red-700 px-4 py-2 rounded mb-2" style="background-color: #f43f5e">
                {{ session('error') }}
            </div>
        </div>
    @endif

    <div class="border rounded p-3"  style="margin-top: 1em; background-color: #1f2937; color: #f3f4f6">
        <div style="display: flex; justify-content: space-between; align-items: center">
            <h1 style="color: #f3f4f6; font-size: 1.2em; margin-left: 2em">Material de apoio</h1>
            @if (auth()->user()?->tipo === 'professor')
                <a href="{{ route('materiais_didaticos.create', $modulo->id) }}" class="btn btn-success" style="margin-right: 2em; background-color: #3730a3; border: 1px solid #34d399; font-weight: bold">
                    +
                </a>
            @endif
        </div>
    </div>
    <div style="display: flex; flex-direction: column; align-items: end">
    @foreach ($materiais_didaticos as $material)
        <div class="border rounded p-3"  style="display: flex; align-items: center; justify-content: space-between; width: 90%; margin-top: 0.5em; background-color: #1f2937; color: #f3f4f6">
            <div style="width: 80%">
                <p style="margin-left: 1em">{{ $material->titulo }}</p>
            </div>
            @if ((auth()->user()?->tipo === 'professor') && (auth()->user()?->id === $material->user_id))
                <a href="{{ route('materiais.edit', ['material' => $material->id]) }}" class="btn btn-warning" style="border: 1px solid white; font-weight: bold; margin-right: 1em">
                    <i class="bi bi-pencil-fill"></i>
                </a>
                <x-danger-button
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                    style="display: flex; justify-content: center; width: 38px; height: 38px"
                >
                    <i class="bi bi-trash-fill" style="font-size: 1.3em"></i>
                </x-danger-button>

                <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <form method="post" action="{{ route('materiais.destroy', $material->id) }}" class="p-6">
                        @csrf
                        @method('delete')

                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Tem certeza que deseja excluir este material?') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Se for um arquivo ele também será perdido.') }}
                        </p>

                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancelar') }}
                            </x-secondary-button>

                            <x-danger-button class="ms-3">
                                {{ __('Deletar o material') }}
                            </x-danger-button>
                        </div>
                    </form>
                </x-modal>
            @endif
            <div class="col-md-1 d-flex justify-content-end" style="margin-right: 2em">
                @if($material->tipo_de_arquivo == 'upload')
                    <a href="{{ asset('storage/' . $material->caminho) }}" target="_blank"
                        class="btn btn-success"
                        style="background-color: #3730a3; border: 1px solid #34d399; font-weight: bold; color: #f3f4f6"
                    >
                    <i class="bi bi-file-earmark"></i>
                    </a>
                @elseif($material->tipo_de_arquivo == 'youtube')
                    <a href="{{ route('materiais_didaticos.ver_video', $material->id) }}" target="_blank"
                        class="btn btn-success"
                        style="background-color: #3730a3; border: 1px solid #34d399; font-weight: bold; color: #f3f4f6"
                    >
                    <i class="bi bi-play-fill"></i>
                    </a>
                @elseif($material->tipo_de_arquivo == 'link')
                    <a href="{{ $material->caminho }}" target="_blank"
                        class="btn btn-success"
                        style="background-color: #3730a3; border: 1px solid #34d399; font-weight: bold; color: #f3f4f6"
                    >
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                @endif
            </div>
        </div>
    @endforeach
    </div>    
    
    <div class="border rounded p-3"  style="margin-top: 1em; background-color: #1f2937; color: #f3f4f6">
        <div class="text-black" style="display: flex; justify-content: space-between; align-items: center">
            <h1 style="color: #f3f4f6; font-size: 1.2em; margin-left: 2em">Vamos jogar!</h1>
            @if (auth()->user()?->tipo === 'professor')
                <a href="{{ route('fases.create', $modulo->id) }}" class="btn btn-success" style="margin-right: 2em; background-color: #3730a3; border: 1px solid #34d399; font-weight: bold">
                    +
                </a>
            @endif
        </div>
    </div>

    <div style="display: flex; flex-direction: column; align-items: end">
    @foreach ($fases as $fase)
        <div class="border rounded p-3" style="display: flex; align-items: center; justify-content: space-between; width: 90%; margin-top: 0.5em; background-color: #1f2937; color: #f3f4f6">
            @php
                $resultado = $fase->resultadoDoUsuario(auth()->id());
                $pontuacao = $resultado ? $resultado->pontuacao : 0;
                $totalPerguntas = $fase->perguntas()->count();
            @endphp
            <div style="width: 80%">
                <p style="margin-left: 1em">{{ $fase->titulo }} <span style="color: #34d399">{{ $pontuacao }}/{{ $totalPerguntas }}</span></p>
            </div>
            @if ((auth()->user()?->tipo === 'professor') && (auth()->user()?->id === $fase->user_id))
                <a href="{{ route('perguntas.show', $fase->id) }}"  class="btn btn-warning" style="border: 1px solid white; font-weight: bold; margin-right: 1em">
                    <i class="bi bi-pencil-fill"></i>
                </a>
                <x-danger-button
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                    style="display: flex; justify-content: center; width: 38px; height: 38px"
                >
                    <i class="bi bi-trash-fill" style="font-size: 1.3em"></i>
                </x-danger-button>

                <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <form method="post" action="{{ route('fases.destroy', $fase->id) }}" class="p-6">
                        @csrf
                        @method('delete')

                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Tem certeza que deseja excluir esta fase e suas dependências?') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Esta deleção exclui todas as perguntas e respostas vinculadas a esta fase.') }}
                        </p>

                        <div class="mt-6 flex justify-end">
                            <x-secondary-button x-on:click="$dispatch('close')">
                                {{ __('Cancelar') }}
                            </x-secondary-button>

                            <x-danger-button class="ms-3">
                                {{ __('Deletar a fase') }}
                            </x-danger-button>
                        </div>
                    </form>
                </x-modal>
            @endif
            <div class="col-md-1 d-flex justify-content-end" style="margin-right: 2em">
                <a href="{{ route('fases.show', $fase->id) }}" class="btn btn-success" style="background-color: #3730a3; border: 1px solid #34d399; font-weight: bold; color: #f3f4f6">
                    <i class="bi bi-play"></i>
                </a>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
