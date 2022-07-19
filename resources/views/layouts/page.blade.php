<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="IDEASSOFT PERÚ">
    <link rel="icon" href="{{asset('turismo/images/logo.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('turismo/images/logo.png')}}" />

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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">

    {{-- facebook --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v10.0" nonce="nbPw50Vh"></script>
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
                                        {{-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li> --}}
                                    </ul>
                                </div>
                                <div class="contact-info-right">
                                    <ul>
                                        <li><span>PE:</span> +51 951 411 377 / Oficina: (073) - 618842</li>
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
                        <a class="navbar-brand" href="/"><img src="{{asset('turismo/images/logo.png')}}" style="width: 100px; height: auto; margin-top: -30px;" alt="logo-piuratrips"></a>
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
                        <div class="col col-md-4 col-sm-6">
                            <div class="widget recent-post-widget">
                                <p class="text-justify">Agencia de Viajes y Tour Operadora en la ciudad de Piura - Perú, ofrecemos servicios personalizados para vivir la mejor experiencia en viajes y turismo</p>

                            </div>
                        </div>

                        <div class="col col-md-5 col-sm-6">
                            <div class="widget recent-post-widget">
                                <p>
                                    <i class="fa fa-cube"></i>  informes@piuratrips.com <br>
                                    <i class="fa fa-phone"></i>  +51 951 411 377 <br>
                                    <i class="fa fa-map-marker"></i> Conj. Hab. Villa California – Interior A- 1, Castilla. <br>
                                    <i></i> RUC: 20603077947 
                                </p>
                            </div>
                        </div>

                        <div class="col col-md-3 col-sm-6">
                             <p class="" >
                                    <a href="{{ asset('/turismo/images/archivos/politicas_de_privacidad_piuratrips.pdf') }}" target="_blank"  style="color:white">Políticas de privacidad</a> <br>
                                    <a href="{{ asset('/turismo/images/archivos/terminos_y_condiciones_piuratrips.pdf') }}" target="_blank"   style="color:white">Términos y condiciones</a> <br>
                                    <a href="{{ asset('/turismo/images/archivos/libro_de_reclamaciones_piuratrips.pdf') }}" target="_blank"  style="color:white">Libro de reclamaciones</a> <br>
                                </p>
                        </div>

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
                <a href="https://wa.link/72g4hd" target="_blank"><img src="{{ asset('turismo/images/wpp.png')}}" class="img-fluid"></a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script> --}}

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

    </script>



</body>
</html>
