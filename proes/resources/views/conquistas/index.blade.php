@extends('layouts.app')

@section('title', 'Conquistas')

@section('content')
<div class="container mt-4 text-center">
    <i class="bi bi-award" style="color: #f3f4f6; font-size: 5em"></i>

    <div class="border rounded p-3"  style="margin-top: 1em; background-color: #1f2937; color: #f3f4f6">
        <div style="display: flex; justify-content: center; align-items: center">
            <h1 style="color: #f3f4f6; font-size: 1.2em">Conquistas alcançadas</h1>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        @foreach ($conquistasAlcancadas as $conquista)
            <div class="col-md-3 mb-4">
                <div class="card h-100" style="display: flex; flex-direction: column; align-items: center; background-color: #1f2937; color: #f3f4f6">
                    <div class="card-body">
                        <h5 class="card-title">{{ $conquista->nome }}</h5>
                        <p>{{ $conquista->descricao }}</p>
                        <p class="text-sm text-gray-400">
                            Obtida em: {{ $conquista->pivot->created_at->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i') }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="border rounded p-3"  style="margin-top: 1em; background-color: #1f2937; color: #f3f4f6">
        <div style="display: flex; justify-content: center; align-items: center">
            <h1 style="color: #f3f4f6; font-size: 1.2em">Conquistas ainda não alcançadas</h1>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        @foreach ($conquistasNaoAlcancadas as $conquista)
            <div class="col-md-3 mb-4">
                <div class="card h-100" style="display: flex; flex-direction: column; align-items: center; background-color: #1f2937; color: #f3f4f6">
                    <div class="card-body">
                        <h5 class="card-title">{{ $conquista->nome }}</h5>
                        <p>{{ $conquista->descricao }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
