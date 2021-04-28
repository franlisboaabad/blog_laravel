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

    <nav class="navbar navbar-expand-lg navbar-light bg-default">

        <div class="container">


            <a class="navbar-brand" href="/">
                <img src="{{ asset('blog/img/ostconsultores.jpg') }}" alt="" class="img-fluid" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="{{ route('servicios') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SERVICIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('implementacion') }}">IMPLEMENTACIÓN DE <br>SISTEMA DE GESTIÓN</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('auditoria') }}">AUDITORIA INTERNA</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('capacitacion') }}">CAPACITACIÓN</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('cumplimiento') }}">FUNCIÓN DE CUMPLIMIENTO</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="{{ route('normas') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NORMAS</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('responsabilidad_social') }}">ISO 26000:2010
                                <br>RESPONSABILIDAD SOCIAL</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('sistema_gestion') }}">ISO 27001:2018<br>SISTEMA
                                DE GESTIÓN DE <br>SEGURIDAD DE LA INFORMACIÓN</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('sistema_alimentaria') }}">ISO
                                22000:2018<br>SISTEMA DE GESTIÓN DE <br>INOCUIDAD ALIMENTARIA</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('sistema_ambiental') }}">ISO
                                14001:2015<br>SISTEMA DE GESTIÓN <br>MEDIO AMBIENTAL</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('sistema_calidad') }}">ISO 9001:2015<br>SISTEMA
                                DE GESTIÓN <br> DE CALIDAD</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('sistema_antisoborno') }}">ISO
                                37001:2016<br>SISTEMA DE GESTIÓN <br>ANTISOBORNO</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('sistema_trabajo') }}">ISO 45001:2018<br>SISTEMA
                                DE SEGURIDAD Y <br>SALUD EN EL TRABAJO</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('sistema_vial') }}">ISO 39001:2018<br>SISTEMA DE
                                GESTIÓN DE<br> LA SEGURIDAD VIAL</a>
                            <hr>
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

    <header class="bg-slider">

        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('blog/img/sliders/slider.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ISO 9001:2015</h5>
                        <p>SISTEMA DE GESTIÓN DE CALIDAD</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('blog/img/sliders/slider2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ISO 27001:2018</h5>
                        <p>SISTEMA DE GESTIÓN DE SEGURIDAD DE LA INFORMACIÓN</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('blog/img/sliders/slider3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ISO 26000:2010</h5>
                        <p>RESPONSABILIDAD SOCIAL</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('blog/img/sliders/slider1.jpg') }}" class="d-block w-100" alt="slider ostconsultores">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('blog/img/sliders/slider2.jpg') }}" class="d-block w-100" alt="slider ostconsultores">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('blog/img/sliders/slider3.jpg') }}" class="d-block w-100" alt="slider ostconsultores">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div> --}}
    </header>


    {{-- <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <h1 class="mb-5">OST CONSULTORES</h1>
                    <h3>"SOMOS LA CONSULTORA MÁS ÁGIL Y CON RESULTADOS COMPROBADOS"</h3>
                </div>
            </div>
        </div>
    </header> --}}

    @yield('contenido')






    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">¿Preparado para comenzar?
                        <br> <a href="{{ route('contacto') }}" style="color:white; style:none">¡Regístrate ahora! </a> </h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->

    <section class="top-footer">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-6 mb-3 text-center">
                    <img src="{{ asset('blog/img/logo-ostconsultores.png') }}" alt="ost consultores" class="img-fluid" width="400">
                    <div class="informacion mt-3">
                        <p>
                            <i class="fa fa-map-marker text-primary"> </i> Calle los Ebanos z-14, Miraflores-Castilla, Piura <br>
                            <i class="fa fa-envelope text-primary"></i> Email ostconsultores@gmail.com <br>
                            <i class="fa fa-phone text-primary"></i> Celular +51 920852185
                        </p>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.465357665721!2d-80.62050128523569!3d-5.189287596234519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMTEnMjEuNCJTIDgwwrAzNycwNS45Ilc!5e0!3m2!1ses!2spe!4v1619494208506!5m2!1ses!2spe" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>
        </div>
    </section>


    <footer class="footer" style="background-color: #006fb1 !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 h-100 text-center text-lg-left my-auto text-white">
                    <p class="mb-4 mb-lg-0"> OST CONSULTORES &copy; 2021 Todos los derechos reservados - Desarrollado por <a href="https://ideassoftperu.com" style="color:white">IDEASSOFT PERÚ</a> </p>
                </div>

                <div class="col-lg-4 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="https://www.facebook.com/ostconsultores" target="_blank">
                                <i class="text-white fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/ostconsultores/" target="_blank">
                                <i class="text-white fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>

                        <li class="list-inline-item mr-3">
                            <a href="https://twitter.com/ost_consultores" target="_blank">
                                <i class="text-white fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>

                        <li class="list-inline-item mr-3">
                            <a href="mailto:ostconsultores@gmail.com" target="_blank">
                                <i class="text-white fa fa-envelope-open fa-2x fa-fw"></i>
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
