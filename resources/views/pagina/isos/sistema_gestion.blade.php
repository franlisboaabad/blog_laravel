@extends('layouts.page')
@section('title','- ISO 27001:2018 Sistema de gestión de seguridad de la información')
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
                <h2 class="mb-5">ISO 27001:2018 <br> SISTEMA DE GESTIÓN DE SEGURIDAD DE LA INFORMACIÓN </h2>
            </div>
        </div>
    </div>
</header>


<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/info.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 27001:2018 SISTEMA DE GESTIÓN DE SEGURIDAD DE LA INFORMACIÓN</h5>
                    <p class="card-text text-justify">La Norma ISO 27001 describe cómo gestionar
                        la seguridad de la información en una empresa con el fin de proporcionar
                        confidencialidad, integridad y disponibilidad de la información,
                        así como cumplimiento legal. Esta certificación es esencial para
                        proteger sus activos más importantes, la información de
                        sus clientes y empleados, la imagen corporativa y otra información privada.
                    </p>

                    <p class="card-text text-justify">
                        Su implementación es la solución idónea para los riesgos más
                        potenciales, como son el crimen cibernético,
                        violación de datos personales, uso malintencionado,
                        robo y ataques de virus.
                    </p>
                    
                    <h5>Beneficios de implementar la Norma ISO 27001:</h5>
                    <ol type="1">
                        <li>Un sistema de gestión certificado nos garantiza que
                            nuestros procesos de seguridad estén estructurados y coordinados</li>
                        <li>Aplicar las mejores prácticas en materia de seguridad es una garantía
                            para las partes interesadas y aumenta la confianza de los clientes.</li>
                        <li>Implementar procedimientos para permitir la detección oportuna
                            y a tiempo de brechas de seguridad.</li>
                        <li>Hay una ganancia financiera si usted disminuye los gastos
                            ocasionados por incidentes. Probablemente sí se produzcan
                            en su empresa interrupciones de servicio o esporádicos filtrados de datos</li>


                    </ol>
                    <br>

                    <p class="card-text text-justify">
                        Contar con la certificación ISO 27001 permite a
                        la empresa diferenciarse de otras que no cuenten con el
                        certificado. De cara a los clientes, esto puede suponer
                        una importante ventaja comercial. Y es que, los usuarios
                        valorarán positivamente que una empresa se preocupe
                        por certificar su sistema de gestión de la seguridad de la información.
                    </p>
                </div>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            @include('partials.recientes', ['posts' => $posts ])
        </div>

    </div>
</div>
    @endsection
