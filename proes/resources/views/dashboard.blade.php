@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; color: #f3f4f6">
        <h1 style="font-size: 2em">Olá, {{ $usuario->name }}!</h1>
        <img src="{{ asset('storage/' . $usuario->avatar_image) }}" alt="{{ $usuario->name }}" style="width: 5em; height: 5em; border: 2px solid #f3f4f6; border-radius: 50%; margin-top: 1em; background-color: #1f2937">
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <a href="#" class="card text-center p-3 text-decoration-none" style="background-color: #1f2937; color: #f3f4f6">
                <h5 style="color: #9ca3af">Onde paramos?</h5>
                <i class="bi bi-book fs-1"></i>
                <p class="fw-bold">{{ $str_fase }}</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="card text-center p-3 text-decoration-none" style="background-color: #1f2937; color: #f3f4f6">
                <h5 style="color: #9ca3af">Última conquista alcançada</h5>
                <i class="bi bi-trophy fs-1"></i>
                <p class="fw-bold">{{ $str_conquista }}</p>
            </a>
        </div>
    </div>
</div>
@endsection
