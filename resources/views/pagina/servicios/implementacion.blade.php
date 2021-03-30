@extends('layouts.page')
@section('title','-SERVICIOS/IMPLEMENTACION')
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
<h2 style="text-align: center; color:rgb(0, 55, 70);">Implementación de Sistemas de Gestión</h2>
    <div class="contenedor dos-columnas">
        
        <article class="entrada-blog">            
        <img src="{{ asset('../blog/img/implementacion1.jpg') }}">
           
          
        </article>
        <article class="entrada-blog">
                <p style="color:rgb(0, 55, 70); text-align:justify">
                    En OST CONSULTORES realizamos el servicio de Implementación de Sistemas de Gestión y nos enfocamos en lograr la certificación que necesita tu empresa. Garantizamos el cumplimiento de las necesidades y expectativas de nuestros clientes.
                    La implementación de un Sistema de Gestión le da un valor agregado a su organización e imagen institucional.
                    Las etapas para una correcta implementación abarcan un conjunto de pasos que pueden variar dependiendo de la realidad de cada empresa.
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
    <article>
    <div class="contenedor">
        <h3 style="text-align: center; color:rgb(0, 55, 70);">Pasos para tu certificación</h3>
        <center><iframe width="80%" height="500px" src="https://www.youtube.com/embed/L1snKLCRNK8" title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
    </div>

    </article>
    
@endsection