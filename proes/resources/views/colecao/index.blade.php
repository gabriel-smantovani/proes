@extends('layouts.app')

@section('content')
<div class="container mt-4 text-center">
    <h2>Minha coleção</h2>

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="alert alert-danger text-center">{{ session('error') }}</div>
    @elseif (session('info'))
        <div class="alert alert-info text-center">{{ session('info') }}</div>
    @endif

    <div class="row justify-content-center mt-4">
        @foreach ($avatares as $avatar)
            @if ($usuario->avatares->contains($avatar->id))
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $avatar->caminho) }}" class="card-img-top" alt="{{ $avatar->nome }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $avatar->nome }}</h5>
                            <form action="{{ route('colecao.equipar', $avatar->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Equipar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
