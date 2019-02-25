<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #094984">
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('empresa.page') }}">EMPRESA
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('productos.page') }}">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios.page') }}">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SOLICITUD DE PRESUPUESTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACTO</a>
                </li>

            </ul>

        </div>
        <!-- Collapsible content -->
    </div>
</nav>
<!--/.Navbar-->