<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>OST CONSULTORES @yield('title',' - Ayudamos a sacar tu certificado en tiempo record.')</title>
    <link rel=icon href={{ asset('blog/img/ostconsultores.jpg') }}>
    <link rel="apple-touch-icon" href="{{ asset('blog/img/ostconsultores.jpg') }}">

    <meta name="author" content="IDEASSOFT PERÚ">
    <meta name="keywords" content="OST CONSULTORES, Implementación de Sistema Integrado de Gestión, consultoría, capacitación de normas ISO. Juntos obtendremos ese certificado ISO." />
    <meta name="description" content="OST CONSULTORES - Implementación de Sistema Integrado de Gestión, consultoría, capacitación de normas ISO. Juntos obtendremos ese certificado ISO." />

    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="OST CONSULTORES" />
    <meta property="og:url" content="https://ostconsultores.com" />
    <meta property="og:description" content="OST CONSULTORES - Ayudamos a sacar tu certificado en tiempo record." />
    <meta property="og:image" content="{{ asset('blog/img/ostconsultores.jpg') }}" />


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('blog/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('blog/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    

    <!-- Custom styles for this template -->
    <link href="{{ asset('blog/css/landing-page.css') }}" rel="stylesheet">

    {{-- style propio --}}
    <link href="{{ asset('blog/css/app.css') }}" rel="stylesheet">


    <meta name="google-site-verification" content="l5xdrtLt1NrlKp291xavO8TeM-iL7UXvykGQ2640zI4" />

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <div class="container">


            <a class="navbar-brand" href="/">
                <img src="{{ asset('blog/img/ostconsultores.jpg') }}" alt="" class="img-fluid" width="70px"> 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/"> INICIO <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('nosotros') }}"> NOSOTROS </a>
                    </li>
                    
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="{{ route('servicios') }}" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('implementacion') }}">Implementación de <br>sistemas de gestión</a>
                            <a class="dropdown-item" href="{{ route('auditoria') }}">Auditoria interna</a>
                            <a class="dropdown-item" href="{{ route('capacitacion') }}">Capacitación</a>
                            <a class="dropdown-item" href="{{ route('cumplimiento') }}">Función de cumplimiento</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="{{ route('normas') }}" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NORMAS</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('responsabilidad_social') }}">ISO 26000:2010
                                <br>RESPONSABILIDAD SOCIAL</a> <hr>
                            <a class="dropdown-item" href="{{ route('sistema_gestion') }}">ISO 27001:2018<br>SISTEMA
                                DE GESTIÓN DE <br>SEGURIDAD DE LA INFORMACIÓN</a> <hr>
                            <a class="dropdown-item" href="{{ route('sistema_alimentaria') }}">ISO
                                22000:2018<br>SISTEMA DE GESTIÓN DE <br>INOCUIDAD ALIMENTARIA</a> <hr>
                            <a class="dropdown-item" href="{{ route('sistema_ambiental') }}">ISO
                                14001:2015<br>SISTEMA DE GESTIÓN <br>MEDIO AMBIENTAL</a> <hr>
                            <a class="dropdown-item" href="{{ route('sistema_calidad') }}">ISO 9001:2015<br>SISTEMA
                                DE GESTIÓN <br> DE CALIDAD</a> <hr>
                            <a class="dropdown-item" href="{{ route('sistema_antisoborno') }}">ISO
                                37001:2016<br>SISTEMA DE GESTIÓN <br>ANTISOBORNO</a> <hr>
                            <a class="dropdown-item" href="{{ route('sistema_trabajo') }}">ISO 45001:2018<br>SISTEMA
                                DE SEGURIDAD Y <br>SALUD EN EL TRABAJO</a> <hr>
                            <a class="dropdown-item" href="{{ route('sistema_vial') }}">ISO 39001:2018<br>SISTEMA DE
                                GESTIÓN DE<br> LA SEGURIDAD VIAL</a> <hr>
                            <a class="dropdown-item" href="{{ route('sistema_energetica') }}">ISO
                                50001:2018<br>SISTEMA DE GESTIÓN <br>ENERGÉTICA</a> 
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('entradas') }}"> BLOG </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('contacto') }}">CONTACTO</a>
                    </li>
                </ul>

            </div>


        </div>

    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h1 class="mb-5">OST CONSULTORES</h1>
                    <h3>"SOMOS LA CONSULTORA MÁS ÁGIL Y CON RESULTADOS COMPROBADOS"</h3>
                </div>
            </div>
        </div>
    </header>

    @yield('contenido')



    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 h-100 text-center text-lg-left my-auto">
                    <p class="mb-4 mb-lg-0"> OST CONSULTORES &copy; 2021 Todos los derechos reservados - Desarrollado por  <a href="https://ideassoftperu.com">IDEASSOFTPERU</a> </p>
                </div>

                <div class="col-lg-4 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="https://www.facebook.com/ostconsultores" target="_blank">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/ostconsultores/" target="_blank">
                                <i class="fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>

                        <li class="list-inline-item mr-3">
                            <a href="https://twitter.com/ost_consultores" target="_blank">
                                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>

                        <li class="list-inline-item mr-3">
                            <a href="mailto:ostconsultores@gmail.com" target="_blank">
                                <i class="fa fa-envelope-open fa-2x fa-fw"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    {{-- WhatsApp --}}
    <div style="position: fixed; z-index: 900; bottom: 90px; right: 14px;">
        <div style="width: 70px; height: 70px; float: left; overflow: hidden;">
            <a href="https://wa.link/2098bh" target="_blank"> <img src="{{ asset('img/whatsapp-png.png') }}" class="img-fluid" style="height: 60px; width: 60px"></a>
        </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('blog/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('blog/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
