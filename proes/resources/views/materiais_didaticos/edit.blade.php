@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">
                <div class="max-w-xl">
                    @include('materiais_didaticos.partials.update-materiais-information-form')
                </div>
            </div>

            <div class="w-full sm:max-w-2xl mt-6 px-6 py-4 shadow-md mx-auto overflow-hidden sm:rounded-lg" style="background-color: #1f2937">
                <div class="max-w-xl">
                    @include('materiais_didaticos.partials.delete-materiais-form')
                </div>
            </div>
        </div>
    </div>
@endsection
