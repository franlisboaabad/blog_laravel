@extends('layouts.page')
@section('title','- Auditoria interna')
<style>
    .masthead {
        display: none !important;
    }

</style>
@section('contenido')

<!-- Masthead -->
<header class="masthead-internas text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h2 class="mb-5">AUDITORIA INTERNA</h2>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-5 mb-3">
                <img src="{{ asset('blog/img/auditoria.jpg') }}" class="card-img-top" alt="ost auditoria interna">
            </div>
            <div class="col-md-7 mb-3 mt-3">
                <p class="card-text text-justify"> Nuestro servicio de auditoria consiste en una revisión de su Sistema de Gestión a través de la verificación
                    de la información documentada y su nivel de implementación para determinar el grado de cumplimiento de los estándares.
                    Nuestro equipo de expertos en auditorías cuenta con experiencia en todo tipo de sectores e industrias,
                    lo cual garantiza y supervisa el status de sus procesos, operaciones y proyectos para que se cumplan
                    con las normativas internacionales.
                </p>
            </div>
        </div>
    </div>
</section>




@endsection
