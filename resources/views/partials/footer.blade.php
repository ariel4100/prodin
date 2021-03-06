<footer class="page-footer" style="background-color: #063B6B; font-size: 16px">
    <div class="container">
        <div class="row" style="margin-bottom: 10px;">
            <div class="col l4 m12 s12 footer-logo">
                <img src="{{ asset('images/logo.png') }}" class="responsive-img" alt="">
            </div>
            <div class="col l4 m12 s12  ">
                <div class=" " >
                    <div class="row  " style="margin-bottom: 10px;">
                        <h5 class="" style="color: #2CC5ED">Mapa de Sitio</h5>
                    </div>
                    <div class="row  " style="margin-bottom: 0px; ">
                        <div class="col s6">
                            <a href="{{ url('/') }}" style="color: white; padding-top: 5px">Home</a>
                        </div>
                        <div class="col s6">
                            <a href="{{ route('presupuesto.page') }}" style="color: white">Solicitud de Presupuesto</a>
                        </div>
                    </div>
                    <div class="row  " style="margin-bottom: 5px;">
                        <div class="col s6">
                            <a href="{{ route('empresa.page') }}" style="color: white">Empresa</a>
                        </div>

                    </div>
                    <div class="row  " style="margin-bottom: 5px;">
                        <div class="col s6">
                            <a href="{{ route('productos.page') }}" style="color: white">Productos</a>
                        </div>
                        <div class="col s6">
                            <a href="{{ route('contacto.index') }}" style="color: white">Contacto</a>
                        </div>
                    </div>
                    <div class="row  " style="margin-bottom: 5px;">
                        <div class="col s6">
                            <a href="{{ route('servicios.page') }}" style="color: white">Servicios</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l4 m12 s12  ">
                <h5 class="" style="color: #2CC5ED; margin-bottom: 15px; ">Prodin Automacion</h5>
                <div class="row mb10">
                    <div class="col l1 s12">
                        <i class="material-icons  " style="color: #2CC5ED">
                            location_on
                        </i>
                    </div>
                    <div class="col l11  s12">

                        <a href=" " style="color: white">Liniers 2139 - Lanús Oeste
                            Prov. Buenos Aires</a>
                    </div>
                </div>
                <div class="row mb10">
                    <div class="col l1  s12">
                        <i class="material-icons  " style="color: #2CC5ED">
                            phone_in_talk
                        </i>
                    </div>
                    <div class="col l11 s12">
                        <a href="{{ route('servicios.page') }}" style="color: white">011 2062 - 1307
                            15 6528 - 0542</a>
                    </div>
                </div>
                <div class="row mb10">
                    <div class="col l1  s12">
                        <i class="material-icons  " style="color: #2CC5ED">
                            mail_outline
                        </i>
                    </div>
                    <div class="col l11 s12">
                        <a href="{{ route('servicios.page') }}" style="color: white">prodin@prodinautomacion.com.ar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="divider"  ></div>
    </div>
    <div class="footer-copyright" style="font-size: 12px !important;">
        <div class="container">
            © 2019
            <a class="grey-text text-lighten-4 right" href="">BY OSOLE</a>
        </div>
    </div>
</footer>