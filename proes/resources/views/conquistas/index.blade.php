@extends('layouts.app')

@section('content')
<div class="container mt-4 text-center">
    <h1 style="color: #f3f4f6; font-size: 2em">Minhas conquistas</h1>

    <div class="row justify-content-center mt-4">
        @foreach ($conquistas as $conquista)
            <div class="col-md-3 mb-4">
                <div class="card h-100" style="display: flex; flex-direction: column; align-items: center; background-color: #1f2937; color: #f3f4f6">
                    <div class="card-body">
                        <h5 class="card-title">{{ $conquista->nome }}</h5>
                        <p>{{ $conquista->descricao }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
