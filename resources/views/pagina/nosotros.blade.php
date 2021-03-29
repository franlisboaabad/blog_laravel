@extends('layouts.page')


@section('contenido')
<section class="features-icons bg-light text-center container">
    
    <div class="container"  style="margin: 0 auto;
    background: var(--card-color);
    color:rgb(0, 55, 70);
    width: 90%;
    padding: 20px;
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
    border-radius: 20px;">
        <h2 class="text-center">Nosotros</h2>
        <div class="row">
            
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-people m-auto text-primary"></i>
                    </div>
                    <h3>¿Quiénes Somos?</h3>
                    <p class="lead mb-0" style="text-align: justify;">Una de las consultoras técnicas 
                        especializadas más importantes del Perú. Nuestra trayectoria suma 18 años brindando servicios
                         en cuestión de Normas ISO en diversas partes de Latinoamérica.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3>Nuestra Misión</h3>
                    <p class="lead mb-0" style="text-align: justify;">Hacer que las organizaciones alcancen un nivel
                        global de funcionamiento a través de la implementación de los Sistemas Integrados de Gestión.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-eye m-auto text-primary"></i>
                    </div>
                    <h3>Nuestra visión</h3>
                    <p class="lead mb-0" style="text-align: justify;">En el 2025 seremos líderes en Latinoamérica en asesorías de temas relacionados a las Normas ISO.</p>
                </div>
            </div>
           </div>
    </div>
</section>


<!-- -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <h2 class="text-center" style="color:rgb(0, 55, 70);">Nuestros Valores</h2>
        <p class="lead mb-0" style="color:rgb(0, 55, 70);" style="text-align: justify;">Con el objetivo de cumplir nuestro propósito y en línea con nuestra más grande
            ambición como empresa, en OST CONSULTORES
            hemos creado una cultura de trabajo basada en cinco valores que nos permiten equipos de alto rendimiento y compromiso.</p>
<div class="row" >
   
        <div class="col-lg-2"  style="margin-left: 30px">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex">
                    <a href="" class=" m-auto text-primary">
                        <img src="{{ asset('../blog/img/valores/PASION-NORMAS.png') }}"  alt="" style="width: 100px; height:100px;">
                    </a>
                    <br>
                </div>
                <h3 style="color:rgb(0, 55, 70); font-size:25px">PASIÓN</h3>
                
            </div>
        </div>
        <div class="col-lg-2"  style="margin-left: 30px">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/valores/CONFIANZA-NORMAS.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a>
                        <br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70); font-size:25px">CONFIANZA</h3>
                    
                </div>
            </div>
            <div class="col-lg-2"  style="margin-left: 30px">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex">
                    <a href="" class=" m-auto text-primary">
                        <img src="{{ asset('../blog/img/valores/FLEXIBILIDAD-NORMAS.png') }}"  alt="" style="width: 100px; height:100px;">
                    </a>
                    <br>
                </div>
                <h3 style="color:rgb(0, 55, 70); font-size:25px">FLEXIBILIDAD</h3>
                
            </div>
        </div>
        <div class="col-lg-2"  style="margin-left: 30px">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
                <a href="" class=" m-auto text-primary">
                    <img src="{{ asset('../blog/img/valores/INTEGRIDAD-NORMAS.png') }}"  alt="" style="width: 100px; height:100px;">
                </a>
                <br>
            </div>
            <h3 style="color:rgb(0, 55, 70); font-size:25px">INTEGRIDAD</h3>
            
        </div>
    </div>

    <div class="col-lg-2"  style="margin-left: 30px">
    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
        <div class="features-icons-icon d-flex">
            <a href="" class=" m-auto text-primary">
                <img src="{{ asset('../blog/img/valores/TRANSPARENCIA-NORMAS.png') }}"  alt="" style="width: 100px; height:100px;">
            </a>
            <br>
        </div>
        <h3 style="color:rgb(0, 55, 70); font-size:25px">TRANSPARENCIA</h3>
    </div>   
    </div>
    </div>
    </div>
    
