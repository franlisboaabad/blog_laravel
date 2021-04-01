@extends('layouts.page')
@section('title','- NORMAS')
@section('contenido')
<section class="text-center mt-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/responsabilidad_1.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">
                            ISO 26000:2010 RESPONSABILIDAD SOCIAL 
                        </h5>
                        <a href="{{ route('responsabilidad_social') }}">Leer mas..</a>
                    </div>
                  
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/seguridad_1.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">
                            ISO 27001:2018 SISTEMA DE GESTIÓN DE SEGURIDAD DE LA INFORMACIÓN 
                        </h5>
                        <a href="{{ route('sistema_gestion') }}">Leer mas..</a>
                    </div>
                  
                </div>
            </div>


            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/alimentaria_1.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">
                            ISO 22000:2018 SISTEMA DE GESTIÓN DE INOCUIDAD ALIMENTARIA 
                        </h5>
                        <a href="{{ route('sistema_alimentaria') }}">Leer mas..</a>
                    </div>
                  
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/ambiental_1.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">
                            ISO 14001:2015 SISTEMA DE GESTIÓN MEDIO AMBIENTAL 
                        </h5>
                        <a href="{{ route('sistema_ambiental') }}">Leer mas..</a>
                    </div>
                  
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/calidad_1.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">
                            ISO 9001:2015 SISTEMA DE GESTIÓN DE CALIDAD 
                        </h5>
                        <a href="{{ route('sistema_calidad') }}">Leer mas..</a>
                    </div>
                  
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/soborno_1.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">
                            ISO 37001:2016 SISTEMA DE GESTIÓN ANTISOBORNO 
                        </h5>
                        <a href="{{ route('sistema_antisoborno') }}">Leer mas..</a>
                    </div>
                  
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/trabajo_1.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">
                            ISO 45001:2018 SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO 
                        </h5>
                        <a href="{{ route('sistema_trabajo') }}">Leer mas..</a>
                    </div>
                  
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/vial_1.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">
                            ISO 39001:2018 SISTEMA DE GESTIÓN DE LA SEGURIDAD VIAL 
                        </h5>
                        <a href="{{ route('sistema_vial') }}">Leer mas..</a>
                    </div>
                  
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('blog/img/energetica_1.jpg') }}" class="card-img-top"
                        alt="sistemas-de-gestion">
                    <div class="card-body">
                        <h5 class="card-title">
                            ISO 50001:2018 SISTEMA DE GESTIÓN ENERGÉTICA 
                        </h5>
                        <a href="{{ route('sistema_energetica') }}">Leer mas..</a>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
@endsection