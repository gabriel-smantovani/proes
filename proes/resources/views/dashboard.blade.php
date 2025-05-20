@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-4" style="width: 100vw">

    <div style="display: flex; margin-top: 2em">

        <div style="display: flex; flex-direction: column; align-items: center; width: 33%; margin-top: 8em">
            <div style="width: 8em; height: 8em">
                <img src="{{ asset('storage/' . $usuario->avatar_cabeca) }}" alt="">
            </div>
            <div style="width: 8em; height: 16em">
                <img src="{{ asset('storage/' . $usuario->avatar_traje) }}" alt="">
            </div>
        </div>

        <div style="display: flex; flex-direction: column; width: 34%">
            <div style="display: flex; align-items: center; justify-content: center">
                <h1 style="font-size: 2em; color: #f3f4f6; text-align: center">Olá, {{ $usuario->name }}!</h1>
            </div>
            <div class="d-flex row" style="margin-top: 2em">
                <div class="card text-center p-3 text-decoration-none" style="background-color: #1f2937; color: #f3f4f6">
                    <h5 style="color: #9ca3af">Onde paramos?</h5>
                    <i class="bi bi-book fs-1"></i>
                    <p class="fw-bold">{{ $str_fase }}</p>
                </div>
            </div>
            <div class="d-flex row mt-4">
                <a href="{{ route('conquistas.index') }}" class="card text-center p-3 text-decoration-none" style="background-color: #1f2937; color: #f3f4f6">
                    <h5 style="color: #9ca3af">Última conquista alcançada</h5>
                    <i class="bi bi-trophy fs-1"></i>
                    <p class="fw-bold">{{ $str_conquista }}</p>
                </a>
            </div>
        </div>
        <div style="display: flex; flex-direction: column; align-items: center; width: 33%; margin-top: 6em">
            <h2 class="text-xl" style="color: #f3f4f6">Progresso nas Fases</h2>
            <p class="mb-2" style="color: #9ca3af">Você concluiu {{ $fasesConcluidas }} de {{ $totalFases }} fases ({{ $percentual }}%)</p>

            <div style="position: relative; width: 3em; height: 20em; background-color: #1f2937; border-radius: 9999px; overflow: hidden;">
                <div style="
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                    height: {{ $percentual }}%;
                    background-color: #3730a3;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: 0.75rem;
                ">
                    {{ $percentual }}%
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
