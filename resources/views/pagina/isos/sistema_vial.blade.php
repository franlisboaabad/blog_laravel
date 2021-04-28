@extends('layouts.page')
@section('title','- ISO 39001:2018 Sistema de gestión de la seguridad vial')
<style>
    .masthead {
        display: none !important;
    }
    .bg-slider{ display: none !important}
</style>
@section('contenido')

<!-- Masthead -->
<header class="masthead-iso text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h2 class="mb-5"> ISO 39001:2018 <br> SISTEMA DE GESTIÓN DE LA SEGURIDAD VIAL </h2>
            </div>
        </div>
    </div>
</header>


<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/vial.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 39001:2018 SISTEMA DE GESTIÓN DE LA SEGURIDAD VIAL</h5>
                    <p class="card-text text-justify">La norma ISO 39001 establece los requisitos
                        mínimos para un sistema de gestión de la seguridad del tráfico en carretera.
                        Se aplica a entidades públicas y privadas que interactúan con el sistema vial;
                        la cual les permite ayudar a las organizaciones
                        a reducir el riesgo de muerte y heridas derivadas de los accidentes de tráfico.
                    </p>


                    <h5>Beneficios:</h5>
                    <ol type="1">
                        <li>Uno de los efectos inmediatos de la sistematización de la gestión de la seguridad vial en base a la 39001 es la reducción de accidentes de tráfico.</li>
                        <li>Reducción de costes en cuestiones de reparación de vehículos, mantenimiento, primas de seguros, etc.</li>
                        <li>Mejora del ambiente laboral mediante la sensibilización del personal en la seguridad vial.</li>
                        <li>Mejora la imagen de la empresa respecto a sus clientes y proveedores.</li>


                    </ol>

                    <br>

                    <p class="card-text text-justify">La certificación de un Sistema de Gestión de Seguridad Vial,
                        demuestra una apuesta clara y decidida por la correcta
                        gestión y por la mejora continua de las condiciones de seguridad vial de la organización.</p>

                </div>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            @include('partials.recientes', ['posts' => $posts ])
        </div>
    </div>
</div>

@endsection
