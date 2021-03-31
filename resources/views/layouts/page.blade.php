<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="IDEASSOFT PERÚ">
    <link rel="shortcut icon" type="image/ico" href="{{ asset('turismo/images/logo-nefasac.png') }}" />

    <meta property="og:url"           content="https://www.nefasasac.com/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="NEFASA SAC  - CONSULTORÍA, INGENIERÍA Y SUPERVISIÓN DE OBRAS" />
    <meta property="og:description"   content="NEFASA SAC  - CONSULTORÍA, INGENIERÍA Y SUPERVISIÓN DE OBRAS" />
    <meta property="og:image"         content="{{ asset('turismo/images/slider/ingeniero-01.jpg') }}" />

    <meta name="keywords" content="NEFASA SAC, es una empresa de Ingeniería de Consulta con presencia nacional e internacional, dedicada a prestar servicios integrales en Ingeniería y otros servicios: Estructuraciones, Estudios, Diseños, Supervisión, Gerencia de Proyectos y Asesorías. Generamos valor agregado en las soluciones que ofrecemos a nuestros clientes del sector público y privado, apoyados esencialmente con nuestro equipo humano multidisciplinario y altamente calificado, aplicando los más altos valores de rectitud, honestidad y Responsabilidad Social.">



    <!-- Page Title -->
    <title>NEFASAC - @yield('title')</title>

    <!-- Icon fonts -->
    <link href="{{ asset('turismo/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('turismo/css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header class="site-header header-style-2">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-5">
                            <div class="contact-info">
                                <ul>
                                    <li><i class="fa fa-envelope"></i> informes@nefasasac.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-sm-7">
                            <div class="social-contact-info-right">
                                <div class="social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/nefasa.sac" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                                <div class="contact-info-right">
                                    <ul>
                                        <li><span>PE:</span> +51 944 399 365</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{asset('turismo/images/logo-nefasac.png')}}" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="/">INICIO</a></li>

                            <li><a href="#!">NOSOTROS</a></li>
                            <li><a href="#!">SERVICIOS</a></li>
                            <li><a href="/#latam">PRESENCIA LATAM</a></li>
                            <li><a href="#!">PORTAFOLIO</a></li>
                            <li><a href="#!">CONTACTO</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->

                    <div class="header-search-area">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        <div class="header-search-form">
                            <form class="form">
                                <div>
                                    <input type="text" class="form-control" placeholder="Search here">
                                </div>
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->

        <div class="main">
            @yield('section')
        </div>




        <!-- start site-footer -->
        <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-3 col-sm-6">
                            <div class="widget about-widget">
                                <div class="footer-logo"><img src="{{asset('images/logo-nefasac.png')}}" alt></div>
                                <p class="text-justify">NEFASA SAC es una compañía Peruana fundada en 2008 dedicada a prestar servicios de Consultoría Integral </p>
                                <ul class="contact-info">
                                    <li><i class="fa fa-phone"></i> +51 944 399 365</li>
                                    <li><i class="fa fa-clock-o"></i> Horario : <br>Lunes - Viernes (9 am - 8 pm)</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-md-3 col-sm-6">
                            <div class="widget recent-post-widget">
                                <h3>Sede Trujillo</h3>
                                <ul>
                                    <li>
                                        <div class="entry-details">
                                            <h4 class="text-justify"><a href="#">Avenida Nicolás de Piérola 724 Urb. Primavera - Trujillo </a></h4>
                                            <span class="date">La Libertad</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-md-3 col-sm-6">
                            <div class="widget quick-links-widget">
                                <h3>Links rápidos</h3>
                                <ul>
                                    <li><a href="/">Inicio</a></li>
                                    <li><a href="#!">Nosotros</a></li>
                                    <li><a href="#!">Servicios</a></li>
                                    <li><a href="#!">Portafolio</a></li>
                                    <li><a href="#!">Proyectos</a></li>
                                    <li><a href="#!">Contacto</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-md-3 col-sm-6">
                            <div class="widget newsletter-widget">
                                <h3>Subscribirse</h3>
                                <p>Escribase a nuestro boletín semanal, Nefasa SAC.</p>
                                <div class="newsletter-form">
                                    <form>
                                        <div>
                                            <input type="email" class="form-control" placeholder="Your email..">
                                            <button type="submit"><i class="fa fa-envelope"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end upper-footer -->
            <div class="copyright-info">
                <div class="container">
                    <p>2019 &copy; Todos los derechos reservados <a href="https://www.facebook.com/nefasa.sac" target="_blank">NEFASA - SAC - CONSULTORES</a></p>
                    <ul>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="https://www.facebook.com/ideassoftperu/" target="_blank">Desarrollado por IDEASSOFT PERÚ</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- end site-footer -->

        <div style="position:fixed;z-index:900;bottom:90px;right:14px">
                <div style="width:70px;height:70px;float:left;overflow:hidden">
                    <a href="https://api.whatsapp.com/send?phone=51944399365&amp;text=Hola,escribo desde su sitio web y me gustaria tener un poco más de informacion sobre sus servicios" target="_blank"><img src="turismo/images/wpp.png" class="img-fluid"></a>
                </div>
        </div>

    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('turismo/js/jquery.min.js') }} "></script>
    <script src="{{ asset('turismo/js/bootstrap.min.js') }} "></script>

    <!-- Plugins for this template -->
    <script src="{{ asset('turismo/js/jquery-plugin-collection.js')}}"></script>

    <!-- Custom script for this template -->
    <script src="{{ asset('turismo/js/script.js')}} "></script>
</body>
</html>
