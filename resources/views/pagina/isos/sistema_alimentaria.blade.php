@extends('layouts.page')
@section('title','- ISO 22000:2018 Sistema de gestión de inocuidad alimentaria')
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
                <h2 class="mb-5">ISO 27001:2018 <br>  SISTEMA DE GESTIÓN DE INOCUIDAD ALIMENTARIA </h2>
            </div>
        </div>
    </div>
</header>


<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/alimentaria.jpg') }}" class="card-img-top" alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">SISTEMA DE GESTIÓN DE INOCUIDAD ALIMENTARIA</h5>
                    <p class="card-text text-justify">La Norma ISO 22000 especifica los requerimientos de un
                        Sistema de Gestión para la seguridad alimentaria mediante la implementación de
                        programas de prerrequisitos y la metodología HACCP. En este sistema se aborda la
                        identificación, análisis y control de los peligros físicos, químicos, biológicos
                        y recientemente peligros radiológicos, con el fin de garantizar que los alimentos
                        sean seguros en el momento de su consumo humano.
                        Si bien esta norma es aplicable a todas las organizaciones sin distinción de rubro,
                        está más enfocada en aquellas que están relacionadas con el sector de alimentos y
                        son parte de la cadena alimentaria.


                    </p>
                    <h5>Beneficios de implementar la ISO 22000:</h5>
                    <ol type="1">
                        <li>Proyección y crecimiento de la empresa en el mundo, abriendo puertas hacia la exportación.</li>
                        <li>El estándar hace que las organizaciones perfeccionen sus procesos y cada día garanticen más calidad y seguridad en la cadena alimentaria. De este modo se entra en un ciclo de
                            responsabilidad y crecimiento que dirige a la empresa en la buena dirección.</li>
                        <li>Permite que las empresas sean confiables y transparentes, que los consumidores
                            se sientan seguros y así, impulsar su crecimiento.</li>
                        <li>Ofrece una comunicación eficaz y organizada, en la que están implicadas todas y cada una de las partes interesadas.</li>

                    </ol>
                    <p style="text-align: justify;">Entendiendo la alta regulación que
                        tiene el sector de alimentos para asegurar la calidad de los productos
                        alimenticios, ISO’s Perú se compromete a asesorar a tu organización con
                        el cumplimiento de las exigencias requeridas
                        por los entes regulatorios y que sigan siendo competitivas en el mercado.</p>
                    
                </div>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            @includeIf('partials.recientes', ['posts' => $posts ])
        </div>
    </div>
</div>
    @endsection
