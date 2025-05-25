@extends('layouts.app')

@section('title', 'Material de apoio')

@section('content')

<iframe width="560" height="315" 
    src="https://www.youtube.com/embed/{{ $material->caminho }}" 
    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
</iframe>

@endsection