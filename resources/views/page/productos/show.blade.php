@extends('layouts.app')

@section('content')
	<div class="container" style="margin-top: 4rem">
		<div class="row">
			<div class="col s3">
				<ul class="list-group list-group-flush">
					@foreach($familias as $f)
						<li class="list-group-item">
							{{ $f->nombre }}<i class="fas fa-angle-right"></i>
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
									<a class="carousel-item" href="#one!"><img src="{{ asset('images/galeria_productos/'.$s->file_image) }}"></a>

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