<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="IDEASSOFT PERÚ">
    <link rel="shortcut icon" type="image/ico" href="#" />

    <meta property="og:url" content="#" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="#" />
    <meta property="og:description" content="#" />
    <meta property="og:image" content="#" />

    <meta name="keywords" content="">

    <!-- Page Title -->
    <title>PIURA TRIPS - @yield('title')</title>


    <!-- Icon fonts -->
    <link href="{{ asset('turismo/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('turismo/css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('turismo/css/style.css') }}" rel="stylesheet">
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
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:informes@piuratrips.com" style="color:white">informes@piuratrips.com</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-sm-7">
                            <div class="social-contact-info-right">
                                <div class="social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/Piuratrips" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/piuratrips/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCNd73Ot0X1OlgysGJ3juCzw " target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                                       {{--  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li> --}}
                                    </ul>
                                </div>
                                <div class="contact-info-right">
                                    <ul>
                                        <li><span>PE:</span> +51 951 411 377 / Oficina: (073)618842</li>
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
                        <a class="navbar-brand" href="#"><img src="{{asset('turismo/images/logo.png')}}" style="width: 5rem; height:5rem;" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="/">INICIO</a></li>
                            <li><a href="{{route('nosotros') }}">NOSOTROS</a></li>
                            <li><a href="{{route('servicios')}}">SERVICIOS</a></li>
                            <li><a href="{{route('portafolio')}}">PORTAFOLIO</a></li>
                            <li><a href="{{route('contacto')}}">CONTACTO</a></li>
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
            @yield('contenido')
        </div>




        <!-- start site-footer -->
        <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6 col-sm-6">
                            <div class="widget about-widget">
                                <div class="footer-logo"><img src="{{asset('turismo/images/logo.png')}}" style="width: 5rem; height:5rem;" alt></div>
                                <p class="text-justify">Agencia de Viajes y Tour Operadora en la ciudad de Piura - Perú, ofrecemos servicios personalizados para vivir la mejor experiencia en viajes y turismo</p>
                                <ul class="contact-info">
                                    <li><i class="fa fa-phone"></i> +51 951 411 377</li>
                                    <li><i class="fa fa-clock-o"></i> Horario : <br>Lunes - Viernes (9 am - 8 pm)</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-md-3 col-sm-6">
                            <div class="widget recent-post-widget">
                                <h4>UBICACIÓN</h4>
                                <ul>
                                    <li>
                                        <div class="entry-details">
                                            <h4 class="text-justify"><a href="#">Conj. Hab. Villa California – Interior A- 1, Castilla.</a></h4>
                                            <span class="date">Piura</span>
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
                                    <li><a href="{{route('nosotros') }}">Nosotros</a></li>
                                    <li><a href="{{route('servicios') }}">Servicios</a></li>
                                    <li><a href="{{route('portafolio') }}">Portafolio</a></li>
                                    {{-- <li><a href="#!">Proyectos</a></li> --}}
                                    <li><a href="{{route('contacto') }}">Contacto</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- <div class="col col-md-3 col-sm-6">
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
                        </div> --}}

                    </div>
                </div>
            </div> <!-- end upper-footer -->
            <div class="copyright-info">
                <div class="container">
                    <p>2021 &copy; Todos los derechos reservados <a href="https://www.facebook.com/Piuratrips" target="_blank">PIURA TRIPS - Agencia de viajes y turismo.</a></p>
                    <ul>
                        {{-- <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li> --}}
                        <li><a href="https://www.facebook.com/ideassoftperu/" target="_blank">Desarrollado por IDEASSOFT PERÚ</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- end site-footer -->

        <div style="position:fixed;z-index:900;bottom:90px;right:14px">
            <div style="width:70px;height:70px;float:left;overflow:hidden">
                <a href="https://wa.link/72g4hd" target="_blank"><img src="turismo/images/wpp.png" class="img-fluid"></a>
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
