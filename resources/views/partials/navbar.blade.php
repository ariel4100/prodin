
<nav>
    <div class="nav-wrapper" id="seccion-active">
        <a href="/" class="brand-logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>
        <div class="container">
            <ul class="right  hide-on-med-and-down" style="margin: -60px;  height: 10px;">
                <li><p  >45687979</p></li>
                <li><p>ariel@gmail.com</p></li>
                <li><p>ariel@gmail.com</p></li>
            </ul>
        </div>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class=" " style="width: 95%">
            <ul class="right hide-on-med-and-down">
                <li><a href="{{ route('empresa.page') }}">EMPRESA</a></li>
                <li><a href="{{ route('productos.page') }}">PRODUCTOS</a></li>
                <li><a href="{{ route('servicios.page') }}">SERVICIOS</a></li>
                <li><a href="{{ route('empresa.page') }}">SOLICITUD DE PRESUPUESTO</a></li>
                <li><a href="{{ route('empresa.page') }}">CONTACTO</a></li>
                <li><a href="{{ route('empresa.page') }}"><i class="material-icons">search</i></a></li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
</ul>
