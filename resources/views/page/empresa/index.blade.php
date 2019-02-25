@extends('layouts.app')

@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            @foreach ($sliders as $s)
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="{{ asset('images/sliders/'. $s->file_image) }}" alt="First slide">
                        <div class="mask "></div>
                    </div>
                    <div class="carousel-caption" style="   right: 40%; left: 40%; bottom: 100px;">
                        <div class="" style="background-color: #2DC5EE; ">
                            <h3 class="h3-responsive">Variedad <br> de Valvulas</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
<div class="container">
    <div class="row">
        <div class="col-md-6   mt-5">
            <h2>{{ $empresa->titulo1 }}</h2>
            <p class="lead">
                {!! $empresa->descripcion !!}
            </p>
        </div>
        <div class="col-md-6 mt-5">
            <img src="{{ asset('images/empresa/'.$empresa->file_image) }}" alt="img" class="img-fluid">
        </div>
    </div>
</div>

@endsection
