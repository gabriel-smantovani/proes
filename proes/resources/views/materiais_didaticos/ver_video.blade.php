@extends('layouts.app')

@section('title', 'Material de apoio')

@section('content')
<div class="container mt-4 d-flex flex-column align-items-center justify-content-center">

    <iframe width="800" height="450" 
        src="https://www.youtube.com/embed/{{ $material->caminho }}" 
        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
    </iframe>

</div>
@endsection