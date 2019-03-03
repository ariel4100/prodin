@extends('layouts.app')

@section('content')


<div class="container" style="margin-top: 4rem">
    <div class="row center" >
        @foreach($familias as $f)
            <a class="product-item col l3 s12 m6 " style="margin-bottom: 5%" href="{{ route('listar.page', $f->id) }}">
                <div class="product-image">
                    <img src="{{ asset('images/categoria/'. $f->file_image) }}" class="responsive-img">
                    <div class="product-overlay">
                        <div class="icon">
                            <i class="material-icons">add</i>
                        </div>
                    </div>
                </div>
                <div style="color: #074784;  margin-top: 5%">
                    {{ $f->nombre }}
                </div>
            </a>

        @endforeach
    </div>
</div>

@endsection
