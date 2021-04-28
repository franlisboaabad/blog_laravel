@extends('layouts.page')


@section('contenido')

<section>
    <div class="container my-5 text-center">
        <h2 style="color: #006fb1 !important">OST CONSULTORES</h2>
        {{-- <img src="{{ asset('blog/img/ostconsultores.jpg') }}" alt="ost consultores" class="img-fluid" width="400px"> --}}
        <p class="mt-5">Una de las consultoras técnicas especializadas más importantes del Perú. Nuestra trayectoria
            suma 5 años brindando servicios en cuestión de Normas ISO en diversas partes de Latinoamérica.</p>
    </div>

    <div class="eleccion mt-5 text-center">

        <h3 style="color: #006fb1 !important">¿Por qué elegirnos?</h3>

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('blog/img/elegirnos/tiempo-ost.png') }}" alt="ost-consultores-mejor-tiempo" width="100">
                    <h4 class="text-center mt-3">Mejor Tiempo</h4>
                    <p class="mb-0">Cumplimos los plazos establecidos.</p>
                </div>

                <div class="col-md-4 mb-3">
                    <img src="{{ asset('blog/img/elegirnos/elegirnos-ost.png') }}" alt="ost-consultores-equipo-especializado" width="100">
                    <h4 class="text-center mt-3">Equipo especializado</h4>
                    <p class="mb-0">Nuestro equipo de expertos en materia de Normas ISO.</p>
                </div>


                <div class="col-md-4 mb-3">
                    <img src="{{ asset('blog/img/elegirnos/garantia-ost.png') }}" alt="ost-consultores-garantia-resultados" width="100">
                    <h4 class="text-center mt-3">Garantía de resultados</h4>
                    <p class="mb-0">Aseguramos resultados.</p>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- servicios --}}

<section class="text-center mt-5">
    <div class="container">
        <h3 style="color: #006fb1 !important">SERVICIOS</h3>

        <div class="row mt-5">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/sistemas_gestion.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">Implementación de Sistemas de Gestión</h5>
                        <p class="card-text text-justify">
                            En nuestra empresa realizamos el servicio de Implementación de Sistemas de Gestión y nos
                            enfocamos en lograr la certificación que necesita tu empresa. <a href="{{ route('implementacion') }}">Leer más [...]</a>
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
            <a href="{{ route('servicios') }}" class="btn btn-primary" style="background-color: #006fb1; border-radius:50px">MÁS
                SERVICIOS</a>
        </div>
    </div>
</section>


<section class=" features-icons bg-light text-center mt-5">
    <div class=" container ">
        <h2 class=" text-center mb-5" style="color: #006fb1">NORMAS ISO</h2>
        <div class=" row ">

            <div class=" col-lg-4 ">
                <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                    <div class=" features-icons-icon d-flex ">
                        <a href="{{ route('responsabilidad_social') }}" class=" m-auto text-primary ">
                            <img src=" {{ asset('/blog/img/isos/ISO-26000-RESPONSABILIDAD-SOCIAL-150x150.png') }} " alt=" " style=" width: 100px;">
                        </a>
                        <br>
                    </div>
                    <h5 style=" color:rgb(0, 55, 70);" class="mt-3">ISO 26000:2010</h5>
                    <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">RESPONSABILIDAD SOCIAL</p>
                </div>
            </div>
            <div class=" col-lg-4 ">
                <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                    <div class=" features-icons-icon d-flex ">
                        <a href="{{ route('sistema_gestion') }}" class=" m-auto text-primary ">
                            <img src="
                                                {{ asset('/blog/img/isos/ISO-27001-SISTEMA-DE-GESTION-DE-SEGURIDAD-DE-LA-INFORMACION-150x150.png') }} " alt=" " style=" width: 100px;">
                        </a><br>
                    </div>
                    <h5 style=" color:rgb(0, 55, 70);" class="mt-3">ISO 27001:2018</h5>
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
                                                {{ asset('/blog/img/isos/ISO-22000-SISTEMA-DE-GESTION-DE-INOCUIDAD-ALIMENTARIA-150x150.png') }} " alt=" " style=" width: 100px;">
                        </a><br>
                    </div>
                    <h5 style=" color:rgb(0, 55, 70);" class="mt-3">ISO 22000:2018</h5>
                    <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN DE INOCUIDAD ALIMENTARIA
                    </p>
                </div>
            </div>
            {{-- <div class=" col-lg-4 ">
                    <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 ">
                        <div class=" features-icons-icon d-flex ">
                            <a href="{{ route('sistema_ambiental') }}" class=" m-auto text-primary ">
            <img src="
                                                {{ asset('/blog/img/isos/ISO-14001-SISTEMA-DE-GESTION-MEDIO-AMBIENTAL-150x150.png') }} " alt=" " style=" width: 100px; height:100px; ">
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
                                                {{ asset('/blog/img/isos/ISO-9001-SISTEMA-DE-GESTION-DE-CALIDAD-150x150.png') }} " alt=" " style=" width: 100px; height:100px; ">
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
                                                {{ asset('/blog/img/isos/ISO-37001-SISTEMA-DE-GESTION-ANTISOBORNO-150x150.png') }} " alt=" " style=" width: 100px; height:100px; ">
                </a><br>
            </div>
            <h5 style=" color:rgb(0, 55, 70); ">ISO 37001:2016</h5>
            <p class=" mb-0 " style=" color:rgb(0, 55, 70); ">SISTEMA DE GESTIÓN ANTISOBORNO</p>
        </div>
    </div> --}}

    </div>
    <div class="service text-center mt-5">
        <a href="{{ route('normas') }}" class="btn btn-primary" style="background-color: #006fb1; border-radius:50px">MÁS NORMAS ISO</a>
    </div>
    </div>
</section>


<section>
    <div class="container mt-5 mb-3">
        <h3 class=" text-center mb-5" style=" color: #006fb1 ">BLOG</h3>

        <div class="blog mt-3">
            <div class="row">
                @forelse($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <a href="{{ route('entrada', $post) }}"><img src="{{ $post->get_imagen }}" class="card-img-top" alt="{{ $post->title }}"></a>
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
            {{-- <div class="service text-center mt-5">
                    <a href="{{ route('entradas') }}" class="btn btn-primary" style="background-color: #006fb1">TODAS LAS
            ENTRADAS</a>
        </div> --}}
    </div>
    </div>
</section>







@endsection
