@extends('adm.layouts.app')

@section('content')
	<div class="container" id="container-fluid">
		<div class="row">
			<div class="col s12">
				@include('adm.partials.alert')
				<nav>
					<div class="nav-wrapper grey">
						<div class="col s12">
							<a href="{{ route('home') }}" class="breadcrumb">Home</a>
							<a href="#!" class="breadcrumb">Condiciones</a>
						</div>
					</div>
				</nav>

				<div class="divider"></div>

				<form method="POST"  enctype="multipart/form-data" action="{{action('CondicionController@update', $condicion->id)}}" class="col s12 m8 offset-m2 xl10 offset-xl1">
					{{ csrf_field() }}
					{{ method_field('PUT')}}

					<div class="row">

						<div class="row">

							<div class="col s12">
								<h5>Terminos y Condiciones</h5>
							</div>
							<div class="input-field col s12">
								<textarea id="descripcion" name="descripcion"> {{ $condicion->descripcion }} </textarea>
							</div>

						</div>
						<div class="right">
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
		CKEDITOR.replace('descripcion');

		CKEDITOR.config.height = '150px';

		CKEDITOR.config.width = '100%';


	</script>
@stop