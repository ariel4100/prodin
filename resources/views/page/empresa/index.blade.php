@extends('layouts.app')

@section('content')
    <div class="carousel carousel-slider center">
        @foreach($sliders as $s)
            <div class="carousel-item   white-text" href="#one!" style="background-image: url({{ asset('images/sliders/'.$s->file_image) }}); align-items: center">
               <div class="row">
                   <div class="col s4 offset-s4" style="pad ding: -20px 20px -20px 20px; background-color: #2DC5EE;">
                       <h2 class="center-align">CILINDROS NEUMATICOS E HIDRAULICOS</h2>
                   </div>
               </div>
            </div>
        @endforeach
    </div>
<div class="container" style="margin-top: 4rem">
    <div class="row">
        <div class="col s6">
            <h5  >{{ $empresa->titulo1 }}</h5>
            <p class="">
                {!! $empresa->descripcion !!}
            </p>
        </div>
        <div class="col s6">
            <img src="{{ asset('images/empresa/'.$empresa->file_image) }}" alt="img" class="responsive-img">
        </div>
    </div>
</div>

@endsection
