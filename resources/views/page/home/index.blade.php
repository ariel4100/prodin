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

        ::placeholder { color: #A4A4A6; }
        .slick-prev:before, .slick-next:before{
            color: darkgrey !important;
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
        .slider .slides li .caption p {
            color: #ffffff;
            line-height: 0.5;
        }
        .slider .slides li .caption {

            position: absolute;
            top: 15%;
            left: unset;
            width: 70%;
            opacity: 0;
        }
        .slider .slides {
            background-color: #ffffff;
            height: 500px !important;
        }
        .slider .indicators {
            bottom: 5%;
            z-index: 99999;
        }
        .slider .indicators .indicator-item {
            height: 10px;
            width: 10px;
            background-color: rgba(181,181,181,0.7);

        }
        .slider .indicators .indicator-item.active {
            background-color: rgba(181,181,181,1);
        }

        .slider {
            position: relative;
            height: 500px !important;
            width: 100%;
        }

        .slider-product-container {
            border: 1px solid #CCCCCC;

        }
        .slider-product .indicators .indicator-item {
            height: 10px;
            width: 10px;
            background-color: rgba(181,181,181,0.7);
        }
        .slider-product .indicators .indicator-item.active {
            background-color: rgba(181,181,181,1);
        }

        .box {
            background-image: linear-gradient(#2DC5EE, #2DC5EE),

            linear-gradient(#2DC5EE, #2DC5EE),
            linear-gradient(#2DC5EE, #2DC5EE );
            background-repeat: no-repeat;
            background-size: 2px 30%, 30% 2px, 2px 50%, 50% 2px, calc(100% - 8px) calc(100% - 8px);
        //background-position: left bottom, left bottom, right top, right top, 4px 4px;
            padding: 10px;
            height: 160px;
        }
        .product-image img{
        //border-style: groove !important;
            border: 1px solid darkgrey;
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
        <div class="container" style="margin-bottom: 10%">
            <h4 class="center" style="color: #2CC5ED; margin-bottom: 3rem; margin-top: 3rem; font-family: quicksand">CATEGORIAS DESTACADAS</h4>
            <div class="row center">
                @foreach($destacados2 as $f)
                    <a class="product-item col s12 m6 l3" href="{{ route('listar.page', $f->categoria->id) }}">
                        <div class="box">
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
                        <div class="" style="padding: 10px;">
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
                    <a href="{!! url(lcfirst(strip_tags($e->nombre))) !!}">
                        <img src="{{ asset('images/enlace/'.$e->file_image) }}" class="responsive-img ion-active" alt="">
                        <h6 class="center" style="color: #2CC5ED">{!! $e->nombre !!}</h6>
                    </a>
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