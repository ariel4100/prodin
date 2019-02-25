@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        @foreach($servicios as $s)
            <div class="col-md-12">
                @if($s->id%2 == 0)
                    <div class="row">
                        <div class="col-6" style="border-right: 1px solid #BBBBBB; padding-bottom: 10px; text-align: right;">
                            <p class="" style="text-align: right;">{{ $s->nombre }}</p>
                            <p class="" style="text-align: right;">{{ $s->descripcion_breve }}</p>
                            <span class=""style="text-align: right;">{!! $s->descripcion !!}</span>
                        </div>
                        <div class="col-6" id="image-servicios" style=" ">
                            <img src="{{ asset('images/servicios/'.$s->file_image) }}" class="responsive-img">
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-6" style="border-right: 1px solid #BBBBBB; padding-bottom: 25px" >
                            <img src="{{ asset('images/servicios/'.$s->file_image) }}" class="responsive-img" style="margin-left: 29rem;">
                        </div>
                        <div class="col-6" >
                            <p class="">{{ $s->nombre }}</p>
                            <p class="">{{ $s->descripcion_breve }}</p>
                            <span class="" >{!! $s->descripcion !!}</span>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>

@endsection
