@extends('layouts.app')

@section('title', 'Coleção')

@section('content')

<div class="container mt-4 text-center">

    <i class="bi bi-box2" style="color: #f3f4f6; font-size: 5em"></i>

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
        <div style="display: flex; justify-content: center; align-items: center">
            <h1 style="color: #f3f4f6; font-size: 1.2em">Faces</h1>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        @foreach ($avatares as $avatar)
            @if ($usuario->avatares->contains($avatar->id))
                @if ($avatar->equipado_em == 'cabeca')
                    <div class="col-md-3 mb-4">
                        <div class="card h-100" style="display: flex; flex-direction: column; align-items: center; background-color: #1f2937; color: #f3f4f6">
                            <img src="{{ asset('storage/' . $avatar->imagem) }}" class="card-img-top" alt="{{ $avatar->nome }}" style="width: 8em; height: 8em; margin-top: 1em; background-color: #1f2937">
                            <div class="card-body">
                                <h5 class="card-title">{{ $avatar->nome }}</h5>
                                @if ($usuario->avatar_cabeca == $avatar->imagem || $usuario->avatar_traje == $avatar->imagem)
                                    <button class="btn btn-secondary" disabled>Já equipado</button>
                                @else
                                    <form action="{{ route('colecao.equipar', $avatar->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399">Equipar</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        @endforeach
    </div>

    <div class="border rounded p-3"  style="margin-top: 1em; background-color: #1f2937; color: #f3f4f6">
        <div style="display: flex; justify-content: center; align-items: center">
            <h1 style="color: #f3f4f6; font-size: 1.2em">Trajes</h1>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        @foreach ($avatares as $avatar)
            @if ($usuario->avatares->contains($avatar->id))
                @if ($avatar->equipado_em == 'traje')
                    <div class="col-md-3 mb-4">
                        <div class="card h-100" style="display: flex; flex-direction: column; align-items: center; background-color: #1f2937; color: #f3f4f6">
                            <img src="{{ asset('storage/' . $avatar->imagem) }}" class="card-img-top" alt="{{ $avatar->nome }}" style="width: 8em; height: 16em; margin-top: 1em; background-color: #1f2937">
                            <div class="card-body">
                                <h5 class="card-title">{{ $avatar->nome }}</h5>
                                @if ($usuario->avatar_cabeca == $avatar->imagem || $usuario->avatar_traje == $avatar->imagem)
                                    <button class="btn btn-secondary" disabled>Já equipado</button>
                                @else
                                    <form action="{{ route('colecao.equipar', $avatar->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary" style="background-color: #3730a3; border: 1px solid #34d399">Equipar</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        @endforeach
    </div>
</div>
@endsection
