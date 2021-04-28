@extends('layouts.page')
@section('title','- ISO 37001:2016 Sistema de gestión antisoborno')
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
                <h2 class="mb-5"> ISO 37001:2016 <br> SISTEMA DE GESTIÓN ANTISOBORNO </h2>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/soborno.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 37001: 2016 SISTEMA DE GESTIÓN ANTISOBORNO</h5>
                    <p class="card-text text-justify">Norma internacional diseñada para ayudar a las organizaciones a implementar un sistema de gestión contra el soborno. Especifica una serie de medidas que su organización
                        puede implementar para ayudar a prevenir, detectar y tratar el soborno.

                    </p>
                    <h5>Beneficios:</h5>
                    <ol type="1">
                        <li> La apertura de su organización al escrutinio
                            externo de la eficacia de sus políticas y procesos contra el soborno.</li>
                        <li> La demostración del cumplimiento de la legislación pertinente,
                            como la Ley Anti soborno del Reino Unido del 2010.</li>
                        <li>La colaboración con las partes interesadas para supervisar y administrar el
                            riesgo en toda la organización y la cadena de suministro.</li>
                        <li>Asegura que los proveedores, subcontratistas y agentes estén
                            comprometidos con las mejores prácticas contra el soborno.</li>
                    </ol>

                </div>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            @include('partials.recientes', ['posts' => $posts ])
        </div>
    </div>
</div>
    @endsection
