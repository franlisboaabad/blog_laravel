@extends('layouts.page')
@section('title','-SERVICIOS')
@section('contenido')
<section class="text-center mt-5">
    <div class="container">
        <h2 style="color: #000080 !important">NUESTROS SERVICIOS</h2>
        <p>Ofrecemos una amplia gama de servicios y soluciones para distintas organizaciones.</p>

        <div class="row mt-5">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/sistemas_gestion.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">Implementación de Sistemas de Gestión</h5>
                        <p class="card-text text-justify">En
                            nuestra empresa
                            realizamos el servicio de Implementación de Sistemas de Gestión y nos enfocamos
                            en lograr la certificación que necesita tu empresa. Garantizamos el cumplimiento de
                            las necesidades
                            y expectativas de nuestros clientes.
                          </p>
                    </div>
                    <a href="{{ route('implementacion') }}" class="btn btn-primary" style="background-color: #000080">Leer mas..</a>
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
                            el grado de cumplimiento de los estándares.</p>
                    </div>
                    <a href="{{ route('auditoria') }}" class="btn btn-primary" style="background-color: #000080">Leer mas..</a>
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
                            A través de la plataforma de ISO´s Teach, generamos las sesiones que necesite para
                            compartir
                            conocimiento y
                            experiencias de parte de nuestro equipo especializado.</p>
                    </div>
                    <a href="{{ route('capacitacion') }}" class="btn btn-primary" style="background-color: #000080">Leer mas..</a>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/cumplimiento.jpg') }}" class="card-img-top" alt="capacitaciones">
                    <div class="card-body">
                        <h5 class="card-title">Función De Cumplimiento</h5>
                        <p class="card-text text-justify"> Nuestro servicio de Función de Cumplimiento le ayuda a reducir 
                            riesgos de posibles incumplimientos legales y garantizar la calidad además
                             de cumplir con los requisitos reglamentarios..
                           </p>
                    </div>
                    <a href="{{ route('cumplimiento') }}" class="btn btn-primary" style="background-color: #000080">Leer mas..</a>
                    
                </div>
            </div>

        </div>

        <div class="service text-center mt-5">
            <a href="{{ route('servicios') }}" class="btn btn-primary" style="background-color: #000080">MÁS
                SERVICIOS</a>
        </div>
    </div>
</section>
@endsection