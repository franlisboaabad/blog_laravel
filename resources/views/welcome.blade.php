@extends('layouts.page')


@section('contenido')
    <section>
        <div class="container my-5 text-center">
            <h2 style="color: #000080 !important">OST CONSULTORES</h2>
            <p class="mt-5">Una de las consultoras técnicas especializadas más importantes del Perú. Nuestra trayectoria
                suma 5 años brindando servicios en cuestión de Normas ISO en diversas partes de Latinoamérica.</p>
        </div>

        <div class="eleccion mt-5 text-center">

            <h2 style="color: #000080 !important">¿Por qué elegirnos?</h2>

            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-4 mb-3">
                        <img src="{{ asset('blog/img/elegirnos/tiempo-ost.png') }}" alt="Mejor tiempo">
                        <h4>Mejor Tiempo</h4>
                        <p class="mb-0">Cumplimos los plazos establecidos.</p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <img src="{{ asset('blog/img/elegirnos/elegirnos-ost.png') }}" alt="Mejor tiempo">
                        <h4>Equipo especializado</h4>
                        <p class="mb-0">Nuestro equipo de expertos en materia de Normas ISO.</p>
                    </div>


                    <div class="col-md-4 mb-3">
                        <img src="{{ asset('blog/img/elegirnos/garantia-ost.png') }}" alt="Mejor tiempo">
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
                                En nuestra empresa realizamos el servicio de Implementación de Sistemas de Gestión y nos enfocamos en lograr la certificación que necesita tu empresa. <a href="{{ route('implementacion') }}">Leer mas..</a>.
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
                                <a href="{{ route('auditoria') }}">Leer mas..</a></p>
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
                                <a href="{{ route('capacitacion') }}">Leer mas..</a></p>
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
                            <a href=" " class=" m-auto text-primary ">
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
                            <a href=" " class=" m-auto text-primary ">
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
                            <a href=" " class=" m-auto text-primary ">
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
                            <a href=" " class=" m-auto text-primary ">
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
                            <a href=" " class=" m-auto text-primary ">
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
                            <a href=" " class=" m-auto text-primary ">
                                <img src="
                                    {{ asset('/blog/img/isos/ISO-37001-SISTEMA-DE-GESTION-ANTISOBORNO-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a><br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 37001:2016</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN ANTISOBORNO</p>
                    </div>
                </div>
                <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href=" " class=" m-auto text-primary ">
                                <img src="
                                    {{ asset('/blog/img/isos/ISO-45001-SISTEMA-DE-SEGURIDAD-Y-SALUD-EN-EL-TRABAJO-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a><br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 45001:2018</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO
                        </p>
                    </div>
                </div>
                <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href=" " class=" m-auto text-primary ">
                                <img src="
                                    {{ asset('/blog/img/isos/ISO-39001-SISTEMA-DE-GESTION-DE-LA-SEGURIDAD-VIAL-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a><br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 39001:2018</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN DE LA SEGURIDAD VIAL</p>
                    </div>
                </div>
                <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href=" " class=" m-auto text-primary ">
                                <img src="
                                    {{ asset('/blog/img/isos/ISO-50001-SISTEMA-DE-GESTION-ENERGETICA-150x150.png') }} "
                                    alt=" " style=" width: 100px; height:100px; ">
                            </a><br>
                        </div>
                        <h5 style=" color:rgb(0, 55, 70); ">ISO 50001:2018</h5>
                        <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN ENERGÉTICA</p>
                    </div>
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
                    <h2 class="mb-4">¿Preparado para comenzar? ¡Regístrate ahora!</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input type="email" class="form-control form-control-lg"
                                    placeholder="Ingrese su correo electrónico">
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-block btn-lg btn-primary"
                                    id="button_register">Registrarse</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>





@endsection
