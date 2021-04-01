@extends('layouts.page')
@section('title','- ISO 26000:2010 Responsabilidad social')
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
                <h2 class="mb-5">ISO 26000:2010 <br>  RESPONSABILIDAD SOCIAL </h2>
            </div>
        </div>
    </div>
</header>


<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/responsabilidad_social.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 26000:2010 RESPONSABILIDAD SOCIAL</h5>
                    <p class="card-text text-justify">La responsabilidad social es un tema
                        permanente dentro de las empresas. Por ello, la norma ISO 26000 hace
                        énfasis en que el desempeño de una organización con la sociedad.
                        Esta norma proporciona orientación sobre los Principios y Materias Fundamentales de Responsabilidad Social que ayudan a integrar un comportamiento socialmente responsable
                        en cualquier organización del sector privado, público y sin fines de lucro.


                    </p>
                    <h5>Beneficios:</h5>
                    <ol type="1">
                        <li>Hace que la empresa sea más competitiva a nivel social.</li>
                        <li>Mejora su reputación e imagen.</li>
                        <li>Favorece la relación con sus trabajadores e interesados.</li>
                        <li>Atrae nuevos miembros de la organización o clientes.</li>
                        <li> Mejora la motivación, compromiso y productividad de los empleados.</li>
                    </ol>
                </div>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            @include('partials.recientes')
        </div>
    </div>
    @endsection
