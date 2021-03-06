@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <nav>
                <div class="nav-wrapper grey">
                    <div class="col s12">
                        <a href="{{ route('home') }}" class="breadcrumb">Home</a>
                        <a href="{{ action('CategoriaDestacadoController@index') }}" class="breadcrumb">Categorias Destacados</a>
                        <a href="#!" class="breadcrumb">Editar</a>
                    </div>
                </div>
            </nav>
            <div class="divider"></div>
            <form method="POST"  enctype="multipart/form-data" action="{{route('destacado.categoria.update', $destacado->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                {{ csrf_field() }}
                {{ method_field('PUT')}}

                <div class="row">
                    <h5>Editar</h5>
                    <div class="divider"></div>

                    <div class="input-field col s10">
                        <select name="categoria_id">
                            @foreach ($destacados as $d )
                                <option value="{{ $d->id }}" data-icon="{{ asset('images/categoria/'.$d->file_image) }}" class="left" @if($d->id == $destacado->categoria_id) selected @endif >{{ ucwords($d->nombre) }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-field col s2">
                        <i class="material-icons prefix">keyboard_arrow_right</i>
                        <input id="icon_prefix" type="text" class="validate" name="orden"  value="{{$destacado->orden}}" >
                        <label for="icon_prefix">Orden</label>
                    </div>
                </div>
                <div class="row">
                    <div class="right">
                        <a href="{{ action('CategoriaDestacadoController@index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>
                        <button class="btn waves-effect waves-light btn-color" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('titulo1');

        CKEDITOR.config.height = '150px';

        CKEDITOR.config.width = '100%';


    </script>
@stop