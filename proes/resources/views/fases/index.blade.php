@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2>Variável com o nome do módulo</h2>
    </div>

    
    <div class="border rounded p-3 bg-light">
        <div class="text-center text-black">
            <h3>Material de estudo</h3>
        </div>
        <div class="border rounded p-1 bg-light row justify-content-center mt-4">
            <div class="col-md-4">
                <p>Variável com o nome do conteúdo</p>
            </div>
            <div class="col-md-1">
                <a href="">
                    <i class="bi bi-arrow-up-right"></i>
                </a>
            </div>
        </div>
        <div class="border rounded p-1 bg-light row justify-content-center mt-4">
            <div class="col-md-4">
                <p>Variável com o nome do conteúdo</p>
            </div>
            <div class="col-md-1">
                <a href="">
                    <i class="bi bi-arrow-up-right"></i>
                </a>
            </div>
        </div>

        <button class="btn btn-success">
            <i class="bi bi-plus"></i>
            Adicionar material de estudo
        </button>

        <div class="text-center text-black">
            <h3>Vamos testar suas habilidades!</h3>
        </div>
        <div class="border rounded p-1 bg-light row justify-content-center mt-4">
            <div class="col-md-4">
                <p>Variável com o nome da fase</p>
            </div>
            <div class="col-md-1">
                <a href="">
                    <i class="bi bi-play"></i>
                </a>
            </div>
        </div>
        <div class="border rounded p-1 bg-light row justify-content-center mt-4">
            <div class="col-md-4">
                <p>Variável com o nome da fase</p>
            </div>
            <div class="col-md-1">
                <a href="">
                    <i class="bi bi-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
