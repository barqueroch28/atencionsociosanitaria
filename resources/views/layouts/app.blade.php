<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description', 'Temario Gratuito ACTUALIZADO 2022 y Examen Online. Elaborado con el artículo 35 del Real Decreto 39/1997 ¿A qué esperar para tu titulación?')">
    <meta name="url" content="https://www.curso-teleoperador.com">
    <meta name="site_name" content="Curso Teleoperador">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.ico')}}" sizes="32x32">
    <title>@yield('title', 'Home')</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/bootstrap.js'])
    @vite(['public/css/styles.css'])
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between bg-white">
        <header>            
            @include('partials.nav')
        </header>

        <main class="pt-5">
            @yield('content')
        </main>
        
        <footer>
            @include('partials.footer')
        </footer>
    </div>
    <script>
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
</body>
</html>