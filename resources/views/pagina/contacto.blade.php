@extends('layouts.page')
@section('title','-CONTACTO')
@section('contenido')
<style>
    :root {
    --colorTextos: #ffffff;
}


*,
::before,
::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



h1{
    text-align: center;
    font-weight: 700;
}

.form_1{
    background: rgb(159, 202, 227,0.8);
    padding: 40px 0;
    box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    height: 650px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form{
    width: 100%;
    margin: auto;
}

form .grupo{
    position: relative;
    margin: 45px ;
}

input{
    background: none;
    color: #ffffff;
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid var(--colorTextos);
}

input:focus{ 
    outline: none;
    color: #ffffff;
}

label{
    color: var(--colorTextos);
    font-size: 16px;
    position: absolute;
    left: 5px;
    top: 10px;
    transition: 0.5s ease all;
    pointer-events: none;
}

input:focus~label,
input:valid~label{
    top: -14px;
    font-size: 12px;
    color: #ffffff;
}

.barra{
    position: relative;
    display: block;
    width: 100%;
}

.barra::before{
    content: "";
    height: 2px;
    width: 0%;
    bottom: 0;
    position: absolute;
    background: linear-gradient(to right, #35257e, #2b8894);
    transition: 0.3s ease width;
    left: 0;
}

input:focus~.barra::before{
    width: 100%;
}


.button1{
    font-family: 'roboto';
    font-weight: bold;
    background: #4568DC;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right,  #35257e, #2b8894);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right,  #35257e, #2b8894);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    border: none;
    display: block;
    width: 80%;
    margin: 10px auto;
    color: #fff;
    height: 40px;
    font-size: 20px;
    cursor: pointer;
}
.button1:hover{
    background: #18d855;
}

@media screen and (max-width:500px){
    form{
        width: 80%;
    }
}

    </style>
<br>
<h5 style="text-align: center; font-size:15px; color:rgb(0, 55, 70);">--LISTOS PARA ATENDERTE</h5>
<h3 style="text-align: center; color:rgb(0, 55, 70);">Datos de contacto</h3>
<section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
            
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-home m-auto text-primary"></i>
                    </div>
                    <h5  style="color:rgb(0, 55, 70); font-size:13px;" >Nuestra Oficina</h5>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70); font-size:13px;">Edificio "Los Inkas" Centro Empresarial. <br> Av. Circunvalación del Golf los Incas 208, <br> Oficina 604A, Lima - Perú</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-phone m-auto text-primary"></i>
                    </div>
                    <h5 style="color:rgb(0, 55, 70); font-size:13px;">Comunícate a nuestro Call Center </h5>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70); font-size:13px;">+51 923 673 544</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-envelope m-auto text-primary"></i>
                    </div>
                    <h5 style="color:rgb(0, 55, 70); font-size:13px;" >Escríbenos a</h5>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70); font-size:13px;">contacto@isosperu.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact contenedor" style="background-image: url('{{ asset('../blog/img/contacto.jpg') }}');">
<div class="contenedor" style="max-width: 600px; align-content:center;">
<form class="form_1" action="" method="POST" id="form">
    <div class="form">
        <h3 style="text-align:center; color:white; -webkit-text-stroke: 1px black;">Escríbenos y <br>Resolveremos tus Dudas</h3>
        <div class="grupo">
            <input type="text" name="nombres" id="nombres" required><span class="barra"></span>
            <label for="">Nombres</label>
        </div>
        <div class="grupo">
            <input type="email" name="" id="email" required><span class="barra"></span>
            <label for="">Correo Eléctronico</label>
        </div>
        <div class="grupo">
            <input type="number" name="celular" id="celular" required><span class="barra"></span>
            <label for="">Celular</label>
        </div>
        <div class="grupo">
            <input type="number" name="ruc" id="ruc" required><span class="barra"></span>
            <label for="">Ruc</label>
        </div>
        <div class="grupo">
            <input type="textArea" name="mensaje" id="mensaje" required><span class="barra"></span>
            <label for="">Mensaje</label>
        </div>

        <button class="button1" type="submit">ENVIAR</button>
    </div>
</form>

</div>
</section>
@endsection