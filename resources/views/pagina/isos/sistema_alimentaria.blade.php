@extends('layouts.page')
@section('title','-NORMAS/SISTEMA_ALIMENTARIA')
@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/alimentaria.jpg') }}" class="card-img-top"
                    alt="sistemas-de-gestion">
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
                      <h3>Beneficios de implementar la ISO 22000:</h3>
                      <ol type="1" >
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
                      <h4 style="text-align: center">CONSIGUE UNA COTIZACIÓN<br>
                        ISO 20000</h4>
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