@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <img src="{{ asset('images/logo.jpg') }}" alt="logo" class=logo>
            <h1 class="card-title text-center">Recuperar contraseña</h1>
            <div class="login-page">
                <form method="POST" action="{{ route('password.email')}}">
                    @csrf
                    <input type="text" name="email" placeholder="Email" class="form-control">
                    <button type="submit" class="btn btn-primary">Enviar enlace de recuperación</button>
                </form>
            </div>        
        </div>
    </div>
</div>


@endsection

{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
