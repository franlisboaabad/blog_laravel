@extends('layouts.page')
@section('title','-SERVICIOS/CUMPLIMIENTO')
@section('contenido')






<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('../blog/img/cumplir.jpg') }}" class="card-img-top"
                    alt="sistemas-de-gestion">
                <div class="card-body">
                    <br>
                    <h5 class="card-title">OST CONSULTORES TE OFRECE LOS MEJORES SERVICIOS--</h5>
                    <h2>Función de cumplimiento</h2>
                    <p class="card-text text-justify"> Nuestro servicio de Función de Cumplimiento le ayuda a reducir riesgos de posibles incumplimientos
                        legales y garantizar la calidad además de cumplir con los requisitos reglamentarios.
                       Cualquiera sea su rubro de actividad, necesita una supervisión de la gestión independiente 
                       para asegurar que se respeten las normas y reglamentos vigentes.              
                      </p>

                </div>
                
            </div>
        </div>
    
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/servicio.jpg') }}" class="card-img-top" alt="auditoria">
                <div class="card-body">
                    <h5 class="card-title">Nuestros Servicios</h5>
                    
                <nav class="nav-item">
                    <a class="dropdown-item" href="{{ route('implementacion') }}">Implementación De Sistemas De Gestión</a>
                    <a class="dropdown-item" href="{{ route('auditoria') }}">Auditoria Interna</a>
                    <a class="dropdown-item" href="{{ route('capacitacion') }}">Capacitación</a>
                    <a class="dropdown-item" href="{{ route('cumplimiento') }}">Función De Cumplimiento</a>
                </nav>
                <br>
                    <h4 >Contáctanos</h4>
                <ul>
                    <li>Edificio "Los Inkas" Centro Empresarial. Av. Circunvalación del Golf los Incas 208, Oficina 604A, Lima - Perú</li>
                    <li>contacto@isosperu.com</li>
                    <li>+51 939 499 998</li>
                </ul>
            </div>
                
            </div>
        </div>
    </div>

    
@endsection