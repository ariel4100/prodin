@extends('layouts.app')

@section('style')
    <style>
        .ion-active{
            width: 200px;
            height: 200px;
            background-color: #094984;
            border-radius: 50%;
            border: 2px solid #094984;

        }
        h6 {
            font-size: 1.15rem;
            line-height: unset;

        }
        ::placeholder { color: #A4A4A6; }
        .slick-prev:before, .slick-next:before{
            color: #009688 !important;
        }

        .slick-prev, .slick-next{
            top: 35% !important;
        }

        .slick-prev{
            left: -50px !important;
        }

        .slick-next{
            right: -50px !important;
        }

        .slick-slide{
            max-height: 100px !important;
        }

        @media(max-width: 600px) {
            #caption-sliders{
                width: 100%;
                padding-left: 0;
                margin-left: -10%;
            }
        }
        .slider .slides li .caption {
            color: #fff;
            position: absolute;
            top: 15%;
            left: unset;
            width: 70%;
            opacity: 0;
        }
    </style>
@stop
@section('content')
    <div class="slider" id="slider-home">
        <ul class="slides">
            @forelse($sliders as $s)
                <li>
                    <img src="{{ asset('images/sliders/'.$s->file_image) }}" class="img-respo   nsive" style="position: absolute;" alt="">

                    <div class="caption" id="caption-sliders" style="padding-top: 7%; ">
                        @if ($s->titulo)
                            <div class="left" style=" background-color: #2DC5EE; box-shadow: 2px 2px 5px #999;  font-family: quicksand; padding: 20px 50px 20px 90px;" >
                                {!! $s->titulo !!}
                            </div>
                        @endif

                    </div>
                </li>
            @empty
            @endforelse
        </ul>
    </div>


    <div class="row " style="background-color: #094984; padding:  2rem; font-family: 'Open Sans'">
        <div class="col l8 offset-l2 center" style="color: white; font-family: quicksand;">
            @if ($informacion)
                 {!! $informacion->titulo1 !!}
            @endif
        </div>
    </div>
    @if($destacados2)
        <div class="container">
            <h4 class="center" style="color: #2CC5ED; margin-bottom: 3rem; margin-top: 3rem; font-family: quicksand">CATEGORIAS DESTACADAS</h4>
            <div class="row center">
                @foreach($destacados2 as $f)
                    <a class="product-item col s12 m6 l3" href="{{ route('listar.page', $f->categoria->id) }}">
                        <div class="product-image">
                            <img src="{{ asset('images/categoria/'. $f->categoria->file_image) }}" class="responsive-img">
                            <div class="product-overlay">
                                <div class="icon">
                                    <i class="material-icons">add</i>
                                </div>
                            </div>
                        </div>
                        <div style="color: #074784; margin-top: 5%">
                            {{ $f->categoria->nombre }}
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
    @if($destacados)
        <div class="container">
            <h4 class="center" style="color: #2CC5ED; margin-bottom: 3rem; margin-top: 3rem; font-family: quicksand">PRODUCTOS DESTACADAS</h4>
            <div class="row center">
                @foreach($destacados as $f)
                    <a class="product-item col s12 m6 l3" href="{{ route('show.page', $f->producto->id) }}">
                        <div class="product-image">
                            <img src="{{ asset('images/productos/'. $f->producto->file_image) }}" class="responsive-img">
                            <div class="product-overlay">
                                <div class="icon">
                                    <i class="material-icons">add</i>
                                </div>
                            </div>
                        </div>
                        <div style="color: #074784;  margin-top: 5%">
                            {{ $f->producto->nombre }}
                        </div>
                    </a>

                @endforeach
            </div>
        </div>
    @endif
    <div class="row center" style="background-color: #F4F4F4; height: 100%; font-family: 'Open Sans'; padding: 3rem">
        <div class="col l8 offset-l2 center" style="color: #2DC5EE; font-family: quicksand;">
            @if ($informacion)
                {!! $informacion->titulo4 !!}
            @endif
        </div>
        <div class="col l6 s12 offset-l3">
            <div class="row">
                <form  method="get"  class="col s12" action="{{ action('SeccionHomeController@buscador') }}">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input placeholder="Buscar producto..." id="first_name" type="text" name="nombre" class="validate">

                    </div>
                </form>
            </div>
            @foreach($enlaces as $e)
                <div class="col l6 m12 s12 center " style="margin-top: 3rem">
                    <img src="{{ asset('images/enlace/'.$e->file_image) }}" class="responsive-img ion-active" alt="">
                    <h6 class="center" style="color: #2CC5ED">{!! $e->nombre !!}</h6>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container" style="background: #ffffff; padding: 50px 0px">
        <div class="container hide-on-med-and-down" style="width: 80% !important;">
            <div class="slick-marcas">
                @foreach ($marcas as $m)
                    <img src="{{ asset('images/marcas/'.$m->file_image) }}" class="img-responsive" style="height: auto !important; width: auto !important; padding-right: 60px">
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#slider-home').slider({
                height: 479,
            })
        });

    </script>
@stop