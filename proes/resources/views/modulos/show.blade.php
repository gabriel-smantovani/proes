@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="text-center text-black">
        <h1 style="color: #f3f4f6; font-size: 2em">{{ $modulo->titulo }}</h1>
    </div>
    <div class="text-center text-black">
        <p style="color: #f3f4f6; font-size: 1em">{{ $modulo->desc }}</p>
    </div>

    @if (session('success'))
        <div class="w-full flex justify-center mt-4">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-2">
            {{ session('error') }}
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
                <form action="{{ route('materiais.destroy', $material->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este material?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="border: 1px solid white">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
            @endif
            <div class="col-md-1 d-flex justify-content-end" style="margin-right: 2em">
                @php
                    $isLink = $material->tipo_de_arquivo === 'link';
                    $href = $isLink ? $material->caminho : asset($material->caminho);
                @endphp

                <a href="{{ $href }}" {{ $isLink ? 'target=_blank' : 'download' }} class="btn btn-success" style="background-color: #3730a3; border: 1px solid #34d399; font-weight: bold; color: #f3f4f6">
                    @if ($isLink)
                        <i class="bi bi-box-arrow-up-right"></i>
                    @else
                        <i class="bi bi-download"></i>
                    @endif
                </a>
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
            <div style="width: 80%">
                <p style="margin-left: 1em">{{ $fase->titulo }}</p>
            </div>
            @if ((auth()->user()?->tipo === 'professor') && (auth()->user()?->id === $fase->user_id))
                <a href="{{ route('perguntas.show', $fase->id) }}"  class="btn btn-warning" style="border: 1px solid white; font-weight: bold; margin-right: 1em">
                    <i class="bi bi-pencil-fill"></i>
                </a>
                <form action="{{ route('fases.destroy', $fase->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta fase por inteira?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="border: 1px solid white">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
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
