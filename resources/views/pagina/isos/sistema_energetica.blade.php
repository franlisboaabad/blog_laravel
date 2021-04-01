@extends('layouts.page')
@section('title','- ISO 50001:2018 Sistema de gestión energética ')
<style>
    .masthead {
        display: none !important;
    }

</style>
@section('contenido')

<!-- Masthead -->
<header class="masthead-iso text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h2 class="mb-5"> ISO 50001:2018 <br> SISTEMA DE GESTIÓN ENERGÉTICA </h2>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/energia.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 50001:2018 SISTEMA DE GESTIÓN ENERGÉTICA</h5>
                    <p class="card-text text-justify">Norma internacional basada en el Sistema de Gestión Energética dedicada
                        a desarrollar e implantar su política energética, así como a gestionar aquellos elementos de sus actividades,
                        productos o servicios que interactúan con el uso de la energía. La norma ISO 50001 establece los requisitos
                        que debe poseer un Sistema de Gestión Energética,
                        con el fin de realizar mejoras continuas y sistemáticas del rendimiento energético de las organizaciones.
                    </p>
                    <h5>Beneficios:</h5>
                    <ol type="1">
                        <li>Ahorro energético y económico.</li>
                        <li>Reducción de costes empresariales.</li>
                        <li>Ayuda en el cumplimiento de la gestión vigente.</li>
                        <li>Impulsar la eficiencia energética.</li>
                    </ol>
                </div>

            </div>
        </div>

        <div class="col-md-4 mb-3">
           @include('partials.recientes')
        </div>
    </div>
</div>
@endsection
