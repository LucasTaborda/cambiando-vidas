@extends('layouts.dashboard')

@section('title', 'Crear/Editar Página')
@section('content')
@php
    if(isset($page))
    {
        $path = '/pages/'. $page->id;
        $method = 'PUT';
        $title = 'Editar página: <i>'. $page->title .'</i>';
    }
    else
    {
        $path = '/pages';
        $method = 'POST';
        $title = 'Crear página';
    }
@endphp

    @include('partials.private.feedback-labels')

    <h1>{!! $title !!}</h1>


    <form action="{{$path}}" method="POST">  
        @csrf
        @method($method)
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $page->title ?? null }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenido</label>
            <textarea name="content" id="editor" cols="80" rows="10" style="height: 500px">{{ old('content', $page->content ?? null) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Alias de enlace</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $page->slug ?? null }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
@vite('resources/js/ckeditor.js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    });
</script>

