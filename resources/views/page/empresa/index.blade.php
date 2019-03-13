@extends('layouts.app')
@section('style')
    <style>

        .slider .slides li .caption p {
            color: #ffffff;
        }
        #caption-sliders{
            width: 50%;
            padding-left: 20%;

        }

        #titulo-caption, #titulo-caption p{


            line-height:  0.5;
            font-family: 'quicksand';
            background-color: #2DC5EE;

        }

        @media(max-width: 600px) {
            #caption-sliders{
                width: 100%;
                padding-left: 0;
                margin-left: -10%;
            }
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
            background-color: rgba(255,255,255,0.7);
        }
        .slider .indicators .indicator-item.active {
            background-color: rgba(255,255,255,1);
        }

        .slider {
            position: relative;
            height: 500px !important;
            width: 100%;
        }

        .slider-product .indicators .indicator-item {
            height: 10px;
            width: 10px;
            background-color: rgba(181,181,181,0.7);
        }
        .slider-product .indicators .indicator-item.active {
            background-color: rgba(181,181,181,1);
        }

    </style>
@stop
@section('content')

    <div class="slider" id="slider-home" style=" height: 500px !important;">
        <ul class="slides" style=" height: 500px !important;">
            @forelse($sliders as $s)
                <li>
                    <img src="{{ asset('images/sliders/'.$s->file_image) }}" class="img-responsive" style="position: absolute;" alt="">

                    <div class="caption center" id="caption-sliders" style="padding-top: 4%">
                        @if ($s->titulo)
                            <div class="" id="titulo-caption" style="box-shadow: 2px 2px 5px #999;">
                                <div style="padding: 10px; line-height: normal">
                                    {!! $s->titulo !!}
                                </div>
                            </div>

                        @endif

                    </div>
                </li>
            @empty
            @endforelse
        </ul>
    </div>
<div class="container" style="margin-top: 4rem; font-family: 'open sans'">
    <div class="row">
        <div class="col l6 s12">
            <h5 style="color: #2DC5EE;   font-size: 40px; font-family: quicksand">{{ $empresa->titulo1 }}</h5>
            <p class="">
                {!! $empresa->descripcion !!}
            </p>
        </div>
        <div class="col l6 s12">
            <img src="{{ asset('images/empresa/'.$empresa->file_image) }}" alt="img" class="responsive-img">
        </div>
    </div>
</div>

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.slider').slider({

            })
        });

    </script>
@stop