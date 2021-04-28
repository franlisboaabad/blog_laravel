@extends('layouts.page')
@section('title','- Nosotros')
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
                <h2 class="mb-5">NOSOTROS</h2>
            </div>
        </div>
    </div>
</header>


{{-- Acerca de --}}
<section>
    <div class="container my-5">
        <h2 style="color: #006fb1">Acerca de nosotros</h2>
        <div class="log text-center">
            <img src="{{ asset('blog/img/ostconsultores.jpg') }}" alt="ost consultores" class="img-fluid" width="400px">
        </div>
        <p class="text-justify"> <strong>OST CONSULTORES</strong> de las consultoras técnicas especializadas más importantes del Perú. Nuestra trayectoria suma 10 años brindando servicios en cuestión de Normas ISO en diversas partes de Latinoamérica.</p>
    </div>
</section>


<section>
    <div class="container mt-5">
        <div class="mision mt-4">
            <h3 style="color: #006fb1">Mision</h3>
            <p class="text-justify">Hacer que las organizaciones alcancen un nivel global de funcionamiento a través de la implementación de los Sistemas Integrados de Gestión.</p>
        </div>


        <div class="vision mt-4">
            <h3 style="color: #006fb1">Visión</h3>
            <p class="text-justify">En el 2025 seremos líderes en Latinoamérica en asesorías de temas relacionados a las Normas ISO.</p>
        </div>


        <div class="valores mt-4">
            <h3 style="color: #006fb1">Nuestros valores</h3>
            <p class="text-justify">Con el objetivo de cumplir nuestro propósito y en línea con nuestra más grande ambición como empresa, en ISO´s Perú hemos creado una cultura de trabajo basada en cinco valores que nos permiten equipos de alto rendimiento y compromiso.</p>
        </div>

        <ul>
            <li>PASIÓN</li>
            <li>CONFIANZA</li>
            <li>FLEXIBILIDAD</li>
            <li>INTEGRIDAD</li>
            <li>TRANSPARENCIA</li>
        </ul>


    </div>


</section>


<section class="text-center mt-5 mb-3">
    <div class="container">

        <h2 class="text-center" style="color: #006fb1">Certificaciones</h2>

        <div class="row mt-5">

            <div class="col-lg-4 mb-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="#!" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-26000-RESPONSABILIDAD-SOCIAL-150x150.png') }}" alt="" style="width: 100px; height:100px;">
                        </a>
                        <br>
                    </div>
                    <h5  class="mt-3" style="color:rgb(0, 55, 70);">ISO 26000:2010</h5>
                    <p style="color:rgb(0, 55, 70);">RESPONSABILIDAD SOCIAL</p>
                </div>
            </div>


            <div class="col-lg-4 mb-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="#!" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-37001-SISTEMA-DE-GESTION-ANTISOBORNO-150x150.png') }}" alt="" style="width: 100px; height:100px;">
                        </a>
                        <br>
                    </div>
                    <h5  class="mt-3" style="color:rgb(0, 55, 70);">ISO 37001:2016</h5>
                    <p style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN ANTISOBORNO</p>
                </div>
            </div>



            <div class="col-lg-4 mb-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="#!" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-50001-SISTEMA-DE-GESTION-ENERGETICA-150x150.png') }}" alt="" style="width: 100px; height:100px;">
                        </a>
                        <br>
                    </div>
                    <h5  class="mt-3" style="color:rgb(0, 55, 70);">ISO 50001:2018</h5>
                    <p style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN ENERGÉTICA</p>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="#!" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-45001-SISTEMA-DE-SEGURIDAD-Y-SALUD-EN-EL-TRABAJO-150x150.png') }}" alt="" style="width: 100px; height:100px;">
                        </a>
                        <br>
                    </div>
                    <h5  class="mt-3" style="color:rgb(0, 55, 70);">ISO 45001:2018</h5>
                    <p style="color:rgb(0, 55, 70);">SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO</p>
                </div>
            </div>


            <div class="col-lg-4 mb-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="#!" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-9001-SISTEMA-DE-GESTION-DE-CALIDAD-150x150.png') }}" alt="" style="width: 100px; height:100px;">
                        </a>
                        <br>
                    </div>
                    <h5  class="mt-3" style="color:rgb(0, 55, 70);">ISO 9001:2015</h5>
                    <p style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN DE CALIDAD</p>
                </div>
            </div>

            <div class="col-lg-4 mb-3">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="#!" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-14001-SISTEMA-DE-GESTION-MEDIO-AMBIENTAL-150x150.png') }}" alt="" style="width: 100px; height:100px;">
                        </a>
                        <br>
                    </div>
                    <h5  class="mt-3" style="color:rgb(0, 55, 70);">ISO 14001:2015</h5>
                    <p style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN MEDIO AMBIENTAL</p>
                </div>

            </div>
</section>
@endsection
