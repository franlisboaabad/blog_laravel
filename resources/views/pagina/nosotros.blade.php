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