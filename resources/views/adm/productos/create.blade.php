

@extends('adm.layouts.app')

@section('content')
    <div class="container" id="container-fluid">
        <div class="row">
            <div class="col s12">

                <form method="POST"  enctype="multipart/form-data" action="{{ route('productos.store') }}" class="col s12 m8 offset-m2 xl10 offset-xl1">
                    @csrf
                    @method('POST')
                    <div class="row">

                        <h5>Crear</h5>

                        <div class="divider"></div>

                        <div class="row">

                            <div class="file-field input-field s6">

                                <div class="btn">

                                    <span>Imagen</span>

                                    <input type="file" name="file_image">

                                </div>

                                <div class="file-path-wrapper">

                                    <input class="file-path validate" type="text">

                                    <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 1400x334</span>

                                </div>

                            </div>

                        </div>
                        <div class="row">

                            <div class="file-field input-field s6">

                                <div class="btn">

                                    <span>Dibujo tecnico</span>

                                    <input type="file" name="file_plano">

                                </div>

                                <div class="file-path-wrapper">

                                    <input class="file-path validate" type="text">

                                    <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 1400x334</span>

                                </div>

                            </div>

                        </div>
                        <div class="row">

                            <div class="file-field input-field s6">

                                <div class="btn">

                                    <span>Ficha</span>

                                    <input type="file" name="file_ficha">

                                </div>

                                <div class="file-path-wrapper">

                                    <input class="file-path validate" type="text">

                                    <span class="helper-text" data-error="wrong" data-success="right">Tamaño recomendado: 1400x334</span>

                                </div>

                            </div>

                        </div>
                        <div class="row">

                            <div class="input-field col s12">

                                <i class="material-icons prefix">keyboard_arrow_right</i>

                                <input id="icon_prefix" type="text" class="validate" name="nombre" >

                                <label for="icon_prefix">Nombre</label>

                            </div>

                        </div>
                        <div class="row">

                            <div class="input-field col s12">

                                <i class="material-icons prefix">keyboard_arrow_right</i>

                                <input id="icon_prefix" type="text" class="validate" name="descripcion" >

                                <label for="icon_prefix">Descripcion</label>

                            </div>

                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <select class="materialSelect" id="familia" name="categoria_id">
                                    @foreach ($familias as $f )
                                        <option value="{{ $f->id }}" >{{ ucwords($f->nombre) }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="input-field col s6">

                                <i class="material-icons prefix">keyboard_arrow_right</i>

                                <input id="icon_prefix" type="text" class="validate" name="link_mercadolibre" >

                                <label for="icon_prefix">Link Mercadolibre</label>

                            </div>

                            <div class="input-field col s6">

                                <i class="material-icons prefix">keyboard_arrow_right</i>

                                <input id="icon_prefix" type="text" class="validate" name="orden" >

                                <label for="icon_prefix">Orden</label>

                            </div>
                        </div>
                        <div class="right">

                            <a href="{{ route('productos.index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>

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
