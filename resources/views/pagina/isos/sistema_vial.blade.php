@extends('layouts.page')
@section('title','-NORMAS/SISTEMA_VIAL')
@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/vial.jpg') }}" class="card-img-top"
                    alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 39001:2018 SISTEMA DE GESTIÓN DE LA SEGURIDAD VIAL</h5>
                    <p class="card-text text-justify">La norma ISO 39001 establece los requisitos 
                        mínimos para un sistema de gestión de la seguridad del tráfico en carretera. 
                        Se aplica a entidades públicas y privadas que interactúan con el sistema vial;
                         la cual les permite ayudar a las organizaciones
                         a reducir el riesgo de muerte y heridas derivadas de los accidentes de tráfico.               
                      </p>

                      
                      <h5>Beneficios:</h5>
                      <ol type="1" >
                          <li>Uno de los efectos inmediatos de la sistematización de la gestión de la seguridad vial en base a la 39001 es la reducción de accidentes de tráfico.</li>
                          <li>Reducción de costes en cuestiones de reparación de vehículos, mantenimiento, primas de seguros, etc.</li>
                          <li>Mejora del ambiente laboral mediante la sensibilización del personal en la seguridad vial.</li>
                          <li>Mejora la imagen de la empresa respecto a sus clientes y proveedores.</li>
                                                 
                          
                      </ol>

                      <br>

                      <p class="card-text text-justify">La certificación de un Sistema de Gestión de Seguridad Vial, 
                          demuestra una apuesta clara y decidida por la correcta 
                          gestión y por la mejora continua de las condiciones de seguridad vial de la organización.</p>
                      <h4 style="text-align: center">CONSIGUE UNA COTIZACIÓN<br>
                        ISO 39001</h4>
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