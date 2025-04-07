@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2>Escolha um Módulo</h2>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <a href="/fases" class="card text-center p-3 text-decoration-none">
                <h5>Módulo</h5>
                <i class="bi bi-1-square fs-1"></i>
                <p class="fw-bold">Introdução à Engenharia de Software</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/fases" class="card text-center p-3 text-decoration-none">
                <h5>Módulo</h5>
                <i class="bi bi-2-square fs-1"></i>
                <p class="fw-bold">Modelos de processos de softwares</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="/fases" class="card text-center p-3 text-decoration-none">
                <h5>Módulo</h5>
                <i class="bi bi-3-square fs-1"></i>
                <p class="fw-bold">Técnicas e diagramas</p>
            </a>
        </div>
    </div>
</div>
@endsection
