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
        <h1 style="color: #f3f4f6; font-size: 2em">{{ $modulo->titulo }}</h1>
    </div>

    <div class="border rounded p-3"  style="margin-top: 1em; background-color: #1f2937; color: #f3f4f6">
        <div class="text-center text-black">
            <h3 style="color: #9ca3af">Material didático</h3>
        </div>

        <div class="row mb-2 d-flex justify-content-center">
        @foreach ($materiais_didaticos as $material)
            <div class="row mb-2 d-flex justify-content-between" style="border-bottom: 1px solid #f3f4f6">
                <div class="col-md-5">
                    <p>{{ $material->titulo }}</p>
                </div>
                <div class="col-md-1 d-flex justify-content-end">
                    @php
                        $isLink = $material->tipo_de_arquivo === 'link';
                        $href = $isLink ? $material->caminho : asset($material->caminho);
                    @endphp

                    <a href="{{ $href }}" {{ $isLink ? 'target=_blank' : 'download' }}>
                        @if ($isLink)
                            <i class="bi bi-box-arrow-up-right"></i> {{-- Ícone para link externo --}}
                        @else
                            <i class="bi bi-download"></i> {{-- Ícone para download --}}
                        @endif
                    </a>
                </div>
            </div>
        @endforeach
        @if (auth()->user()?->tipo === 'professor')
            <a href="{{ route('materiais_didaticos.create', $modulo->id) }}" class="btn btn-success" style="background-color: #3730a3; border: 1px solid #34d399">
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
        @if (auth()->user()?->tipo === 'professor')
            <a href="{{ route('fases.create', $modulo->id) }}" class="btn btn-success" style="background-color: #3730a3; border: 1px solid #34d399">
                Adicionar fase
            </a>
        @endif
        </div>
    </div>
</div>
@endsection
