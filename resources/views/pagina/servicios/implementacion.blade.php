@extends('layouts.page')
@section('title','-SERVICIOS/IMPLEMENTACION')
@section('contenido')




<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('../blog/img/sistemas_gestion.jpg') }}" class="card-img-top"
                    alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">OST CONSULTORES TE OFRECE LOS MEJORES SERVICIOS--</h5>
                    <h2 style="text-align: center; color:rgb(0, 55, 70);">Implementación de Sistemas de Gestión</h2>
                    <p class="card-text text-justify"> En OST CONSULTORES realizamos el servicio de Implementación de Sistemas de Gestión y nos enfocamos en lograr la certificación que necesita tu empresa. Garantizamos el cumplimiento de las necesidades y expectativas de nuestros clientes.
                        La implementación de un Sistema de Gestión le da un valor agregado a su organización e imagen institucional.
                        Las etapas para una correcta implementación abarcan un conjunto de pasos que pueden variar dependiendo de la realidad de cada empresa.               
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

    <article>
        <div class="contenedor">
            <h3 style="text-align: center; color:rgb(0, 55, 70);">Pasos para tu certificación</h3>
            <br>
            <center><iframe width="80%" height="500px" src="https://www.youtube.com/embed/L1snKLCRNK8" title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
        </div>
    
    </article>
    
@endsection