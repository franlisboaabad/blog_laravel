@extends('layouts.page')
@section('title','- ISO 14001:2015 Sistema de gestion medio ambiental')
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
                <h2 class="mb-5">ISO 14001:2015 <br> SISTEMA DE GESTIÓN MEDIO AMBIENTAL</h2>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/ambiental.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 14001:2015 SISTEMA DE GESTIÓN MEDIO AMBIENTAL</h5>
                    <p class="card-text text-justify">Durante los últimos años, la conciencia
                        ambiental ha venido en aumento en todo el mundo. Esta toma de importancia hacia
                        nuestro medio ambiente ha impulsado el crecimiento de la norma ISO 14001,
                        trazando un marco que una empresa u organización puede seguir para establecer
                        un sistema de gestión ambiental eficaz. <br>

                        Esta norma internacional brinda garantía a la gerencia y los empleados
                        de la empresa, así como a las partes interesadas externas, de que el
                        impacto ambiental se está midiendo y reduciendo a través de la evaluación
                        de los requisitos legales aplicables de sus actividades. Al asumir la
                        responsabilidad
                        ambiental se proyecta y refuerza la imagen comercialmente sostenible de la
                        empresa

                    </p>

                    <h5>Beneficios:</h5>

                    <ul>
                        <li>Control de los impactos ambientales derivados de la organización.</li>
                        <li>Reducción en la utilización de materias primas y energía.</li>
                        <li>Cumplimiento de la legislación ambiental.</li>
                        <li>Mejora la imagen de la organización frente a autoridades reguladoras y el gobierno.</li>
                        <li>Demuestra compromiso con el medio ambiente.</li>
                        <li>Acceso a nuevos mercados.</li>
                    </ul>

                </div>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            @includeIf('partials.recientes', ['posts' => $posts ])
        </div>
    </div>

</div>

@endsection
