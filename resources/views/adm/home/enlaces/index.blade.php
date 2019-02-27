@extends('adm.layouts.app')

@section('content')
<div class="container" id="container-fluid">
    <div class="row">
        <div class="col s12">
            <h5>Marcas</h5>
            <div class="divider"></div>
            <table class="index-table responsive-table ">
                <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Orden</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($enlaces as $m)

                    <tr>
                        <td style="width: 350px"><img src="{{ asset('images/enlaces/'.$m->file_image) }}"></td>
                        <td>{!! $m->nombre !!}</td>
                        <td>{{ $m->orden }}</td>
                        <td>
                            <a href=" {{ route('enlace.edit', $m->id)}} " class="btn-floating btn-large waves-effect waves-light orange"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No existen registros</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
