@extends('layouts.app')



@section('style')
	<style>
		.collapsible {
			border: none;
			box-shadow: none;
		}

		.collapsible-body {
			padding: 0px !important;
		}
		a{
			color: #747484;
		}
		h1,h2,h3,h4,h5,h6{
			font-family: quicksand;
		}


		.slider .slides {
			background-color: #ffffff;
			height: 400px;
		}
		.slider .slides li .caption {
			background-color: rgba(0, 0, 0, 0.6);
			top: 26%;
			padding: 10px 50px;
		}
		.slider .indicators {
			bottom: 5%;
			z-index: 99999;
		}
		.slider .indicators .indicator-item {
			height: 10px;
			width: 10px;
			background-color: rgba(255,255,255,0.7);
		}
		.slider .indicators .indicator-item.active {
			background-color: rgba(255,255,255,1);
		}

		.slider-product-container {
			border: 1px solid #CCCCCC;

		}

		.slider-product, .slider-product .slides {
			height: 350px !important;
		}
		.slider-product .indicators .indicator-item {
			height: 10px;
			width: 10px;
			background-color: rgba(181,181,181,0.7);
		}
		.slider-product .indicators .indicator-item.active {
			background-color: rgba(181,181,181,1);
		}

	</style>

@stop
@section('content')
	<div class="container" >
		<div class="row">
			<div class="breadcrumb-productos" style="padding: 3%">
				  <a href="{{ route('listar.page', $producto->categoria_id) }}">{{$producto->categoria->nombre}}</a> | <a href="{{ route('show.page', $producto->id) }}">{{$producto->nombre}}</a>
			</div>
			<div class="col l3 m12 s12">
				<ul class="collapsible" style="font-family: quicksand">
					@foreach($familias as $f)
						<li @if($f->id == $producto->categoria_id) class="active"  style="color: #2DC5EE;" @endif>
							<div class="collapsible-header"
								 style="display:flex; justify-content:space-between; align-items:center; padding:8px">
								<a href="{{ route('listar.page', $f->id) }}" @if($f->id == $producto->categoria_id) style="color: #2DC5EE;" @endif class="graysillo">
									{{ $f->nombre }}
								</a>
								<i class="material-icons">keyboard_arrow_right</i>
							</div>
							<div class="collapsible-body" style="font-size: 16px !important;" >
								@foreach($f->productos as $p)
									<ul class="collapsible"  style="font-family: quicksand">
										<li class="active">
											<div class="collapsible-header" style="     padding: unset;   border-bottom: unset;">
												<a href="{{ route('show.page', $p->id) }}" class="graysillo"
												   @isset($producto) @if($p->id == $producto->id) style="color: #2DC5EE; font-size: 16 !important;" @endif @endisset
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
			<div class="col l9 m12 s12">
				<div class="row">
					<div class="col l6 m12 s12">
						<div class="slider-product-container">
							<div class="slider slider-product" style="height: 350px!important;">
								<ul class="slides" style="height: 400px!important;">
									<li>
										<img src="{{ asset('images/productos/'.$producto->file_image) }}">
									</li>
									@if($producto->galerias->count() > 0)
										@foreach($producto->galerias as $s)
											<li>
												<img src="{{ asset('images/productos/galeria/'.$s->file_image) }}">
											</li>
										@endforeach
									@endif
								</ul>
							</div>
						</div>
					</div>
					<div class="col l6 m12 s12">
						<h5 style="margin: 0px; color: #2DC5EE; font-family: quicksand; font-size: 25px;">{{ $producto->nombre }}</h5>
						<p>
							{!! $producto->descripcion !!}
						</p>

						@if($producto->file_ficha != null)
							<div class="col s12 m6" >
								<a href="{{route('producto-down', $producto->file_ficha)}}" target="_blank"  class="waves-effect waves-light btn z-depth-0" id="estandar-btn" style="background: #094984 !important; border-radius: 0 !important">FICHA TECNICA</a>
							</div>
						@endif
						@if($producto->link_mercadolibre != null)
							<div class="col s12 m6" >
								<a href="{{ $producto->link_mercadolibre }}" target="_blank"  class="waves-effect waves-light btn z-depth-0" id="estandar-btn" style="background: #FFE600;  border-radius: 0 !important"><img src="{{ asset('images/varios/mercadolibre_btn.png') }}" class="resp onsive-img"></a>
							</div>
						@endif
					</div>
				</div>
				<div class="row">
					<div class="col l6 m12 s12">
						{!! $producto->caracteristicas !!}
					</div>
					<div class="col l6 m12 s12">

						@if($producto->file_plano != null)
							<div class="col s12 m12 l9">
								<div class="row">
									<p id="productos-show-familia" style="color: #094984 !important;"> Detalles</p>
								</div>
								<img src="{{ asset('images/productos/plano/'. $producto->file_plano) }}"   class="re sponsive-img" alt="">
							</div>
						@endif
					</div>
				</div>
				<div class="row">
					<div class="col l12 m12 s12">
						{!! $producto->especificaciones !!}
					</div>
				</div>
				@if(count($relacionados) > 0)
					<h5 style="color: #2DC5EE; font-family: quicksand; margin-bottom: 3%">Productos Relacionados</h5>
					<div class="row center">
						@foreach($relacionados as $r)
						<a class="product-item col s12 l4 m6 " style="margin-bottom: 5%" href="{{ route('show.page', $r->producto_id) }}">
							<div class="product-image">
								<img src="{{ asset('images/productos/'. $r->file_image) }}" class="responsive-img">
								<div class="product-overlay">
									<div class="icon">
										<i class="material-icons">add</i>
									</div>
								</div>
							</div>
							<div style="color: #084884;  margin-top: 5%">
								{{ $r->nombre  }}
							</div>
						</a>

						@endforeach
				</div>
				@endif
			</div>
		</div>
	</div>
@stop

@section('script')
	<script>
		$(document).ready(function(){
			$('.slider').slider();
		});
	</script>
@endsection