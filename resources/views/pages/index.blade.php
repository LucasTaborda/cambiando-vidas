@extends('layouts.dashboard')

@section('title', 'Páginas')

@section('content')
    
<x-confirm-modal 
    id="deleteConfirm"
    title="Eliminar página"
    message="¿Seguro que querés eliminar esta página?"
    confirmText="Eliminar" />

<!-- Botón que abre el modal -->
{{-- Así obtengo el modelo Visit: --}}
    @include('partials.private.feedback-labels')
    <h1>Páginas</h1>
    <a class="btn btn-primary mb-4" href="/pages/create"><i class="fa-solid fa-circle-plus"></i> Añadir página</a>
    <form action="{{ url()->current() }}" method="GET" class="search-form">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar..." class="form-control">
        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>

    <ul class="list-group">
        @if ($pages->isEmpty())
            <div class="alert alert-info" role="alert">
                <b>No se encontraron resultados con este criterio de busqueda: <i>"{{ request('search') }}"</i>.</b>
            </div>    
        @endif

        @foreach ($pages as $page)
            <li class="list-group-item">
                <a href="/pages/{{ $page->id }}/edit">{{ $page->title }}</a>
                <div class="action-buttons">
                    <a href="/{{$page->slug}}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-eye"></i></a>
                    <a href="/pages/{{ $page->id }}/edit" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                    <button 
                        class="btn btn-danger btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteConfirm"
                        data-action="{{ route('pages.destroy', $page) }}"
                        data-name="{{ $page->title }}">
                        <i class="fa-solid fa-trash"></i>
                    </button>
            
                    {{-- <form action="/pages/{{ $page->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form> --}}
                </div>
            </li>
        @endforeach
    </ul>

    <div class="paginator-block mt-4">
        {{ $pages->links('pagination::bootstrap-5') }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
          const modal = document.getElementById('deleteConfirm')
          modal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget
            const action = button.getAttribute('data-action')
            const name = button.getAttribute('data-name')
        
            const form = modal.querySelector('form')
            const message = modal.querySelector('#deleteConfirmMessage')
        
            form.action = action
            message.innerHTML = `¿Estás seguro que deseás eliminar <i>${name}</i>? <strong>Esta acción no podrá deshacerse.</b>`
        })
        })
    </script>
        
@endsection