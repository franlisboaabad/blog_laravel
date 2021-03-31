@extends('layouts.page')
@section('title','CONSULTORÍA, INGENIERÍA Y SUPERVISIÓN DE OBRAS')
<style>
    #caption{
       margin-bottom: 250px;
    }


</style>
@section('section')

    <!-- start of hero -->
    <section class="hero hero-slider-wrapper hero-style-2">
        <div class="hero-slider">
            <div class="slide">
                <img src="{{asset('turismo/images/slider/ingeniero-01.jpg')}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-7 col-sm-10 slide-caption" id="caption">
                            <h3 style="color:white;">SERVICIOS ESPECIALIZADOS EN INGENIERÍA</h3>
                            <p >Soluciones integrales de ingeniería para todos los sectores públicos y privados. Estudios y Diseños; Supervisión; Asesorías; Gerencia de Proyectos</p>
                            <a href="#!" class="theme-btn">Nuestro servicios</a>
                            <a href="#!" class="theme-btn">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{asset('turismo/images/slider/slider-constuct-a.jpg')}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-7 col-sm-10 slide-caption" id="caption">
                                <h3 style="color:white;">EJECUCIÓN DE OBRAS</h3>
                                <p style="color:white;">Rehabilitación, construcción, ampliación e implementación de obras para entidades publicas y privadas.</p>
                            <br>
                            <a href="#!" class="theme-btn">Nuestro servicios</a>
                            <a href="#!" class="theme-btn">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->


       <!-- start services-section-s2 -->
       <section class="services-section-s2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title">
                        <h2>Nuestros servicios</h2>
                        <p>CONSULTORÍA, INGENIERÍA Y SUPERVISIÓN DE OBRAS</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <figure>
                        <p>
                            <img src="{{asset('turismo/images/services-c/oilygas.png')}}" alt="" style="height: 12%">
                            Oil & Gas
                        </p>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure>
                        <p>
                            <img src="{{asset('turismo/images/services-c/infraestructura_vial.png')}}" alt="" style="height: 12%">
                            Infraestructura Vial y Transporte
                        </p>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure>
                        <p>
                            <img src="{{asset('turismo/images/services-c/edificaciones_desarrollos.png')}}" alt="" style="height: 12%">
                            Edificaciones, Desarrollos Urbanos.
                        </p>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure>
                        <p>
                            <img src="{{asset('turismo/images/services-c/energia_e_industria_minera.png')}}" alt="" style="height: 12%">
                            Energía e Industria Minera
                        </p>
                    </figure>
                </div>


                <div class="col-md-4">
                    <figure>
                        <p>
                            <img src="{{asset('turismo/images/services-c/saneamiento_basico.png')}}" alt="" style="height: 12%">
                            Saneamiento  y Servicios Públicos
                        </p>
                    </figure>
                </div>


                <div class="col-md-4">
                    <figure>
                        <p>
                            <img src="{{asset('turismo/images/services-c/telecomunicaciones.png')}}" alt="" style="height: 12%">
                            Telecomunicaciones
                        </p>
                    </figure>
                </div>

            </div>

            <br>

            <div class="ver-mas text-center">
                <a class="theme-btn" href="#!">MÁS SERVICIOS</a>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end services-section-s2 -->

    <!-- start why-choose-us-section -->
    <section class="why-choose-us-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-4">
                    <div class="section-title-s3">
                        <h2>Porqué deberías elegirnos</h2>
                        <p>"Somos el aliado confiable que garantiza el éxito de sus proyectos"</p>
                        <a href="#!" class="read-more">Más información</a>
                    </div>
                </div>
                <div class="col col-lg-9 col-md-8">
                    <div class="why-choose-grids">
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-businessman"></i>
                            </div>
                            <h3 class="text-center">Equipo profesional</h3>
                            <p>Contamos con equipo apto, para brindar soluciones a cada proyecto solicitado.</p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-idea"></i>
                            </div>
                            <h3 class="text-center">Ayuda al cliente 24/7</h3>
                            <p>Atención al cliente los 24 / 7, contáctanos ahora, no esperes más.</p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-salary"></i>
                            </div>
                            <h3 class="text-center">Cultura profesional</h3>
                            <p>Nuestro equipo profesional, se adapta a nuestras politicas empresariales.</p>
                        </div>
                        <div class="grid">
                            <div class="icon">
                                <i class="fi flaticon-key-1"></i>
                            </div>
                            <h3 class="text-center">Soluciones Integrales e inmediatas</h3>
                            <p>Soluciones a medida, para cada proyecto solicitado por nuestros clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end why-choose-us-section -->

    <!-- start case-studies-section -->
    <section class="case-studies-section section-padding">
        <div class="overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title-s2">
                        <h2>Servicios profesionales</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="case-grids">
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{asset('turismo/images/services/service-1.jpg')}}" alt>
                            </div>
                            <h3><a href="#">Ingeniería Estructural</a></h3>
                            <p class="text-justify">La ingeniería estructural es una rama clásica de la ingeniería civil que se ocupa del diseño y cálculo de la parte estructural en elementos y sistemas estructurales tales como edificios, puentes, muros, presas, túneles y otras obras civiles. </p>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{asset('turismo/images/services/service-2.jpg')}}" alt>
                            </div>
                            <h3><a href="#">Diseño integral en Ingeniería</a></h3>
                            <p class="text-center">Creación y desarrollo de proyectos integrales “llave en mano” de arquitectura, ingeniería y diseño industrial. </p>

                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <img src="{{asset('turismo/images/services/service-3.jpg')}}" alt>
                            </div>
                            <h3><a href="#">Ingeniería Civil</a></h3>
                            <p class="text-justify">La ingeniería civil es la disciplina de la ingeniería profesional que emplea conocimientos de cálculo, mecánica, hidráulica y física para encargarse del diseño, construcción y mantenimiento </p>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end case-studies-section -->

    <hr>

    <!--PRESENCIA LATAM-->
    <section id="latam">
        <div class="container">
                <div class="row">
                    <div class="col col-md-5">
                        <div >
                            <h2>PRESENCIA LATAM</h2>
                            <p class="text-justify">NEFASA S.A.C, aprovechando su experiencia en la Gestión Integral y exitosa de más de 530 Proyectos, ha logrado trasladar su conocimiento a diferentes países en Latinoamérica, contando hoy con presencia activa en varios de ellos y con la constante intención de ampliar su participación en el mercado latinoaméricano.</p>
                            <ul>
                                <li><b>1.</b> Colombia.</li>
                                <li><b>2.</b> Perú.</li>
                                <li><b>3.</b> Paraguay.</li>
                                <li><b>4.</b> Panamá.</li>
                                <li><b>5.</b> Honduras.</li>
                                <li><b>6.</b> Bolivia.</li>
                                <li><b>7.</b> República Dominicana.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7">
                    <img src="{{asset('turismo/images/latam.png')}}" alt="">
                    </div>
                </div>
        </div>
    </section>

    <hr>

         <!-- start testimonials-partners-section -->
 <section class="testimonials-partners-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-md-6">
                <div class="testimonials-wrapper">
                    <div class="section-title-s2">
                        <h2>Testimonios de nuestros clientes</h2>
                        <p>Opiniones de nuestros clientes, sobre nuestros servicios realizados en NEFASA.</p>
                    </div>

                    <div class="testimonials-grids testimonials-slider">
                        <div class="grid">
                            <div class="client-quote">
                                <p>Estuve Buscando por mucho tiempo, una empresa que tome en serio su trabajo, y me brinde un asesoramiento para la elaboración de mis planos y la construcción de mi viviendia, Gracias Nefasa SAC.</p>
                            </div>
                            <div class="client-details">
                                <div class="img-holder">
                                    <img src="{{asset('turismo/images/testimonials/img-1')}}.jpg" alt>
                                </div>
                                <h4>Jorge Castillo</h4>
                                <span>Administracion Perú</span>
                                <div class="icon">
                                    <i class="fi flaticon-right-quote"></i>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="client-quote">
                                <p>Gracias a Nefasa SAC, pude terminar los proyectos que tenia en mente, elaboracion de planos y construcción de mi Hotel.</p>
                            </div>
                            <div class="client-details">
                                <div class="img-holder">
                                    <img src="{{asset('turismo/images/testimonials/img-1')}}.jpg" alt>
                                </div>
                                <h4>Rodolfo Reyes</h4>
                                <span>Contador Perú</span>
                                <div class="icon">
                                    <i class="fi flaticon-right-quote"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col col-lg-5 col-lg-offset-1 col-md-6">
                <div class="partners-wrapper">
                    <div class="section-title-s2">
                        <h2>Certificaciones</h2>
                        <p>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                    <div class="partners-grids">
                        <div class="first-row">
                            <div class="grid">
                                <img src="{{asset('turismo/images/about/iso-9001.jpg')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('turismo/images/about/iso-14001.jpg')}}" alt>
                            </div>
                            <div class="grid">
                                <img src="{{asset('turismo/images/about/ohsas_18001.jpg')}}" alt>
                            </div>
                        </div>
                        <div class="img" style="text-align: center">
                            <img src="{{asset('turismo/images/about/logo-iqnet.jpg')}}" alt>
                            <b> <p>CERTIIFICADOS DE CALIDAD</p> </b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end testimonials-partners-section -->


@endsection
