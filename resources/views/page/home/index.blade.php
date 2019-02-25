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
            @foreach($sliders as $s)
            <div class="carousel-item active">
                <div class="view" style="background-color: white;">
                    <img class="d-block w-100" style="background-position: center; background-size: cover" src="{{ asset('images/sliders/'. $s->file_image) }}" alt="First slide">
                    <div class="mask"></div>
                </div>
                <div class="carousel-caption bg-info" style="left: 0%; right: 70%; bottom: 100px;">
                    <h3 class="h3-responsive">
                        CILINDROS <br> NEUMATICOS E IDRAULICOS
                    </h3>

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
<div class="container-fluid">
    <div class="row justify-content-center" style="background-color: #094984; font-family: 'Open Sans'">
        <div class="col-md-6 text-white my-5">
            @if ($informacion)
                <h6>{{ $informacion->titulo1 }}</h6>
            @endif
        </div>
    </div>
</div>

    <div class="container-fluid">
        <div class="row justify-content-center" style="background-color: grey;">
            <div class="col-md-8 text-white text-center mt-4" >
                <h3>CONOZCA LO QUE TENEMOS PARA OFRECERLE</h3>
                <form action="" class="form-row justify-content-center">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Buscar producto...">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
