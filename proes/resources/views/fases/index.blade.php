@extends('layouts.app')

@section('title', 'Fase')

@section('content')
<div class="max-w-3xl mx-auto mt-6">
    <h1 class="text-2xl font-bold mb-4">Fases Cadastradas</h1>

    @if (session('success'))
        <div class="bg-green-200 text-green-800 p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    @foreach ($fases as $fase)
        <div class="flex justify-between items-center border p-3 mb-2 bg-white rounded shadow">
            <span>{{ $fase->titulo }}</span>

            <form action="{{ route('fases.destroy', $fase) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta fase e todo o conteúdo associado?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                    Excluir
                </button>
            </form>
        </div>
    @endforeach
</div>
@endsection
