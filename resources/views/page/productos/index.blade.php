@extends('layouts.app')

@section('style')
    <style>
        .product-image img{
            //border-style: groove !important;
            border: 1px solid darkgrey;
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

    </style>

@stop
@section('content')
    <div class="container" style="margin-top: 4rem; margin-bottom: 4rem">
        <div class="row center" >
            @foreach($familias as $f)
                    <a class="product-item col l3 s12 m6 a" style="margin-bottom: 5%;" href="{{ route('listar.page', $f->id) }} ">
                        <div class="box">
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
                        </div>
                    </a>


            @endforeach
        </div>

    </div>



@endsection
