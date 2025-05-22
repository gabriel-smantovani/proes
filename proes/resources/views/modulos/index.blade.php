@extends('layouts.app')

@section('title', 'Módulos')

@section('content')
<div class="container mt-4">

    <div style="display: flex; width: 100%; justify-content: center">
        <i class="bi bi-compass" style="color: #f3f4f6; font-size: 5em"></i>
    </div>

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

    <div class="row justify-content-center mt-4">

    @foreach ($modulos as $modulo)
        @php
            $conquistaNecessaria = $modulo->conquista_necessaria_id;
            $usuarioTemConquista = auth()->user()->conquistas->contains('id', $conquistaNecessaria);
        @endphp

        <div class="col-md-4">
            @if ($usuarioTemConquista || $conquistaNecessaria == NULL)
                <a href="/modulos/{{ $modulo->id }}" class="card text-center p-3 text-decoration-none" style="background-color: #1f2937; color: #f3f4f6">
            @else
                <div class="card text-center p-3 text-decoration-none" style="background-color: #374151; color: #9ca3af; opacity: 0.5; cursor: not-allowed">
            @endif

                    <h5 style="font-size: 1.2em; color: #9ca3af">Módulo</h5>
                    <i class="{{ $modulo->img_link }}" style="font-size: 3em"></i>
                    <p class="fw-bold" style="font-size: 1.5em">{{ $modulo->titulo }}</p>

            @if ($usuarioTemConquista || $conquistaNecessaria == NULL)
                </a>
            @else
                </div>
            @endif
        </div>
    @endforeach

    </div>
</div>
@endsection

<script>



</script>