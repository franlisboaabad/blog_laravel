<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="IDEASSOFT PERÚ">
    <link rel="icon" href="{{asset('turismo/images/logo.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('turismo/images/ideaspiuratours/ideaspiuratours.png')}}" />

    <meta property="og:url" content="#" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="#" />
    <meta property="og:description" content="#" />
    <meta property="og:image" content="#" />

    <meta name="keywords" content="">

    <!-- Page Title -->
    <title>IDEAS PIURA TOURS - @yield('title')</title>


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

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v11.0" nonce="ct7U1qVN"></script>

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
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:info@ideaspiuratours.com" style="color:white">info@ideaspiuratours.com</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-sm-7">
                            <div class="social-contact-info-right">
                                <div class="social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/ideaspiuratours" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/ideaspiuratours_agencia_de_tur/?hl=es" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/ " target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                                        {{-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li> --}}
                                    </ul>
                                </div>
                                <div class="contact-info-right">
                                    <ul>
                                        <li><span>PE:</span> +51 945368416 / 917487100 </li>
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
                        <a class="navbar-brand" href="/"><img src="{{asset('turismo/images/ideaspiuratours/logo.png')}}" style="width: 150px; height: auto; margin-top: -50px;" alt="logo-ideaspiuratours"></a>
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
                        <div class="col col-md-5 col-sm-6">
                            <div class="widget recent-post-widget">
                                <p class="text-justify">Agencia de Viajes y Tour Operadora en la ciudad de Piura - Perú, ofrecemos servicios personalizados para vivir la mejor experiencia en viajes y turismo</p>
                            </div>
                        </div>

                        <div class="col col-md-4 col-sm-6">
                            <div class="widget recent-post-widget">
                               <p class="text-center">
                                   <span class="text-center"> Aceptamos todas las tarjetas de credito y debito </span>
                               </p>
                               <img src="{{ asset('turismo/images/ideaspiuratours/tarjetas.jpg') }}" alt="" class="img-fluid">

                            </div>
                        </div>

                        <div class="col col-md-3 col-sm-6">
                            <div class="widget quick-links-widget">
                                 <p>
                                    <i class="fa fa-cube"></i> info@ideaspiuratours.com <br>
                                    <i class="fa fa-phone"></i> +51 945 368 416 <br>
                                    <i class="fa fa-map-marker"></i> Calle Junin 651 - Piura
                                </p>
                            </div>
                        </div>



                    </div>
                </div>
            </div> <!-- end upper-footer -->


            <div class="copyright-info">
                <div class="container">
                    <p> Copyright 2021 - <a href="https://www.facebook.com/ideaspiuratours" target="_blank">IDEASPIURATOURS - Agencia de viajes y turismo.</a></p>
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
                <a href="https://wa.link/ilkbsa" target="_blank"><img src="{{ asset('turismo/images/wpp.png')}}" class="img-fluid"></a>
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
