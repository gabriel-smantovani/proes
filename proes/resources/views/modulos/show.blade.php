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
        <h1 style="color: #f3f4f6; font-size: 2em">{{ $modulos->titulo }}</h1>
    </div>

    <div class="border rounded p-3"  style="margin-top: 1em; background-color: #1f2937; color: #f3f4f6">
        <div class="text-center text-black">
            <h3 style="color: #9ca3af">Material didático</h3>
        </div>

        <div class="row mb-2 d-flex justify-content-center">
        @foreach ($materiaisdidaticos as $material)
            <div class="row mb-2 d-flex justify-content-between" style="border-bottom: 1px solid #f3f4f6">
                <div class="col-md-5">
                    <p>{{ $material->titulo }}</p>
                </div>
                <div class="col-md-1 d-flex justify-content-end">
                    <a href="{{ $material->link }}" target="_blank">
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        @endforeach
        @if (auth()->user()?->tipo === 'professor')
            <a href="{{ route('materiaisdidaticos.create', $modulos->id) }}" class="btn btn-success" style="background-color: #3730a3; border: 1px solid #34d399">
                Adicionar material didático
            </a>
        @endif
        </div>
    </div>
    
    <div class="border rounded p-3" style="margin-top: 1em; background-color: #1f2937; color: #f3f4f6">
        <div class="text-center text-black">
            <h3 style="color: #9ca3af">Vamos testar suas habilidades!</h3>
        </div>
        
        <div class="row mb-2 d-flex justify-content-center">
        @foreach ($fases as $fase)
            <div class="row mb-2 d-flex justify-content-between" style="border-bottom: 1px solid #f3f4f6">
                <div class="col-md-5">
                    <p>{{ $fase->titulo }}</p>
                </div>
                <div class="col-md-1 d-flex justify-content-end">
                    <a href="{{ route('fases.show', $fase->id) }}">
                        <i class="bi bi-play"></i>
                    </a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
