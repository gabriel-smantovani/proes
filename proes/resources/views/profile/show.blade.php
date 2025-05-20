@extends('layouts.app')

@section('title', 'Perfis')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">
                <div class="max-w-xl" style="display: flex">
                    <div style="display: flex; flex-direction: column; margin: 0 2em 0 2em">
                        <div style="width: 8em; height: 8em">
                            <img src="{{ asset('storage/' . $user->avatar_cabeca) }}" alt="">
                        </div>
                        <div style="width: 8em; height: 16em">
                            <img src="{{ asset('storage/' . $user->avatar_traje) }}" alt="">
                        </div>
                    </div>
                    <div style="display: flex; justify-content: space-between; width: 80%">
                        <div style="display: flex; flex-direction: column; margin-top: 2em">
                            <div class="max-w-xl" style="color: white">
                                <p>Nome:</p>
                                <p style="font-size: 2em">{{ $user->name }}</p>
                            </div>
                            @if (!is_null($user->instituicao_ensino))
                                <div class="max-w-xl" style="color: white; margin-top: 1em">
                                    <p>Instituição de Ensino:</p>
                                    <p style="font-size: 2em">{{ $user->instituicao_ensino }}</p>
                                </div>
                            @endif
                            <div class="max-w-xl" style="margin-top: 1em">
                                @if (!is_null($user->link_github))
                                    <a href="{{ $user->link_github }}" target="_blank" class="btn btn-success" style="background-color: #3730a3; border: 1px solid #34d399">
                                        <i class="bi bi-github"></i>
                                    </a>
                                @endif
                                @if (!is_null($user->link_linkedin))
                                    <a href="{{ $user->link_linkedin }}" target="_blank" class="btn btn-success" style="background-color: #3730a3; border: 1px solid #34d399">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                        @if (auth()->user()?->id === $user->id)
                            <div>
                                <div class="max-w-xl d-flex justify-content-end">
                                    <a href="{{ route('profile.edit') }}" class="btn btn-success" style="background-color: #3730a3; border: 1px solid #34d399">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
