
<nav>
    <div class="nav-wrapper" id="seccion-active">
        <a href="/" class="brand-logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>
        <div class="container">
            <ul class="right  hide-on-med-and-down" style="margin: -60px;  height: 10px;">
                <li><p>15 6528 - 0542</p></li>
                <li><p>011 2062 - 1307</p></li>
                <li><p>prodin@prodinautamocion.com.ar</p></li>
            </ul>
        </div>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class=" " style="width: 95%">
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('empresa.page') }}" class="seccion-active">EMPRESA</a></li>
                <li><a href="{{ route('productos.page') }}">PRODUCTOS</a></li>
                <li><a href="{{ route('servicios.page') }}">SERVICIOS</a></li>
                <li><a href="{{ route('presupuesto.page') }}">SOLICITUD DE PRESUPUESTO</a></li>
                <li><a href="{{ route('contacto.index') }}">CONTACTO</a></li>
                <li>
                    <a class="btn-floating btn-large waves-effect waves-light" style="background-color: #2DC5EE;width: 35px;height: 35px;">
                        <i style="line-height:37px;" class="material-icons">search</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('empresa.page') }}">EMPRESA</a></li>
    <li><a href="{{ route('productos.page') }}">PRODUCTOS</a></li>
    <li><a href="{{ route('servicios.page') }}">SERVICIOS</a></li>
    <li><a href="{{ route('presupuesto.page') }}">SOLICITUD DE PRESUPUESTO</a></li>
    <li><a href="{{ route('contacto.index') }}">CONTACTO</a></li>
</ul>