</section>
<!--expertos-->
<section class="showcase" >
    <h2 class="text-center" style="color:rgb(0, 55, 70);">NUESTRO EQUIPO EXPERTO</h2>
    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{ asset('blog/img/experto.jpg') }}'); margin: 30px auto;
            color:rgb(0, 55, 70);
            width: 90%;
            padding: 20px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
            border-radius: 20px;"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2 style="color:rgb(0, 55, 70);">CARLOS MARTÍNEZ
                   <br> Gerente General</h2>
                <p class="lead mb-0" style="text-align:justify;" style="color:rgb(0, 55, 70);">Especialista en Sistemas Integrados de Gestión, 
                    Implementación, Auditorías internas y Función de cumplimiento.</p>
            </div>
        </div>
    </div>
</section>

<!--certificacion-->
<section class="features-icons bg-light text-center">
    <div class="container">
        <h2 class="text-center" style="color:rgb(0, 55, 70);">Estamos certificados con:</h2>
        <div class="row" >
   
        <div class="col-lg-2">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex">
                    <a href="" class=" m-auto text-primary">
                        <img src="{{ asset('../blog/img/isos/ISO-26000-RESPONSABILIDAD-SOCIAL-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                    </a>
                    <br>
                </div>
                <h3 style="color:rgb(0, 55, 70); font-size:20px">ISO 26000:2010</h3>
                <p style="color:rgb(0, 55, 70);">RESPONSABILIDAD SOCIAL</p>
            </div>
        </div>
        <div class="col-lg-2">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-37001-SISTEMA-DE-GESTION-ANTISOBORNO-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a>
                        <br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70); font-size:20px">ISO 37001:2016</h3>
                    <p style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN ANTISOBORNO</p>
                    
                </div>
            </div>
            <div class="col-lg-2">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex">
                    <a href="" class=" m-auto text-primary">
                        <img src="{{ asset('../blog/img/isos/ISO-50001-SISTEMA-DE-GESTION-ENERGETICA-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                    </a>
                    <br>
                </div>
                <h3 style="color:rgb(0, 55, 70); font-size:20px">ISO 50001:2018</h3>
                <p style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN ENERGÉTICA</p>
            </div>
        </div>
        <div class="col-lg-2">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
                <a href="" class=" m-auto text-primary">
                    <img src="{{ asset('../blog/img/isos/ISO-45001-SISTEMA-DE-SEGURIDAD-Y-SALUD-EN-EL-TRABAJO-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                </a>
                <br>
            </div>
            <h3 style="color:rgb(0, 55, 70); font-size:20px">ISO 45001:2018</h3>
            <p style="color:rgb(0, 55, 70);">SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO</p>
            
        </div>
    </div>

    <div class="col-lg-2">
    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
        <div class="features-icons-icon d-flex">
            <a href="" class=" m-auto text-primary">
                <img src="{{ asset('../blog/img/isos/ISO-9001-SISTEMA-DE-GESTION-DE-CALIDAD-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
            </a>
            <br>
        </div>
        <h3 style="color:rgb(0, 55, 70); font-size:20px">ISO 9001:2015</h3>
            <p style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN DE CALIDAD</p>
    </div>   
    </div>
    <div class="col-lg-2">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
                <a href="" class=" m-auto text-primary">
                    <img src="{{ asset('../blog/img/isos/ISO-14001-SISTEMA-DE-GESTION-MEDIO-AMBIENTAL-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                </a>
                <br>
            </div>
            <h3 style="color:rgb(0, 55, 70); font-size:20px">ISO 14001:2015</h3>
            <p style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN MEDIO AMBIENTAL</p>
            
        </div>
    </div>
    </div>
    </div>
    
</section>

<!-- Call to Action -->
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h2 class="mb-4">¿Preparado para comenzar? ¡Regístrate ahora!</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form>
                    <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" class="form-control form-control-lg" placeholder="Ingrese su correo electrónico">
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-block btn-lg btn-primary" id="button_register">Registrarse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection