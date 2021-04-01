@extends('layouts.page')
@section('title','-NORMAS/SISTEMA_AMBIENTAL')
@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/ambiental.jpg') }}" class="card-img-top"
                    alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 14001:2015 SISTEMA DE GESTIÓN MEDIO AMBIENTAL</h5>
                    <p class="card-text text-justify">Durante los últimos años, la conciencia 
                        ambiental ha venido en aumento en todo el mundo. Esta toma de importancia hacia 
                        nuestro medio ambiente ha impulsado el crecimiento de la norma ISO 14001,
                         trazando un marco que una empresa u organización puede seguir para establecer 
                         un sistema de gestión ambiental eficaz. <br>

                        Esta norma internacional brinda garantía a la gerencia y los empleados
                         de la empresa, así como a las partes interesadas externas, de que el 
                         impacto ambiental se está midiendo y reduciendo a través de la evaluación
                          de los requisitos legales aplicables de sus actividades. Al asumir la
                           responsabilidad
                        ambiental se proyecta y refuerza la imagen comercialmente sostenible de la
                         empresa                 
                         
                      </p>
                      <h3>Beneficios:</h3>
                              



                      <div class="container">
                        <div class="row mt-5">
                                  
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('blog/img/calidad/hoja.png') }}" alt="Mejor tiempo"  style="width:80px; height:auto;">
                                <p>Control de los impactos ambientales derivados de la organización.</p>
                            </div>
        
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('blog/img/calidad/hoja.png') }}" alt="Mejor tiempo"  style="width:80px; height:auto;">
                                <p>Reducción en la utilización de materias primas y energía.</p>
                            </div>
                       
                        
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('blog/img/calidad/hoja.png') }}" alt="Mejor tiempo"  style="width:80px; height:auto;">
                                <p>Cumplimiento de la legislación ambiental.</p>
                            </div>
        
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('blog/img/calidad/hoja.png') }}" alt="Mejor tiempo"  style="width:80px; height:auto;">
                                <p>Mejora la imagen de la organización frente a autoridades reguladoras y el gobierno.</p>
                            </div>

                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('blog/img/calidad/hoja.png') }}" alt="Mejor tiempo"  style="width:80px; height:auto;">
                                <p>Demuestra compromiso con el medio ambiente.</p>
                            </div>
        
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset('blog/img/calidad/hoja.png') }}" alt="Mejor tiempo"  style="width:80px; height:auto;">
                                <p>Acceso a nuevos mercados.</p>
                            </div>
                          
                        </div>
                      </div>

                      <!-- -->
                      <h4 style="text-align: center">CONSIGUE UNA COTIZACIÓN<br>
                        ISO 14001</h4>
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