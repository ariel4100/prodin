@extends('layouts.app')



@section('style')
	<style>
		.collapsible {
			border: none;
			box-shadow: none;
		}
		.collapsible-header {
		}
		.collapsible-body {
			padding: 8px;
		}
		a{
			color: #747484;
		}
	</style>
@stop
@section('content')
	<div class="container" >
		<div class="row">
			<div class="breadcrumb-productos" style="padding: 3%">
				<a href="{{ action('SeccionProductoController@index') }}">Productos</a> | <a href="{{ route('listar.page', $familia->id) }}">{{$familia->nombre}}</a> | <a href="{{ route('show.page', $producto->id) }}">{{$producto->nombre}}</a>
			</div>
			<div class="col s3">
				<ul class="collapsible">
					@foreach($familias as $f)
						<li @if($f->id == $familia->id) class="active"  style="color: #2DC5EE;" @endif>
							<div class="collapsible-header"
								 style="display:flex; justify-content:space-between; align-items:center; padding:8px">
								<a href="{{ route('listar.page', $f->id) }}" @if($f->id == $familia->id) style="color: #2DC5EE;" @endif class="graysillo">
									{{ $f->nombre }}
								</a>
								<i class="material-icons">keyboard_arrow_right</i>
							</div>
							<div class="collapsible-body" style="padding:0">
								@foreach($f->productos as $p)
									<ul class="collapsible">
										<li class="active">
											<div class="collapsible-header">
												<a href="" class="graysillo"
												   @isset($familias) @if($f->id == $p->id) style="color: #2DC5EE;" @endif @endisset
												>{{$p->nombre }}</a>
											</div>
										</li>
									</ul>
								@endforeach
							</div>
						</li>
					@endforeach
				</ul>
			</div>
			<div class="col s9">
				<div class="row">
					<div class="col s6">

						<div class="carousel carousel-slider">
							<a class="carousel-item" href="#one!"><img src="{{ asset('images/productos/'.$producto->file_image) }}"></a>
							@if($producto->galerias->count() > 0)
								@foreach($producto->galerias as $s)
									<a class="carousel-item" href="#one!"><img src="{{ asset('images/productos/galeria/'.$s->file_image) }}"></a>
								@endforeach
							@endif
						</div>

					</div>
					<div class="col s6">
						<h5>{{ $producto->nombre }}</h5>
						<p>
							{!! $producto->descripcion !!}
						</p>
						<a href="" class="btn" style="background-color: #094984;">FICHA TECNICA</a>
						<a href="" class="btn btn-warning">mercado libre</a>
					</div>
				</div>
				<div class="row">
					<div class="col s6">
						{!! $producto->caracteristicas !!}
					</div>
					<div class="col s6">
						<img src="{{ asset('images/productos/plano/'. $producto->file_plano) }}" class="" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						{!! $producto->especificaciones !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop