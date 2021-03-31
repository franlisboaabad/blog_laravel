@extends('layouts.page')
@section('title','-NORMAS/SISTEMA_ANTISOBORNO')
@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('blog/img/soborno.jpg') }}" class="card-img-top"
                    alt="sistemas-de-gestion">
                <div class="card-body">
                    <h5 class="card-title">ISO 37001: 2016 SISTEMA DE GESTIÓN ANTISOBORNO</h5>
                    <p class="card-text text-justify">Norma internacional diseñada para ayudar a las organizaciones a implementar un sistema de gestión contra el soborno. Especifica una serie de medidas que su organización 
                        puede implementar para ayudar a prevenir, detectar y tratar el soborno.                 
                        
                      </p>
                      <h3>Beneficios:</h3>
                      <ol type="1" >
                          <li> La apertura de su organización al escrutinio
                               externo de la eficacia de sus políticas y procesos contra el soborno.</li>
                          <li> La demostración del cumplimiento de la legislación pertinente, 
                              como la Ley Anti soborno del Reino Unido del 2010.</li>
                          <li>La colaboración con las partes interesadas para supervisar y administrar el
                               riesgo en toda la organización y la cadena de suministro.</li>
                          <li>Asegura que los proveedores, subcontratistas y agentes estén
                               comprometidos con las mejores prácticas contra el soborno.</li>
                        
                          
                      </ol>
                      
                      <h4 style="text-align: center">CONSIGUE UNA COTIZACIÓN<br>
                        ISO 37001</h4>
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