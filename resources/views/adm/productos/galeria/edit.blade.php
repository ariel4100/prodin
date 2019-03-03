@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('home') }}" class="breadcrumb">Home</a>
                        <a href="{{ route('productos.index') }}" class="breadcrumb">Productos</a>
                        <a href="{{action('GaleriaController@index', $producto->id)}}" class="breadcrumb">Galeria</a>
                        <a href="#!" class="breadcrumb">Editar</a>
                    </div>
                </div>
            </nav>

            <form method="POST"  enctype="multipart/form-data" action="{{ route('galeria.update',$galeria->id) }}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                {{ csrf_field() }}
                @method('PUT')
                <div class="row">
                    <h5>Editar Galeria del producto: {!! $producto->nombre !!}</h5>
                    <div class="divider"></div>
                    <div class="file-field input-field">
                        <h6>Editar imagen</h6>
                        <div class="btn">
                            <span>Imágenes</span>
                            <input type="file" multiple name="file_image">
                            <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 400x400 </span>
                        </div>
                        <label for=""></label>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" value="{{ $galeria->file_image }}">
                        </div>
                    </div>
                    <input type="hidden" name="producto_id" value="{{$producto->id}}">
                    <div class="right">
                        <a href="{{action('GaleriaController@index', $producto->id)}}" class="waves-effect waves-light btn">Cancelar</a>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
