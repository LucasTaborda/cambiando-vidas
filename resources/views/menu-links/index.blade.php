@extends('layouts.dashboard')

@section('title', 'Páginas')

@section('content')
    @include('partials.private.feedback-labels')
    <h1>Enlaces del menú de navegación</h1>
    <a class="btn btn-primary mb-4" href="/menu-links/create"><i class="fa-solid fa-circle-plus"></i> Añadir enlace</a>
    {{-- <form action="{{ url()->current() }}" method="GET" class="search-form">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar..." class="form-control">
        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form> --}}

    <ul class="list-group">
        @if ($menuLinks->isEmpty())
            <div class="alert alert-info" role="alert">
                <b>No se encontraron resultados con este criterio de busqueda: <i>"{{ request('search') }}"</i>.</b>
            </div>    
        @endif

        @foreach ($menuLinks as $menuLink)
            <li class="list-group-item">
                <a href="/menu-links/{{ $menuLink->id }}/edit">{{ $menuLink->name }}</a>
                <div class="action-buttons">
                    <a href="/{{$menuLink->url}}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-eye"></i></a>
                    <a href="/menu-links/{{ $menuLink->id }}/edit" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="/menu-links/{{ $menuLink->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

@endsection