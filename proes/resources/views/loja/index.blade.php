@extends('layouts.app')

@section('content')
<div class="container mt-4 text-center">
    <h1 style="color: #f3f4f6; font-size: 2em">Avatares</h1>

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @elseif (session('info'))
        <div class="alert alert-info text-center">{{ session('info') }}</div>
    @endif

    <div class="row justify-content-center mt-4">
        @foreach ($avatares as $avatar)
            <div class="col-md-3 mb-4">
                <div class="card h-100" style="display: flex; flex-direction: column; align-items: center; background-color: #1f2937; color: #f3f4f6">
                    <img src="{{ asset('storage/' . $avatar->caminho) }}" class="card-img-top" alt="{{ $avatar->nome }}" style="width: 10em; height: 10em; margin-top: 1em; background-color: #1f2937">
                    <div class="card-body">
                        <h5 class="card-title">{{ $avatar->nome }}</h5>
                        <p><i class="bi bi-coin"></i> {{ $avatar->preco }}</p>
                        @if ($usuario->avatares->contains($avatar->id))
                            <button class="btn btn-secondary" disabled>Já adquirido</button>
                        @else
                            <form action="{{ route('loja.comprar', $avatar->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Comprar</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
