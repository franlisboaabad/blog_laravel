@extends('layouts.page')
@section('title','-NORMAS/SISTEMA_TRABAJO')
@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/segu.jpg') }}" class="card-img-top"
                    alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 45001:2018 SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO</h5>
                    <p class="card-text text-justify">Dedica tu Sistema de Gestión de Seguridad y Salud en el
                         trabajo con la norma ISO 45001. La norma recoge todos los requisitos necesarios con los
                          que una organización debe contar para poder garantizar la efectividad de sus productos y servicios. Destinada, además, para proteger a los trabajadores y visitantes de accidentes y enfermedades laborales. Esta fue desarrollada para 
                        mitigar cualquier factor que pueda causar daños irreparables a los empleados o a la organización.               
                      </p>

                      
                      <h5>Beneficios:</h5>
                      <ol type="1" >
                          <li>Reducción de la inestabilidad laboral y sus costes asociados</li>
                          <li>Garantizar un entorno de trabajo seguro para los empleados.</li>
                          <li>Disminución del absentismo laboral.</li>
                          <li>Mejora la productividad de la empresa.</li>
                          <li>Mayor comunicación y participación de los trabajadores de la empresa.</li>
                          <li>Mejora de la imagen pública de la empresa.</li>
                          <li>Mejora de la imagen de la empresa de cara a accionistas e inversores.</li>
                          <li>Proporciona un valor añadido a la empresa, diferenciándola respecto a la competencia.</li>
                       
                          
                      </ol>
                      
                      <h4 style="text-align: center">CONSIGUE UNA COTIZACIÓN<br>
                        ISO 45001</h4>
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