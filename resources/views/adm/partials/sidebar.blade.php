
	<ul id="slide-out" class="sidenav sidenav-fixed">
		<div class="logo-admin">
			<a href="{{ url('adm/home') }}">
				<img class="responsive-img" src='{{ asset("images/logos/") }}' alt="">
			</a>
		</div>

		<div class="divider"></div>

			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/home/*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="material-icons">home</i>Home</a>
						<div class="collapsible-body" {{ (\Request::is('adm/home/*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href=""><i class="material-icons">navigate_next</i>Información</a></li>
								<li><a href=""><i class="material-icons">navigate_next</i>Productos Destacados</a></li>
								<li><a href=""><i class="material-icons">navigate_next</i>Crear Sliders</a></li>
								<li><a href=""><i class="material-icons">navigate_next</i>Ver Sliders</a></li>
							</ul>							
						</div>
					</li>
				</ul>
			 	<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/productos*'))?"seccion-activa":"" }}" tabindex="0" ><i class="material-icons">shopping_cart</i>Productos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/productos*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href=" " ><i class="material-icons">navigate_next</i>Crear Producto</a></li>
								<li><a href=" " ><i class="material-icons">navigate_next</i>Ver Productos</a></li>
								<li><a href=" " ><i class="material-icons">navigate_next</i>Crear Familias</a></li>
								<li><a href=" " ><i class="material-icons">navigate_next</i>Ver Familias</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/ofertas*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="fas fa-percent"></i> Ofertas</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/ofertas*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href=" "><i class="material-icons">navigate_next</i>Crear Ofertas</a></li>
								<li><a href=" "><i class="material-icons">navigate_next</i>Ver Ofertas</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/servicios*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="fas fa-hand-holding-heart"></i> Servicios</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/servicios*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href="  "><i class="material-icons">navigate_next</i>Crear Servicios</a></li>
								<li><a href=" "><i class="material-icons">navigate_next</i>Ver Servicios</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/empresa*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="material-icons">business</i>Quiénes Somos</a>
						<div class="collapsible-body"  {{ (\Request::is('adm/empresa*'))?"style=display:block;":"" }}>
							<ul>
								<li><a href=" "><i class="material-icons">navigate_next</i>Datos de la Empresa</a></li>
								<li><a href=" "><i class="material-icons">navigate_next</i>Crear Sliders</a></li>
								<li><a href=" "><i class="material-icons">navigate_next</i>Ver Sliders</a></li>
							</ul>
						</div>
					</li>
				</ul>


					<ul class="collapsible collapsible-accordion">
						<li class="bold"><a class="collapsible-header waves-effect waves-grey {{ (\Request::is('adm/usuarios/*'))?"seccion-activa":"" }}" tabindex="0"  ><i class="material-icons">people</i>Usuarios</a>
							<div class="collapsible-body"  {{ (\Request::is('adm/usuarios/*'))?"style=display:block;":"" }}>
								<ul>
									<li><a href=" "><i class="material-icons">navigate_next</i>Crear Usuario</a></li>
									<li><a href=" "><i class="material-icons">navigate_next</i>Editar Usuarios</a></li>
								</ul>
							</div>
						</li>
					</ul>

			</li>
		</div>
	</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
