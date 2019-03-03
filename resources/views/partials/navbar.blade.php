<nav>
    <div class="col s12" >
        <div class="col s3">
            <a href="{{ url('/') }}" class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </a>
        </div>
        <div class="col s9 right" style="    margin: 10px 85px 0px 0px;">
            <ul class="hide-on-med-and-down" style="display: flex; justify-content: right; align-items: center; height: 5px;">
                <a href="https://wa.me/541565280542" target="_blank"> <i class="fab fa-whatsapp fs14" style="font-size: 20px; color: #25d366; line-height: unset; padding-right: 5px"></i>15 6528 - 0542 </a>
                <a href="tel:+54 11 2062-1307"><i class="material-icons" style="font-size: 20px; float: left; color: #2DC5EE; line-height: unset; padding-right: 5px" >phone_in_talk</i>011 2062 - 1307</a>
                <a href="mailto:prodin@prodinautamocion.com.ar"><i class="material-icons" style="font-size: 20px; float: left;  line-height: unset; padding-right: 5px; color: #2DC5EE;">mail_outline</i>prodin@prodinautamocion.com.ar</a>
            </ul>
        </div>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="col s9" id="seccion-active" style="width: 95%; font-family: quicksand" >
            <ul class="right hide-on-med-and-down " style="    margin: 10px;">
                <li><a href="{{ route('empresa.page') }}" class="{{ request()->is('empresa') ? 'activea' : '' }}" >EMPRESA</a></li>
                <li><a href="{{ route('productos.page') }}" class="{{ request()->is('productos') ? 'activea' : '' }}" >PRODUCTOS</a></li>
                <li><a href="{{ route('servicios.page') }}" class="{{ request()->is('servicios') ? 'activea' : '' }}" >SERVICIOS</a></li>
                <li><a href="{{ route('presupuesto.page') }}" class="{{ request()->is('presupuesto') ? 'activea' : '' }}" >SOLICITUD DE PRESUPUESTO</a></li>
                <li><a href="{{ route('contacto.index') }}" class="{{ request()->is('contacto') ? 'activea' : '' }}" >CONTACTO</a></li>
                <li>
                    <a href="{{ url('/') }}" class="btn-floating btn-large waves-effect waves-light" style="background-color: #2DC5EE;width: 35px;height: 35px;">
                        <i style="line-height:37px;" class="material-icons">search</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('empresa.page') }}" class="{{ request()->is('empresa') ? 'activea' : '' }}" >EMPRESA</a></li>
    <li><a href="{{ route('productos.page') }}" class="{{ request()->is('productos') ? 'activea' : '' }}" >PRODUCTOS</a></li>
    <li><a href="{{ route('servicios.page') }}" class="{{ request()->is('servicios') ? 'activea' : '' }}" >SERVICIOS</a></li>
    <li><a href="{{ route('presupuesto.page') }}" class="{{ request()->is('presupuesto') ? 'activea' : '' }}" >SOLICITUD DE PRESUPUESTO</a></li>
    <li><a href="{{ route('contacto.index') }}" class="{{ request()->is('contacto') ? 'activea' : '' }}" >CONTACTO</a></li>
</ul>
