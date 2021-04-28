@extends('layouts.page')
@section('title','- Implementacion de sistemas de gestión')
<style>
    .masthead {
        display: none !important;
    }


    .bg-slider {
        display: none !important
    }

</style>
@section('contenido')

<!-- Masthead -->
<header class="masthead-internas text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h2 class="mb-5">IMPLEMENTACIÓN DE SISTEMAS DE GESTIÓN</h2>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-5 mb-3">
                <img src="{{ asset('blog/img/sistemas_gestion.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-7 mb-3 mt-3">
                <p class="text-justify">
                    En OST CONSULTORES realizamos el servicio de Implementación de Sistemas de Gestión y nos enfocamos en lograr la certificación que necesita tu empresa. Garantizamos el cumplimiento de las necesidades y expectativas de nuestros clientes. La implementación de un Sistema de Gestión le da un valor agregado a su organización e imagen institucional. Las etapas para una correcta implementación abarcan un conjunto de pasos que pueden variar dependiendo de la realidad de cada empresa.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
