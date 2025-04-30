@extends('layouts.dashboard')

@section('title', 'Imágenes de galería')

@section('content')
    @include('partials.private.feedback-labels')
    <h1>Imágenes de galería</h1>
    <a class="btn btn-primary mb-4" href="/gallery-images/create"><i class="fa-solid fa-circle-plus"></i> Añadir imagen</a>
    <form action="{{ url()->current() }}" method="GET" class="search-form">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar..." class="form-control">
        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>

    <ul class="list-group">
        @if ($galleryImages->isEmpty())
            <div class="alert alert-info" role="alert">
                <b>No se encontraron resultados con este criterio de busqueda: <i>"{{ request('search') }}"</i>.</b>
            </div>    
        @endif

        @foreach ($galleryImages as $galleryImage)
            <li class="list-group-item">
                <div>
                    <img src="{{ $galleryImage->thumbnailPath }}" alt="{{ $galleryImage->title }}">
                    <a href="/gallery-images/{{ $galleryImage->id }}/edit">{{ $galleryImage->title }}</a>

                </div>
                <div class="action-buttons">
                    <a href="/gallery-images/{{ $galleryImage->id }}/edit" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="/pages/{{ $galleryImage->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <div class="paginator-block mt-4">
        {{ $galleryImages->links('pagination::bootstrap-5') }}
    </div>
@endsection