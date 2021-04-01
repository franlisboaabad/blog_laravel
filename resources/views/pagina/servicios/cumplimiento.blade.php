@extends('layouts.page')
@section('title','- Función de cumplimiento')
<style>
    .masthead {
        display: none !important;
    }

</style>
@section('contenido')
<header class="masthead-internas text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h3 class="mb-5">FUNCIÓN DE CUMPLIMIENTO</h2>
            </div>
        </div>
    </div>
</header>


<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-5 mb-3">
                <img src="{{ asset('../blog/img/cumplimiento.jpg') }}" class="img-fluid" alt="ost funcion de cumplimiento">
            </div>

            <div class="col-md-7 mb-3 mt-3">
                <p class="text-justify">
                    Nuestro servicio de Función de Cumplimiento le ayuda a reducir riesgos de posibles incumplimientos
                    legales y garantizar la calidad además de cumplir con los requisitos reglamentarios.
                    Cualquiera sea su rubro de actividad, necesita una supervisión de la gestión independiente
                    para asegurar que se respeten las normas y reglamentos vigentes.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
