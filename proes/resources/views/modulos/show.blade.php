@extends('layouts.app')

@section('content')

@if (session('success'))
    <div class="w-full flex justify-center mt-4">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif

<div class="container mt-4">
    <div class="text-center text-black">
        <h2>{{ $modulos->titulo }}</h2>
    </div>

    <div class="border rounded p-3 bg-light">
        <div class="text-center text-black">
            <h3>Material didático</h3>
        </div>

        <div class="row mb-2">
        @foreach ($materiaisdidaticos as $material)
            <div class="row mb-2">
                <div class="col-md-4">
                    <p>{{ $material->titulo }}</p>
                </div>
                <div class="col-md-1">
                    <a href="{{ $material->link }}" target="_blank">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        @endforeach
        @if (auth()->user()?->tipo === 'professor')
            <a href="{{ route('materiaisdidaticos.create', $modulos->id) }}" class="btn btn-success">
                <i class="bi bi-plus"></i>
                Adicionar material de estudo
            </a>
        @endif
        </div>
    </div>
    
    <div class="border rounded p-3 bg-light">
        <div class="text-center text-black">
            <h3>Vamos testar suas habilidades!</h3>
        </div>
        
        <div class="row mb-2">
        @foreach ($fases as $fase)
            <div class="col-md-4">
                <p>{{ $fase->titulo }}</p>
            </div>
            <div class="col-md-1">
                <a href="{{ route('fases.show', $fase->id) }}">
                    <i class="bi bi-play"></i>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
