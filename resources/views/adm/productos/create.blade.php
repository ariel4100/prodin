

@extends('adm.layouts.app')

@section('style')
    <style>
        input[type=search]:not(.browser-default){
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #9e9e9e;
            border-radius: 0;
            outline: none;
            height: 2.2rem;
            width: 100%;
            font-size: 16px;
            margin: 0 0 0px 0;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-transition: border .3s, -webkit-box-shadow .3s;
            transition: border .3s, -webkit-box-shadow .3s;
            transition: box-shadow .3s, border .3s;
            transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;
        }

        .select2-container .select2-search--inline .select2-search__field {
            box-sizing: border-box;
            border: none;
            font-size: 100%;
            margin-top: 0px;
            padding: 0;
        }
    </style>
@stop
@section('content')
    <div class="container" id="container-fluid" style="margin-bottom: 5%">
        <div class="row">
            <div class="col s12">
                <nav>
                    <div class="nav-wrapper grey">
                        <div class="col s12">
                            <a href="{{ route('home') }}" class="breadcrumb">Home</a>
                            <a href="{{ route('productos.index') }}" class="breadcrumb">Productos</a>
                            <a href="#" class="breadcrumb">Crear</a>
                        </div>
                    </div>
                </nav>
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

                                    <span class="helper-text" data-error="wrong" data-success="right">Subir PDF</span>

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
                            <div class="col s12">
                                <h6 for="textarea1">Descripcion</h6>
                            </div>
                            <div class="input-field col s12">
                                <textarea  name="descripcion" class="validate">  </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <h6 for="textarea1">Caracteriticas</h6>
                            </div>
                            <div class="input-field col s12">
                                <textarea  name="caracteristicas" class="validate">  </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <h6 for="textarea1">Especificaciones</h6>
                            </div>
                            <div class="input-field col s12">
                                <textarea  name="especificaciones" class="validate">  </textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <select class="materialSelect" id="select-category" name="categoria_id" >
                                    <option  value="0" disable="true" selected="true">Seleccionar familia</option>
                                    @foreach ($familias as $f )
                                        <option value="{{ $f->id }}" >{{ ucwords($f->nombre) }} </option>
                                    @endforeach
                                </select>
                                <label for="icon_prefix">Familia</label>
                            </div>

                            <div class=" col s6">
                                <label>Productos Relacionados</label>
                                <select class="js-example-basic-multiple browser-default" id="sepro" name="relacionados[]" multiple="multiple">

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
                            <div class="input-field col s6">

                                    <label>
                                        <input type="checkbox" name="destacado" />
                                        <span>Destacado(Home)?</span>
                                    </label>

                            </div>
                        </div>
                        <div class="right">

                            <a href="{{ route('productos.index') }}" class="waves-effect waves-light btn btn-color">Cancelar</a>

                            <button class="btn waves-effect waves-light btn-color" type="submit" name="action">Cargar

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

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: 'Seleccionar producto',
                maximumSelectionLength: 3,
                language: "es"
            });

        });
        $(function () {
            $('#select-category').change(function (event) {
                var category_id = $(this).val();


                $.get('{{ url('/') }}/api/categoria/'+category_id+'/productos', function (data) {
                    //console.log(data);
                    $('#sepro').empty();
                    //$('#sepro').append('<option value="0" disable="true" selected="true">Seleccionar producto</option>');
                    for (i=0; i<data.length; i++){
                        //var html_select = '<option value="">Seleccione producto</option>';
                        $('#sepro').append('<option value="'+ data[i].id +'">'+ data[i].nombre +'</option>');
                    }

                });
            });

        });


        CKEDITOR.replace('descripcion');

        CKEDITOR.config.height = '150px';

        CKEDITOR.config.width = '100%';

        CKEDITOR.replace('especificaciones');

        CKEDITOR.config.height = '150px';

        CKEDITOR.config.width = '100%';

        CKEDITOR.replace('caracteristicas');

        CKEDITOR.config.height = '150px';

        CKEDITOR.config.width = '100%';
    </script>
@stop