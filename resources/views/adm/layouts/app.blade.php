<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administrador Prodin Automacion</title>
    <!-- Styles -->
    <link rel="stylesheet" href=" {{ asset('css/materialize.css')}} ">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link href="{{ asset('css/admin/app.css') }}" rel="stylesheet">
    <link href="{{ asset('icons/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


    @yield('style')
</head>
<body>
    <div id="app">
        @include('adm.partials.navbar')


                @include('adm.partials.sidebar')

            <main class=" ">

                    @yield('content')

            </main>


    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.1/js/i18n/es.js"></script>
    @yield('script')
    <script>

        $(document).ready(function(){
            //M.AutoInit();
            $('select').formSelect();

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
