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

    </div>
<div class="container" style="margin-top: 4rem">
    <div class="row">
        <div class="col s6">
            <h2>{{ $empresa->titulo1 }}</h2>
            <p class="lead">
                {!! $empresa->descripcion !!}
            </p>
        </div>
        <div class="col s6">
            <img src="{{ asset('images/empresa/'.$empresa->file_image) }}" alt="img" class="img-fluid">
        </div>
    </div>
</div>

@endsection
