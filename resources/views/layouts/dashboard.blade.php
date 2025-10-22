<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Cambiando Vidas')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        @vite(['resources/css/dashboard/dashboard.css', 'resources/js/app.js'])
        @stack('styles') 
    </head>
    <body class="dashboard">
        @include('partials.private.header')
        
        <div class="row">

            @include('partials.private.sidebar')
        
            <main class="col-md-10 mr-3 pr-3">
                @yield('content')
            </main>
    
        </div>

        <script src="https://kit.fontawesome.com/a2fb19ca31.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        @stack('scripts') 
    </body>
</html>
