@extends('layouts.page')
@section('title','- ISO 45001:2018 Sistema de seguridad y salud en el trabajo')
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
                <h2 class="mb-5"> ISO 45001:2018 <br> SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO </h2>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/segu.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 45001:2018 SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO</h5>
                    <p class="card-text text-justify">Dedica tu Sistema de Gestión de Seguridad y Salud en el
                        trabajo con la norma ISO 45001. La norma recoge todos los requisitos necesarios con los
                        que una organización debe contar para poder garantizar la efectividad de sus productos y servicios. Destinada, además, para proteger a los trabajadores y visitantes de accidentes y enfermedades laborales. Esta fue desarrollada para
                        mitigar cualquier factor que pueda causar daños irreparables a los empleados o a la organización.
                    </p>


                    <h5>Beneficios:</h5>
                    <ol type="1">
                        <li>Reducción de la inestabilidad laboral y sus costes asociados</li>
                        <li>Garantizar un entorno de trabajo seguro para los empleados.</li>
                        <li>Disminución del absentismo laboral.</li>
                        <li>Mejora la productividad de la empresa.</li>
                        <li>Mayor comunicación y participación de los trabajadores de la empresa.</li>
                        <li>Mejora de la imagen pública de la empresa.</li>
                        <li>Mejora de la imagen de la empresa de cara a accionistas e inversores.</li>
                        <li>Proporciona un valor añadido a la empresa, diferenciándola respecto a la competencia.</li>


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
