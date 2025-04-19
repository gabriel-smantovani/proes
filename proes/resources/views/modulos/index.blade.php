@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2>Escolha um Módulo</h2>
    </div>

    <div class="row justify-content-center mt-4">

    @foreach ($modulos as $modulo)
        <div class="col-md-4">
            <a href="/modulos/{{ $modulo->id }}" class="card text-center p-3 text-decoration-none">
                <h5>Módulo</h5>
                <i class="{{ $modulo->img_link }}"></i>
                <p class="fw-bold">{{ $modulo->titulo }}</p>
            </a>        
        </div>
    @endforeach

    </div>
</div>
@endsection
