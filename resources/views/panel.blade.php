@extends('layouts.dashboard')

@section('title', 'Páginas')

@section('content')
    
@php
    $visit = App\Models\Visit::all()->first();
@endphp
       
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">¡Hola, {{ auth()->user()->name }}! 👋 </h1>
          <hr class="my-4">
          <p class="lead">Hoy se han registrado <strong>{{ $visit->todayVisits() }}</strong> visitas en la web 🐾</p>
          <p>Visitas totales: {{ $visit->totalVisits() }}</p>
        </div>
      </div>
@endsection