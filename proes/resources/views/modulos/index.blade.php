@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h1 style="color: #f3f4f6; font-size: 2em">Escolha um Módulo</h1>
    </div>

    <div class="row justify-content-center mt-4">

    @foreach ($modulos as $modulo)
        <div class="col-md-4">
            <a href="/modulos/{{ $modulo->id }}" class="card text-center p-3 text-decoration-none" style="background-color: #1f2937; color: #f3f4f6">
                <h5 style="font-size: 1.2em; color: #9ca3af">Módulo</h5>
                <i class="{{ $modulo->img_link }}" style="font-size: 3em"></i>
                <p class="fw-bold" style="font-size: 1.5em">{{ $modulo->titulo }}</p>
            </a>        
        </div>
    @endforeach

    </div>
</div>
@endsection
