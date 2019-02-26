<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand:500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/layouts/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page/servicios.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page/presupuesto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page/contacto.css') }}">
    @yield('style')
</head>
<body>
    <div id="app">
        @include('partials.navbar')
        <main class=" ">
            @yield('content')
        </main>
    </div>

    <!-- Compiled and minified JavaScript -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Librería para la animación  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Librería para el recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
    </script>
    @yield('script')
</body>
</html>
