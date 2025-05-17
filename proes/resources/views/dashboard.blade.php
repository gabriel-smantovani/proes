@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; color: #f3f4f6">
        <h1 style="font-size: 2em">Olá, {{ $usuario->name }}!</h1>
    </div>

    
    <div class="d-flex row mt-4">
        <div style="display: flex; flex-direction: column; width: 40%">
            <div style="width: 8em; height: 8em">
                <img src="{{ asset('storage/' . $usuario->avatar_cabeca) }}" alt="">
            </div>
            <div style="width: 8em; height: 16em">
                <img src="{{ asset('storage/' . $usuario->avatar_traje) }}" alt="">
            </div>
        </div>
        <div style="display: flex; flex-direction: column; width: 30%">
            <div class="d-flex row">
                <a href="#" class="card text-center p-3 text-decoration-none" style="background-color: #1f2937; color: #f3f4f6">
                    <h5 style="color: #9ca3af">Onde paramos?</h5>
                    <i class="bi bi-book fs-1"></i>
                    <p class="fw-bold">{{ $str_fase }}</p>
                </a>
            </div>
            <div class="d-flex row mt-4">
                <a href="#" class="card text-center p-3 text-decoration-none" style="background-color: #1f2937; color: #f3f4f6">
                    <h5 style="color: #9ca3af">Última conquista alcançada</h5>
                    <i class="bi bi-trophy fs-1"></i>
                    <p class="fw-bold">{{ $str_conquista }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
