@extends('layouts.dashboard')

@section('title', 'Crear/Editar imagen de galería')
@section('content')
@php
    if(isset($galleryImage))
    {
        $path = '/gallery-images/'. $galleryImage->id;
        $method = 'PUT';
        $title = 'Editar imagen de galería: <i>'. $galleryImage->title .'</i>';
    }
    else
    {
        $path = '/gallery-images';
        $method = 'POST';
        $title = 'Crear imagen de galería';
    }
@endphp
    @include('partials.private.feedback-labels')
    <h1>{!! $title !!}</h1>

    <form action="{{ $path }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($method)
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $galleryImage->title ?? null ) }}">
        </div>

        @if(isset($galleryImage))
            <img src="{{ $galleryImage->imagePath }}" alt="{{ $galleryImage->title }}" height="200">
        @else
            <img src="/images/placeholder.png" alt="" height="200">
        @endif
        <input type="file" name="image" accept="image/*" class="form-control mb-3" id="image" value="{{ old('image', $galleryImage->image ?? null)  }}">

        <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control" id="weight" name="weight" value="{{ $galleryImage->weight ?? null }}" style="width:50px" placeholder="0">
        </div>

        <button type="submit" class="btn btn-primary" >Guardar</button>
    </form>
    
@endsection

