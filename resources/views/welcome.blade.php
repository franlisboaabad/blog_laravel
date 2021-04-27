@extends('layouts.page')


@section('contenido')
    <section>
        <div class="container my-5 text-center">
            {{-- <h2 style="color: #000080 !important">OST CONSULTORES</h2> --}}
            <img src="{{ asset('blog/img/ostconsultores.jpg') }}" alt="ost consultores" class="img-fluid" width="400px">
            <p class="mt-5">Una de las consultoras técnicas especializadas más importantes del Perú. Nuestra trayectoria
                suma 5 años brindando servicios en cuestión de Normas ISO en diversas partes de Latinoamérica.</p>
        </div>

        <div class="eleccion mt-5 text-center">

            <h2 style="color: #000080 !important">¿Por qué elegirnos?</h2>

            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-4 mb-3">
                        <img src="{{ asset('blog/img/elegirnos/tiempo-ost.png') }}" alt="ost-consultores-mejor-tiempo">
                        <h4>Mejor Tiempo</h4>
                        <p class="mb-0">Cumplimos los plazos establecidos.</p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <img src="{{ asset('blog/img/elegirnos/elegirnos-ost.png') }}"
                            alt="ost-consultores-equipo-especializado">
                        <h4>Equipo especializado</h4>
                        <p class="mb-0">Nuestro equipo de expertos en materia de Normas ISO.</p>
                    </div>


                    <div class="col-md-4 mb-3">
                        <img src="{{ asset('blog/img/elegirnos/garantia-ost.png') }}"
                            alt="ost-consultores-garantia-resultados">
                        <h4>Garantía de resultados</h4>
                        <p class="mb-0">Aseguramos resultados.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- servicios --}}

    <section class="text-center mt-5">
        <div class="container">
            <h2 style="color: #000080 !important">ALGUNOS DE NUESTROS SERVICIOS</h2>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('blog/img/sistemas_gestion.jpg') }}" class="card-img-top"
                            alt="sistemas-de-gestion">
                        <div class="card-body">
                            <h5 class="card-title">Implementación de Sistemas de Gestión</h5>
                            <p class="card-text text-justify">
                                En nuestra empresa realizamos el servicio de Implementación de Sistemas de Gestión y nos
                                enfocamos en lograr la certificación que necesita tu empresa. <a
                                    href="{{ route('implementacion') }}">Leer más [...]</a>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('blog/img/auditoria.jpg') }}" class="card-img-top" alt="auditoria">
                        <div class="card-body">
                            <h5 class="card-title">Auditoria Interna</h5>
                            <p class="card-text text-justify">servicio de
                                auditoria consiste en una revisión de su Sistema
                                de Gestión a través de la verificación de la información documentada y su nivel de
                                implementación
                                para determinar
                                <a href="{{ route('auditoria') }}">Leer más [...]</a>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('blog/img/capacitacion.jpg') }}" class="card-img-top" alt="capacitaciones">
                        <div class="card-body">
                            <h5 class="card-title">Capacitación</h5>
                            <p class="card-text text-justify"> servicio de
                                capacitación se programa en acuerdo con su
                                organización. Nos adaptamos a su disponibilidad y posibilidades.
                                A través de la plataforma de ISO´s Teach,
                                <a href="{{ route('capacitacion') }}">Leer más [...]</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="service text-center mt-5">
                <a href="{{ route('servicios') }}" class="btn btn-primary" style="background-color: #000080">MÁS
                    SERVICIOS</a>
            </div>
        </div>
    </section>


    <section class=" features-icons bg-light text-center mt-5">
        <div class=" container ">
            <h2 class=" text-center mb-5" style=" color:rgb(0, 55, 70); ">NORMAS ISO</h2>
            <div class=" row ">

                <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href="{{ route('responsabilidad_social') }}" class=" m-auto text-primary ">
                                <img src=" {{ asset('/blog/img/isos/ISO-26000-RESPONSABILIDAD-SOCIAL-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a>
                            <br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 26000:2010</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">RESPONSABILIDAD SOCIAL</p>
                    </div>
                </div>
                <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href="{{ route('sistema_gestion') }}" class=" m-auto text-primary ">
                                <img src="
                                                {{ asset('/blog/img/isos/ISO-27001-SISTEMA-DE-GESTION-DE-SEGURIDAD-DE-LA-INFORMACION-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a><br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 27001:2018</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN DE SEGURIDAD DE LA
                            INFORMACIÓN
                        </p>
                    </div>
                </div>
                <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href="{{ route('sistema_alimentaria') }}" class=" m-auto text-primary ">
                                <img src="
                                                {{ asset('/blog/img/isos/ISO-22000-SISTEMA-DE-GESTION-DE-INOCUIDAD-ALIMENTARIA-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a><br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 22000:2018</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN DE INOCUIDAD ALIMENTARIA
                        </p>
                    </div>
                </div>
                <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href="{{ route('sistema_ambiental') }}" class=" m-auto text-primary ">
                                <img src="
                                                {{ asset('/blog/img/isos/ISO-14001-SISTEMA-DE-GESTION-MEDIO-AMBIENTAL-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a><br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 14001:2015</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN MEDIO AMBIENTAL</p>
                    </div>
                </div>
                <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href="{{ route('sistema_calidad') }}" class=" m-auto text-primary ">
                                <img src="
                                                {{ asset('/blog/img/isos/ISO-9001-SISTEMA-DE-GESTION-DE-CALIDAD-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a><br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 9001:2015</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN DE CALIDAD</p>
                    </div>
                </div>
                <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href="{{ route('sistema_antisoborno') }}" class=" m-auto text-primary ">
                                <img src="
                                                {{ asset('/blog/img/isos/ISO-37001-SISTEMA-DE-GESTION-ANTISOBORNO-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a><br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 37001:2016</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN ANTISOBORNO</p>
                    </div>
                </div>

            </div>
            <div class="service text-center mt-5">
                <a href="{{ route('normas') }}" class="btn btn-primary" style="background-color: #000080">VER MÁS</a>
            </div>
        </div>
    </section>


    <section>
        <div class="container mt-5 mb-3">
            <h2 class=" text-center mb-5" style=" color:rgb(0, 55, 70); ">ENTRADAS DE BLOG</h2>

            <div class="blog mt-3">
                <div class="row">
                    @forelse($posts as $post)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <a href="{{ route('entrada', $post) }}"><img src="{{ $post->get_imagen }}"
                                        class="card-img-top" alt="{{ $post->title }}"></a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text text-justify"> {{ $post->get_resumen }} </p>

                                    <p> <a href="{{ route('entrada', $post) }}">Leer más [...]</a> </p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">No hay entradas en el blog</p>
                    @endforelse
                </div>
                <div class="service text-center mt-5">
                    <a href="{{ route('entradas') }}" class="btn btn-primary" style="background-color: #000080">TODAS LAS
                        ENTRADAS</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">¿Preparado para comenzar? <a href="#contactanos" style="color:white">
                            <br> ¡Regístrate ahora!</a> </h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <h3 class="text-center" id="contactanos">CONTÁCTANOS</h3>
            <div class="row mt-5">

               


                <div class="col-md-6 mb-3">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form action="{{ route('contacto_email') }}" method="post">

                        @csrf
                        <div class="form-group">
                            <label for="">Nombres y Apellidos</label>
                            <input type="text" name="nombres" placeholder="Ingrese Nombres y Apellidos" required
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Correo electrónico</label>
                            
                            <input type="hidden" name="celular" value="+5100000">
                            <input type="hidden" name="ruc" value="000000000000">

                            <input type="email" name="email" placeholder="Ingrese correo electrónico" required
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Titulo de mensaje</label>
                            <input type="text" name="titulo" placeholder="Titulo de mensaje" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Mensaje</label>
                            <textarea class="form-control" name="mensaje" rows="6"></textarea>
                        </div>

                        <button class="btn btn btn-success" style=" width: 300px">ENVIAR MENSAJE</button>


                    </form>
                </div>
                <div class="col-md-6 mb-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.465357665721!2d-80.62050128523569!3d-5.189287596234519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMTEnMjEuNCJTIDgwwrAzNycwNS45Ilc!5e0!3m2!1ses!2spe!4v1619494208506!5m2!1ses!2spe"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    <div class="informacion mt-3">
                        <p> <i class="fa fa-map-marker text-primary"></i> Calle los Ebanos z-14, Miraflores-Castilla, Piura <br> <i class="fa fa-phone text-primary"></i> Celular +51 920852185</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
