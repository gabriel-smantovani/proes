@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">
                <div class="max-w-xl">
                    <div class="max-w-xl d-flex justify-content-end">
                        <a href="{{ route('profile.edit') }}" class="btn btn-success" style="background-color: #3730a3; border: 1px solid #34d399">
                            <i class="bi bi-pencil"></i>
                        </a>
                    </div>
                    <div class="max-w-xl">
                        <p style="color: white">{{ $user->name }}</p>
                    </div>
                    <div class="max-w-xl">
                        <p style="color: white">{{ $user->instituicao_ensino }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
