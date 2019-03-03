@extends('layouts.app')

@section('style')
	<style>
		.collapsible {
			border: none;
			box-shadow: none;
		}
		.collapsible-header {
			padding: unset;
			background-color: #fff;
			border-bottom: 1px solid #ddd;
		}
		.collapsible-body {
			padding: 0px !important;
		}
		a{
			color: #747484;
		}

		.hover {
			background-color: rgba(0,0,0,0.7);
		}
	</style>
@stop
@section('content')
	<div class="container" style=" ">
		<div class="row">
			<div class="breadcrumb-productos" style="padding: 3%">
				  <a href="{{ route('listar.page', $familia->id) }}">{{$familia->nombre}}</a> |
			</div>
			<div class="col l3 m12 s12">
				<ul class="collapsible" style="font-family: quicksand">
					@foreach($familias as $f)
						<li @if($f->id == $familia->id)  style="color: #2DC5EE;" @endif>
							<div class="collapsible-header"
								 style="display:flex; justify-content:space-between; align-items:center; padding:8px">
								<a href="{{ route('listar.page', $f->id) }}" @if($f->id == $familia->id) style="color: #2DC5EE;" @endif  class="gra ysillo">
									{{ $f->nombre }}
								</a>
								<i class="material-icons">keyboard_arrow_right</i>
							</div>
							<div class="collapsible-body"  >
								@foreach($f->productos as $p)
									<ul class="collapsible" style="font-family: quicksand">
										<li class="active">
											<div class="collapsible-header" style="    border-bottom: unset;">
												<a href="{{ route('show.page', $p->id) }}" class="graysillo"

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
				<div class="row center">
				@foreach($productos as $p)
						<a class="product-item col s12 l4 m6 " style="margin-bottom: 5%" href="{{ route('show.page', $p->id) }}">
							<div class="product-image">
								<img src="{{ asset('images/productos/'. $p->file_image) }}" class="responsive-img">
								<div class="product-overlay">
									<div class="icon">
										<i class="material-icons">add</i>
									</div>
								</div>
							</div>
							<div style="color: #084884;  margin-top: 5%">
								{{ $p->nombre  }}
							</div>
						</a>
				@endforeach
				</div>
			</div>
		</div>
	</div>
@stop