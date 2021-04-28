@extends('layouts.page')
@section('title','-SERVICIOS')
<style>
    .masthead {
        display: none !important;
    }

    .bg-slider {
        display: none !important
    }

</style>
@section('contenido')

<!-- Masthead -->
<header class="masthead-internas text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h2 class="mb-5">SERVICIOS</h2>
            </div>
        </div>
    </div>
</header>


<section class="text-center mt-5">
    <div class="container">
        <h2 style="color: #006fb1 ">NUESTROS SERVICIOS</h2>
        <p>Ofrecemos una amplia gama de servicios y soluciones para distintas organizaciones.</p>

        <div class="row mt-5">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/sistemas_gestion.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">Implementación de Sistemas de Gestión</h5>
                        <p class="card-text text-justify">
                            En nuestra empresa realizamos el servicio de
                            Implementación de Sistemas de Gestión y nos enfocamos
                            en lograr la certificación que necesita tu empresa. <a href="{{ route('implementacion') }}">Leer mas..</a>.
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/auditoria.jpg') }}" class="card-img-top" alt="auditoria">
                    <div class="card-body">
                        <h5 class="card-title">Auditoria Interna</h5>
                        <p class="card-text text-justify">
                            servicio de auditoria consiste en una revisión de su Sistema
                            de Gestión a través de la verificación de la información documentada y su nivel
                            de implementación para determinar
                            <a href="{{ route('auditoria') }}">Leer mas..</a></p>
                    </div>

                </div>
            </div>


            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/capacitacion.jpg') }}" class="card-img-top" alt="capacitaciones">
                    <div class="card-body">
                        <h5 class="card-title">Capacitación</h5>
                        <p class="card-text text-justify">
                            servicio de capacitación se programa en acuerdo con su
                            organización. Nos adaptamos a su disponibilidad y posibilidades.
                            A través de la plataforma de ISO´s Teach. <a href="{{ route('capacitacion') }}">Leer mas..</a></p>
                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/cumplimiento.jpg') }}" class="card-img-top" alt="capacitaciones">
                    <div class="card-body">
                        <h5 class="card-title">Función De Cumplimiento</h5>
                        <p class="card-text text-justify">
                            Nuestro servicio de Función de Cumplimiento le ayuda a reducir
                            riesgos de posibles incumplimientos legales y garantizar la calidad además
                            de cumplir con los requisitos reglamentarios <a href="{{ route('cumplimiento') }}">Leer mas..</a>

                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
