@extends('layouts.app')

@section('title', 'Placar de líderes')

@section('content')

<div class="container mt-4">

    <div class="border rounded p-3"  style="margin-top: 1em; background-color: #1f2937; color: #f3f4f6">
        <div style="display: flex; justify-content: center; align-items: center">
            <h1 style="color: #f3f4f6; font-size: 1.2em">Placar de líderes de pontuação</h1>
        </div>
    </div>
    <div style="display: flex; flex-direction: column; align-items: center">
    @foreach ($rankingPontuadores as $usuario)
        <a href="{{ route('profile.show', $usuario->id) }}" target="_blank" class="border rounded p-3"  style="display: flex; align-items: center; justify-content: space-between; width: 95%; margin-top: 0.5em; background-color: #1f2937; color: #f3f4f6">
            <p style="margin-left: 1em">{{ $usuario->name }}</p>
            <p style="margin-right: 1em">
                {{ $usuario->total_pontuacao }} {{ $usuario->total_pontuacao == 1 ? 'ponto' : 'pontos' }}
            </p>
        </a>
    @endforeach
    </div>    
</div>

@endsection
