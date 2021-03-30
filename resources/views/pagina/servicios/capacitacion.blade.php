@extends('layouts.page')
@section('title','-SERVICIOS/CAPACITACION')
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
    
    @media (min-width:480px) {
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
     
        <div class="contenedor dos-columnas">
            
            <article class="entrada-blog">            
            <img src="{{ asset('../blog/img/capacitacion.jpg') }}">
               
              
            </article>
            <article class="entrada-blog">
                <h2 style="text-align: center; color:rgb(0, 55, 70);">Capacitación</h2>
                    <p style="color:rgb(0, 55, 70); text-align:justify">
                        Nuestro servicio de capacitación se programa en acuerdo con su organización. Nos adaptamos a su disponibilidad y posibilidades.
                        A través de la plataforma de ISO´s Teach, generamos las sesiones que necesite para compartir conocimiento y experiencias de parte de nuestro equipo especializado.
                        Estas capacitaciones son guiadas por consultores expertos que están dispuestos y preparados para resolver cualquier duda y están orientadas al trabajo práctico.
                        Todos enseñan conceptos, aquí aprenderás cómo hacerlo.
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
        <br>
        <div class="contenedor dos-columnas">
            <article>
                <img class="img" src="{{ asset('../blog/img/teach.png') }}" alt="" style="max-width: 100% ; max-height:380px;" >
            </article>
            <article>
                <br>
                <h3 style="text-align: center; color:rgb(0, 55, 70);">ISO's PERÚ</h3>
                <p style="color:rgb(0, 55, 70); text-align:justify;">Organización especializada en potenciar y facilitar la adquisión de habilidades de
                     utilidad inmediata en las Normas Internacionales ISO. 
                    Revoluciona la metodología de enseñanza a través del usp de herramientas
                     tecnológicas y el soporte de socios estratégicos.</p>
              </article>
        </div>
@endsection