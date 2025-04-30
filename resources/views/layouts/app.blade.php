<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi sitio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles') <!-- Para meter CSS específicos -->
</head>

@php
    $path = request()->path();
    if ($path == '/') $path = 'home';
    $path = str_replace('/', '-', $path);
@endphp 

<body class="page-{{ $path }}">
    @include('partials.public.header')

    <main >
        @yield('content')
    </main>

    @include('partials.public.footer')
    <script src="https://kit.fontawesome.com/a2fb19ca31.js" crossorigin="anonymous"></script>
    @stack('scripts') <!-- Para meter JS específicos -->
</body>
</html>
