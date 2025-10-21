


@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <a href="https://wa.me/5491131808429" target="_blank" class="whatsapp-float">
        {!! file_get_contents(public_path('images/whatsapp.svg')) !!}
    </a>
  
    <section class="no-border first-section">
        <div class="container">
            <div class="card main-card">
                <div class="card-image-container" style="background-image: url({{ asset('images/main.jpg') }})">
                    {{-- <img src="{{ asset('images/dog-cat.jpg') }}" > --}}
                </div>
                <div class="card-body">
                    <h2>Adoptá a un amigo fiel</h2>
                    <p>Dale una segunda oportunidad a un animal que está esperando una familia que lo ame.</p>
                    <a href="#" class="button">Quiero adoptar</a>
                </div>
            </div>    
        </div>

    </section>

    <section class="color-pink">
        <div class="container">
            <h2 class="section-title">Ayudanos con una donación</h2>
            <h3 class="section-subtitle">Tu ayuda nos permite seguir salvando vidas</h3>
            <div class="card-group">
                <div class="card card-green">
                    <div class="card-image-container">
                        <img src="{{ asset('images/veterinarian-2.png') }}" >
                    </div>
                    <p>Atención veterinaria</p>
                    <a class="button" href="#">Donar</a>
                </div>
        
                <div class="card card-red">
                    <div class="card-image-container">
                        <img src="{{ asset('images/vaccine-2.png') }}" >
                    </div>
                    <p>Vacunación</p>
                    <a class="button" href="#">Donar</a>
                </div>
        
                <div class="card card-blue">
                    <div class="card-image-container">
                        <img src="{{ asset('images/food.png') }}" >
                    </div>
                    <p>Alimento</p>
                    <a class="button" href="#">Donar</a>
                </div>
            </div>        
        </div>
    </section>
    <section class="color-blue">
        <div class="container">
            <h2 class="section-title">Ser voluntario</h2>
            <h3 class="section-subtitle">Sumate a nuestro equipo de corazones enormes</h3>
            <div class="two-columns">
                <div>
                    <h3>¿Tenés ganas de ayudar? Hay muchas formas de colaborar</h3>
                    <ul>
                        <li>Transitar mascotas</li>
                        <li>Sacar fotos para difusión</li>
                        <li>Transportar animales</li>
                        <li>Difundir en redes</li>
                    </ul>
                    <p>No necesitás experiencia previa, solo compromiso y amor por los animales.</p>
                    <a href="#" class="button">Quiero ayudar</a>
                </div>
                <div>
                    <img src="{{ asset('images/volunteers-flat.png') }}" alt="voluntarios">
                </div>
            </div>
        </div>
    </section>
@endsection