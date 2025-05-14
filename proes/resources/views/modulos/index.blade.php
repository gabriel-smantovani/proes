@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h1 style="color: #f3f4f6; font-size: 2em">Escolha um Módulo</h1>
    </div>

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