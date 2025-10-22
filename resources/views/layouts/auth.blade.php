<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/layout/auth.css', 'resources/js/app.js', 'resources/js/bootstrap.js'])
    @stack('styles') 
    <title>Auth</title>
</head>
<body class="auth bg-light">
    @php
    $path = request()->path();
    if ($path == '/') $path = 'home';
    $path = str_replace('/', '-', $path);
@endphp 

<body class="page-{{ $path }}">

    <main >
        @yield('content')
    </main>

    <script src="https://kit.fontawesome.com/a2fb19ca31.js" crossorigin="anonymous"></script>
    @stack('scripts') <!-- Para meter JS específicos -->
</body>
</body>