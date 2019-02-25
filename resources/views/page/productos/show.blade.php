@extends('layouts.app')

@section('content')
	<div class="container my-5">
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group list-group-flush">
					@foreach($familias as $f)
						<li class="list-group-item">
							{{ $f->nombre }}<i class="fas fa-angle-right"></i>
						</li>
					@endforeach
				</ul>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-6">
						<!--Carousel Wrapper-->
						<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
							<!--Indicators-->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-1z" data-slide-to="1"></li>
								<li data-target="#carousel-example-1z" data-slide-to="2"></li>
							</ol>
							<!--/.Indicators-->
							<!--Slides-->

							<div class="carousel-inner" role="listbox">
								<!--First slide-->
								<div class="carousel-item active">
									<img class="d-block w-100" src="{{ asset('images/productos/'.$producto->file_image) }}" alt="First slide">
								</div>
								<!--/First slide-->

								@if($producto->galerias->count() > 0)
									@foreach($producto->galerias as $s)
										<li>
											<img src="{{ asset('images/galeria_productos/'.$s->file_image) }}" alt="">
										</li>
									@endforeach
								@endif
							</div>
							<!--/.Slides-->
							<!--Controls-->
							<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							<!--/.Controls-->
						</div>


					</div>
					<div class="col-md-6">
						<h2>{{ $producto->nombre }}</h2>
						<p>
							{{ $producto->descripcion }}
						</p>
						<a href="" class="btn" style="background-color: #094984;">FICHA TECNICA</a>
						<a href="" class="btn btn-warning">mercado libre</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop