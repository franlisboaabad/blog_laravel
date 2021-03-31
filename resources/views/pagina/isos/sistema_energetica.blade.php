@extends('layouts.page')
@section('title','-NORMAS/SISTEMA_ENERGETICA')
@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/energia.jpg') }}" class="card-img-top"
                    alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 50001:2018 SISTEMA DE GESTIÓN ENERGÉTICA</h5>
                    <p class="card-text text-justify">Norma internacional basada en el Sistema de Gestión Energética dedicada
                         a desarrollar e implantar su política energética, así como a gestionar aquellos elementos de sus actividades,
                          productos o servicios que interactúan con el uso de la energía. La norma ISO 50001 establece los requisitos 
                          que debe poseer un Sistema de Gestión Energética, 
                        con el fin de realizar mejoras continuas y sistemáticas del rendimiento energético de las organizaciones.                 
                        
                            
                      </p>
                      <h3>Beneficios:</h3>
                      <ol type="1" >
                          <li>Ahorro energético y económico.</li>
                          <li>Reducción de costes empresariales.</li>
                          <li>Ayuda en el cumplimiento de la gestión vigente.</li>
                          <li>Impulsar la eficiencia energética.</li>
                       
                          
                      </ol>
                      
                      <h4 style="text-align: center">CONSIGUE UNA COTIZACIÓN<br>
                        ISO 50001</h4>
                      <form action="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="nombres">Nombres:</label>
                                <input type="text" class="form-control" id="nombres" placeholder="Nombres">
                              </div>
                              <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Correo Eléctronico">
                              </div>
                        </div>
                          <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="razon_social">Razón Social</label>
                                <input type="text" class="form-control" id="razon_social" placeholder="Razón Social">
                              </div>
                              <div class="form-group">
                                <label for="ruc">Ruc:</label>
                                <input type="number" class="form-control" id="ruc" placeholder="Ruc">
                              </div>
                              </div>
                           </div>   
                          
                          <button type="submit" class="btn btn-primary" style="background-color: #000080;">AGENDAR CITA</button>
                      </form>
                </div>
                
            </div>
        </div>
    
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/social.jpg') }}" class="card-img-top" alt="auditoria">
                <div class="card-body">
                    <h5 class="card-title">Noticias recientes</h5>
                    <nav>
                        <ul>
                            <li><a href="">Los 5 beneficios de implementar un SIG en tu organización</a></li>
                            <li><a href="">ISO 14001: Gestión Ambiental en la organización </a></li>
                            <li><a href="">EMPRESA SEGUREA, LIBRE DE VIOLENCIA Y DISCRIMINACIÓN CONTRA LA MUJER</a></li>
                        </ul>
                    </nav>
                </div>
                
            </div>
        </div>
    </div>
@endsection