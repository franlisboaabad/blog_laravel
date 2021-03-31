@extends('layouts.page')
@section('title','-NORMAS/RESPONSABILIDAD_SOCIAL')
@section('contenido')
<div class="container">
<div class="row mt-5">
    <div class="col-md-8 mb-3">
        <div class="card">
            <img src="{{ asset('blog/img/responsabilidad_social.jpg') }}" class="card-img-top"
                alt="sistemas-de-gestion">
            <div class="card-body">
                <h5 class="card-title">ISO 26000:2010 RESPONSABILIDAD SOCIAL</h5>
                <p class="card-text text-justify">La responsabilidad social es un tema
                     permanente dentro de las empresas. Por ello, la norma ISO 26000 hace
                      énfasis en que el desempeño de una organización con la sociedad.
                       Esta norma proporciona orientación sobre los Principios y Materias Fundamentales de Responsabilidad Social que ayudan a integrar un comportamiento socialmente responsable 
                    en cualquier organización del sector privado, público y sin fines de lucro.
                    
                        
                  </p>
                  <h3>Beneficios:</h3>
                  <ol type="1">
                      <li>Hace que la empresa sea más competitiva a nivel social.</li>
                      <li>Mejora su reputación e imagen.</li>
                      <li>Favorece la relación con sus trabajadores e interesados.</li>
                      <li>Atrae nuevos miembros de la organización o clientes.</li>
                      <li>	Mejora la motivación, compromiso y productividad de los empleados.</li>
                  </ol>
                  <h4 style="text-align: center">CONSIGUE UNA COTIZACIÓN<br>
                    ISO 26000</h4>
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