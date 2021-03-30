@extends('layouts.page')
@section('title','-SERVICIOS/AUDITORIA')
@section('contenido')
<style>
img {
    max-width: 100%;
}

.contenedor {
    max-width: 1200px;
    width: 95%;
    margin: 0 auto;
}

@media (min-width:780px) {
    .dos-columnas {
        display: flex;
        justify-content: space-between;
    }
    .entrada-blog {
        flex-basis: calc(50% - 1rem);
    }
}

</style>
<br>
<h5 style="text-align: center; color:rgb(0, 55, 70);">OST CONSULTORES TE OFRECE LOS MEJORES SERVICIOS--</h5>
<h2 style="text-align: center; color:rgb(0, 55, 70);">Auditoria Interna</h2>
    <div class="contenedor dos-columnas">
        
        <article class="entrada-blog">            
        <img src="{{ asset('../blog/img/auditoria.jpg') }}">
           
          
        </article>
        <article class="entrada-blog">
                <p style="color:rgb(0, 55, 70); text-align:justify">
                    Nuestro servicio de auditoria consiste en una revisión de su Sistema de Gestión a través de la verificación
                     de la información documentada y su nivel de implementación para determinar el grado de cumplimiento de los estándares.
                    Nuestro equipo de expertos en auditorías cuenta con experiencia en todo tipo de sectores e industrias, 
                    lo cual garantiza y supervisa el status de sus procesos, operaciones y proyectos para que se cumplan 
                    con las normativas internacionales.

                </p>
           
                <div style="margin: 0px auto;
                background: #dfe3eb;
                color:rgb(0, 55, 70);
                width: 90%;
                padding: 20px;
                box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
                border-radius: 10px 0px 0px 0px;">
                <h4 >Contáctanos</h4>
                <ul>
                    <li>Edificio "Los Inkas" Centro Empresarial. Av. Circunvalación del Golf los Incas 208, Oficina 604A, Lima - Perú</li>
                    <li>contacto@isosperu.com</li>
                    <li>+51 939 499 998</li>
                </ul>
            </div> 
        </article>
    </div>
@endsection

