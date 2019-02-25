@extends('layouts.app')

@section('content')

<div class="container my-5">
    <div class="row" >
        @foreach($familias as $f)
        <div class="col-md-3">
            <a href="{{ route('listar.page', $f->id) }}">
                <div class="card">
                    <div class="view overlay">
                        <img src="{{ asset('images/categoria/'. $f->file_image) }}" class="img-fluid " alt="smaple image">
                        <div class="mask flex-center rgba-black-strong">
                            <p class="white-text">+</p>
                        </div>
                    </div>
                </div>
                <p class="text-center">{{ $f->nombre }}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
