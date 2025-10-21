@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <h1>Vidas Cambiadas</h1>
    <div class="gallery">
        @foreach($galleryImages as $galleryImage)
        <div>
            <img src="{{ $galleryImage->imagePath }}" alt="{{ $galleryImage->title }}">
            <p>{{ $galleryImage->title }}</p>
        </div>
        @endforeach
    </div>
@endsection