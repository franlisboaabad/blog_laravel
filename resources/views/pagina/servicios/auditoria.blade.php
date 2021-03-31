@extends('layouts.page')
@section('title','-SERVICIOS/AUDITORIA')
@section('contenido')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('../blog/img/auditoria.jpg') }}" class="card-img-top"
                    alt="sistemas-de-gestion">
                <div class="card-body">
                    <br>
                    <h5 class="card-title">OST CONSULTORES TE OFRECE LOS MEJORES SERVICIOS--</h5>
                    <h2>Auditoria Interna</h2>
                    <p class="card-text text-justify"> Nuestro servicio de auditoria consiste en una revisión de su Sistema de Gestión a través de la verificación
                        de la información documentada y su nivel de implementación para determinar el grado de cumplimiento de los estándares.
                       Nuestro equipo de expertos en auditorías cuenta con experiencia en todo tipo de sectores e industrias, 
                       lo cual garantiza y supervisa el status de sus procesos, operaciones y proyectos para que se cumplan 
                       con las normativas internacionales.          
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
        <div class="row mt-5">
            <article class="col-md-4">
                <img class="img" src="{{ asset('../blog/img/teach.png') }}" alt="" style="max-width: 100% ; max-height:380px;" >
            </article>
            <article class="col-md-8">
                <h3>ISO's PERÚ</h3>
                <p style=" text-align:justify;">Organización especializada en potenciar y facilitar la adquisión de habilidades de
                     utilidad inmediata en las Normas Internacionales ISO. 
                    Revoluciona la metodología de enseñanza a través del usp de herramientas
                     tecnológicas y el soporte de socios estratégicos.</p>
              </article>
        </div>

@endsection

