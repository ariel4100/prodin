<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href=" {{ asset('css/materialize.css')}} ">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/fontawesome/css/all.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('adm.partials.navbar')
        <div class="row">
            <div class="col s3">
                @include('adm.partials.sidebar')
            </div>
            <main class="col s9">

                    @yield('content')

            </main>
        </div>

    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>
    <script>

        $(document).ready(function(){
            $('.collapsible').collapsible();
            $('.sidenav').sidenav();
            $('.dropdown-trigger').dropdown({
                constrainWidth: false,
                closeOnClick: false,
                hover: true
            });
            $('.dropdown-buscador').dropdown({
                constrainWidth: false,
                closeOnClick: false,
            });


        });

    </script>
</body>
</html>
