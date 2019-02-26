@extends('layouts.app')

@section('content')
    <div class="carousel carousel-slider center">
        @foreach($sliders as $s)
            <div class="carousel-item   white-text" href="#one!" style="background-image: url({{ asset('images/sliders/'.$s->file_image) }})">
                <div class="left" style="padding: 0px 20px 10px 20px; background-color: #2DC5EE;">
                    <h2>CILINDROS NEUMATICOS E HIDRAULICOS</h2>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row" style="background-color: #094984; height: 100px; font-family: 'Open Sans'">
        <div class="col s6 offset-s4">
            @if ($informacion)
                <h6>{{ $informacion->titulo1 }}</h6>
            @endif
        </div>
    </div>

    <div class="row" style="background-color: #D6D6D6; height: 100%; font-family: 'Open Sans'">
        <div class="col s6 offset-s3">
            <h5>CONOZCA LO QUE TENEMOS PARA OFRECERLE</h5>
            <form action="" class="form-row justify-content-center">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Buscar producto...">
                </div>
            </form>
        </div>
    </div>

@endsection
