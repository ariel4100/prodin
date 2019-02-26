@extends('layouts.app')

@section('content')
    <div class="carousel carousel-slider center">
        <div class="carousel-item red white-text" href="#one!">
            <h2>First Panel</h2>
            <p class="white-text">This is your first panel</p>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
            <h2>Second Panel</h2>
            <p class="white-text">This is your second panel</p>
        </div>
        <div class="carousel-item green white-text" href="#three!">
            <h2>Third Panel</h2>
            <p class="white-text">This is your third panel</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
            <h2>Fourth Panel</h2>
            <p class="white-text">This is your fourth panel</p>
        </div>
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
