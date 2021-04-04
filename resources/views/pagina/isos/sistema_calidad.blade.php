@extends('layouts.page')
@section('title','- ISO 9001:2015 Sistema de gestión de calidad')
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
                <h2 class="mb-5">ISO 9001:2015 <br> SISTEMA DE GESTIÓN DE CALIDAD </h2>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/calidad.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 9001:2015
                        SISTEMA DE GESTIÓN DE CALIDAD </h5>
                    <p class="card-text text-justify">El Sistema de Gestión de Calidad ISO 9001
                        es aplicable a cualquier tipo de organización, sin importar el tamaño, rubro o actividad principal.
                        ISO 9001 es una norma que establece los requisitos para un sistema de gestión de la calidad.
                        Ayuda a las empresas y organizaciones a ser más eficientes y mejorar la satisfacción y
                        experiencia del cliente. La implementación de este sistema de gestión lo ayudará a
                        evaluar el contexto general de su organización para definir quiénes se ven afectados
                        por su trabajo y qué esperan de su servicio o producto. También coloca a sus clientes
                        en primer lugar, asegurándose de que usted satisfaga sus necesidades y supere sus expectativas.
                        Esto ayuda en gran medida a concretar clientes nuevos y a un aumento del negocio para su organización.


                    </p>

                    <h5>¿QUÉ BENEFICIOS TRAE IMPLEMENTAR LA NORMA ISO 9001:2015 EN TU ORGANIZACIÓN?</h5>

                    <ul>
                        <li>Evaluación del entorno competitivo</li>
                        <li>Mejora continua</li>
                        <li>Cumplimiento de los requisitos legales</li>
                        <li>Organización más sólida y mejor estructurada</li>
                        <li>Mejor reputación e imagen corporativa</li>
                        <li>Atracción de nuevo clientes</li>
                        <li>Mayor enfoque al cliente y partes interesadas</li>
                        <li>Gestión de riesgos y oportunidades</li>
                    </ul>

                    <p class="lead"> <strong>Orientación al cliente</strong> </p>
                    <p class="text-justify"> Satisfacer las necesidades del cliente es el objetivo principal
                        de la gestión de calidad y contribuirá al éxito a largo plazo de su empresa.
                        Es importante atraer y sobre todo retener a los clientes, por lo que identificar y
                        calmar sus necesidades futuras es clave.</p>

                    <p class="lead"> <strong>Liderazgo</strong> </p>
                    <p style="text-align:justify;">Tener una dirección clara que provenga de un liderazgo sólido es esencial para garantizar
                        que todos en la organización comprendan el objetivo en común.</p>

                    <p class="lead"> <strong>Compromiso de las personas</strong> </p>
                    <p style="text-align:justify;">Atraer y crear un vínculo con sus clientes será más fácil si
                        cuenta con personas competentes y comprometidas en todos los niveles de su organización.</p>

                    <p class="lead"> <strong>Enfoque basado en procesos</strong> </p>
                    <p style="text-align:justify;">Es necesario que las personas que forman parte de la organización comprendan que todo es un
                        proceso y estén familiarizados con las actividades de estos. Así se genera empatía y todos se involucran en el objetivo final.</p>

                    <p class="lead"> <strong>Mejora</strong> </p>
                    <p style="text-align:justify;">Es necesario saber reaccionar a los cambios internos y externos si desea continuar brindando valor a sus clientes.
                        Esto es de suma importancia hoy en día cuando las condiciones evolucionan tan rápidamente y los cambios están a la orden del día.</p>

                    <p class="lead"> <strong>Toma de decisiones basada en evidencias</strong> </p>
                    <p style="text-align:justify;">Tomar decisiones nunca es fácil y, naturalmente, implica cierto grado de incertidumbre,
                        pero es más probable que garantizar que sus decisiones se basen en el análisis y la evaluación de datos produzca el resultado deseado.</p>

                    <p class="lead"> <strong>Gestión de relaciones</strong> </p>
                    <p style="text-align:justify;">Las empresas y organizaciones de hoy no funcionan en el vacío. Identificar
                        las relaciones importantes que tiene con las partes interesadas,
                        como sus proveedores, y establecer un plan para gestionarlas, impulsará el éxito sostenido.</p>

                </div>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            @include('partials.recientes', ['posts' => $posts ])
        </div>
    </div>


</div>
@endsection
