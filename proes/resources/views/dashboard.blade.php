@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center text-black">
        <h2>Dashboard</h2>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <a href="#" class="card text-center p-3 text-decoration-none">
                <h5>Onde paramos?</h5>
                <i class="bi bi-book fs-1"></i>
                <p class="fw-bold">Variável com a última fase completada</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="card text-center p-3 text-decoration-none">
                <h5>Última conquista alcançada!</h5>
                <i class="bi bi-trophy fs-1"></i>
                <p class="fw-bold">Váriável com o nome da conquista</p>
            </a>
        </div>

        <div class="col-md-4">
            <a href="#" class="card text-center p-3 text-decoration-none">
                <img src="{{ asset('storage/' . $user->avatar_image) }}" class="card-img-top" alt="{{ $user->name }}">
            </a>
        </div>
    </div>
</div>
@endsection
