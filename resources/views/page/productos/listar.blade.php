@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group list-group-flush">
					@foreach($familias as $f)
					<li class="list-group-item">{{ $f->nombre }}</li>
					@endforeach
				</ul>
				<!--Accordion wrapper-->
				<div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

					<!-- Accordion card -->
					<div class="card">

						<!-- Card header -->
						<div class="card-header" role="tab" id="headingTwo1">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1"
							   aria-expanded="false" aria-controls="collapseTwo1">
								<h5 class="mb-0">
									Collapsible Group Item #1 <i class="fas fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>

						<!-- Card body -->
						<div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordionEx1">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf
								moon
								officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
								Brunch
								3
								wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
								shoreditch
								et.
								Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
								Ad
								vegan
								excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt
								you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>

					</div>
					<!-- Accordion card -->

					<!-- Accordion card -->
					<div class="card">

						<!-- Card header -->
						<div class="card-header" role="tab" id="headingTwo2">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
							   aria-expanded="false" aria-controls="collapseTwo21">
								<h5 class="mb-0">
									Collapsible Group Item #2 <i class="fas fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>

						<!-- Card body -->
						<div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21" data-parent="#accordionEx1">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf
								moon
								officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
								Brunch
								3
								wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
								shoreditch
								et.
								Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
								Ad
								vegan
								excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt
								you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>

					</div>
					<!-- Accordion card -->

					<!-- Accordion card -->
					<div class="card">

						<!-- Card header -->
						<div class="card-header" role="tab" id="headingThree31">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseThree31"
							   aria-expanded="false" aria-controls="collapseThree31">
								<h5 class="mb-0">
									Collapsible Group Item #3 <i class="fas fa-angle-down rotate-icon"></i>
								</h5>
							</a>
						</div>

						<!-- Card body -->
						<div id="collapseThree31" class="collapse" role="tabpanel" aria-labelledby="headingThree31" data-parent="#accordionEx1">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf
								moon
								officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
								Brunch
								3
								wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
								shoreditch
								et.
								Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
								Ad
								vegan
								excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt
								you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>

					</div>
					<!-- Accordion card -->

				</div>
				<!-- Accordion wrapper -->
			</div>
			<div class="col-md-9">
				@foreach($productos as $p)
					<div class="row">
						<div class="col-md-4">
							<a href="{{ route('show.page', $p->id) }}">
								<div class="card">
									<div class="view overlay">
										<img src="{{ asset('images/productos/'. $p->file_image) }}" class="img-fluid " alt="smaple image">
										<div class="mask flex-center rgba-red-strong">
											<p class="white-text">Strong overlay</p>
										</div>
									</div>
								</div>
								<p class="text-center">{{ $p->nombre }}</p>
							</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@stop