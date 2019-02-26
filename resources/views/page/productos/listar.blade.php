@extends('layouts.app')

@section('content')
	<div class="container" style="margin-top: 4rem">
		<div class="row">
			<div class="col s3">
				<ul class="collection with-header">
					@foreach($familias as $f)
						<li class="collection-item"><div>{{ $f->nombre }}<a href="#!" class="secondary-content"><i class="material-icons">chevron_right</i></a></div></li>
					@endforeach
				</ul>

			</div>
			<div class="col s9">
				@foreach($productos as $p)
					<div class="row">
						<div class="col s4">
							<a href="{{ route('show.page', $p->id) }}">
								<div class="">
									<img src= "{{ asset('images/productos/'. $p->file_image) }}" class="responsive-img"   alt="smaple image">
								</div>
								<p class=" center">{{ $p->nombre }}</p>
							</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@stop