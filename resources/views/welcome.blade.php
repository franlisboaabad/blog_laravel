@extends('layouts.page')

@section('contenido')
<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <h2 class="text-center" style="color:rgb(0, 55, 70);">¿Por qué elegirnos? </h2>
    <div class="container">
        <div class="row">
            
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-clock m-auto text-primary"></i>
                    </div>
                    <h3  style="color:rgb(0, 55, 70);">Mejor Tiempo</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">Cumplimos los plazos establecidos.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-people m-auto text-primary"></i>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">Equipo Especializado </h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">Nuestro equipo de expertos en materia de Normas ISO.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">Garantía De Resultados</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">Aseguramos resultados.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcases -->
<section class="showcase" >
    <h2 class="text-center" style="color:rgb(0, 55, 70);">Conoce Nuestros Servicios</h2>
    <div class="container-fluid p-0">
        <div class="row no-gutters">

            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{ asset('blog/img/sistemas_gestion.jpg') }}');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2 style="color:rgb(0, 55, 70);">Implementación de Sistemas de Gestión</h2>
                <p class="lead mb-0" style="text-align:justify;" style="color:rgb(0, 55, 70);">En nuestra empresa realizamos el servicio de Implementación de Sistemas de Gestión y nos enfocamos 
                    en lograr la certificación que necesita tu empresa. Garantizamos el cumplimiento de las necesidades y expectativas de nuestros clientes.
                    La implementación de un Sistema de Gestión le da un valor agregado a su organización e imagen institucional.
                    Las etapas para una correcta implementación abarcan un conjunto de pasos que pueden variar dependiendo de la realidad de cada empresa.
                    </p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{ asset('blog/img/auditoria.jpg') }}');"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2 style="color:rgb(0, 55, 70);">Auditoria Interna</h2>
                <p class="lead mb-0" style="text-align:justify;" style="color:rgb(0, 55, 70);">Nuestro servicio de auditoria consiste en una revisión de su Sistema 
                    de Gestión a través de la verificación de la información documentada y su nivel de implementación para determinar 
                    el grado de cumplimiento de los estándares.
                    Nuestro equipo de expertos en auditorías cuenta con experiencia en todo tipo de sectores e industrias, lo cual 
                    garantiza y supervisa el status de sus procesos, operaciones y proyectos para que se cumplan con las normativas internacionales.
                    </p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{ asset('blog/img/capacitacion.jpg') }}');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2 style="color:rgb(0, 55, 70);">Capacitación</h2>
                <p class="lead mb-0" style="text-align:justify;" style="color:rgb(0, 55, 70);">Nuestro servicio de capacitación se programa en acuerdo con su
                     organización. Nos adaptamos a su disponibilidad y posibilidades.
                    A través de la plataforma de ISO´s Teach, generamos las sesiones que necesite para compartir conocimiento y
                     experiencias de parte de nuestro equipo especializado.
                    Estas capacitaciones son guiadas por consultores expertos que están dispuestos y preparados para resolver 
                    cualquier duda y están orientadas al trabajo práctico.
                    Todos enseñan conceptos, aquí aprenderás cómo hacerlo.
                    </p>
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{ asset('blog/img/cumplimiento.jpg') }}');"></div>
        <div class="col-lg-6 my-auto showcase-text">
            <h2 style="color:rgb(0, 55, 70);">Función de cumplimiento</h2>
            <p class="lead mb-0" style="text-align:justify;" style="color:rgb(0, 55, 70);">Nuestro servicio de Función de Cumplimiento le ayuda a reducir riesgos de posibles incumplimientos 
                legales y garantizar la calidad además de cumplir con los requisitos reglamentarios.
                Cualquiera sea su rubro de actividad, necesita una supervisión de la gestión independiente para asegurar 
                que se respeten las normas y reglamentos vigentes.
                </p>
        </div>
    </div>
 </section>
<!-- isos -->
<section class="features-icons bg-light text-center">
        <div class="container">
            <h2 class="text-center" style="color:rgb(0, 55, 70);">Normas ISO</h2>
        <div class="row">
            
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-26000-RESPONSABILIDAD-SOCIAL-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a>
                        <br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">ISO 26000:2010</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">RESPONSABILIDAD SOCIAL</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-27001-SISTEMA-DE-GESTION-DE-SEGURIDAD-DE-LA-INFORMACION-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a><br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">ISO 27001:2018</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN DE SEGURIDAD DE LA INFORMACIÓN</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                             <img src="{{ asset('../blog/img/isos/ISO-22000-SISTEMA-DE-GESTION-DE-INOCUIDAD-ALIMENTARIA-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a><br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">ISO 22000:2018</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN DE INOCUIDAD ALIMENTARIA</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-14001-SISTEMA-DE-GESTION-MEDIO-AMBIENTAL-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a><br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">ISO 14001:2015</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN MEDIO AMBIENTAL</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-9001-SISTEMA-DE-GESTION-DE-CALIDAD-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a><br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">ISO 9001:2015</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN DE CALIDAD</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-37001-SISTEMA-DE-GESTION-ANTISOBORNO-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a><br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">ISO 37001:2016</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN ANTISOBORNO</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-45001-SISTEMA-DE-SEGURIDAD-Y-SALUD-EN-EL-TRABAJO-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a><br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">ISO 45001:2018</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">SISTEMA DE SEGURIDAD Y SALUD EN EL TRABAJO</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-39001-SISTEMA-DE-GESTION-DE-LA-SEGURIDAD-VIAL-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a><br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">ISO 39001:2018</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN DE LA SEGURIDAD VIAL</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <a href="" class=" m-auto text-primary">
                            <img src="{{ asset('../blog/img/isos/ISO-50001-SISTEMA-DE-GESTION-ENERGETICA-150x150.png') }}"  alt="" style="width: 100px; height:100px;">
                        </a><br>
                    </div>
                    <h3 style="color:rgb(0, 55, 70);">ISO 50001:2018</h3>
                    <p class="lead mb-0" style="color:rgb(0, 55, 70);">SISTEMA DE GESTIÓN ENERGÉTICA</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end isos-->
{{-- entradas de mi blog --}}
<section class="posts text-center bg-light mt-5">
    <div class="container">
        <h2 style="color:rgb(0, 55, 70);">Nuevas entradas</h2>
        <div class="row mt-5">
            @forelse($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ $post->get_imagen }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text text-justify">{{ $post->get_resumen }}</p>
                        <a href="{{ route('entrada', $post->id) }}" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            @empty
            <p style="color:rgb(0, 55, 70);">No hay entradas publicadas</p>
            @endforelse
        </div>

        <div class="center text-center mt-5">
            <a href="{{ route('entradas') }}" class="btn btn-success btn-sm" >Ver todas las entradas</a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials text-center bg-light">
    <div class="container" style="margin: 0px auto;
    background: #dfe3eb;
    color:rgb(0, 55, 70);
    width: 90%;
    padding: 20px;
    box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
    border-radius: 20px;">
        <h2 class="mb-5" style="color:rgb(0, 55, 70);">Nuestros clientes nos respaldan</h2>
        <div class="row">
            <div class="col-lg-4" style="margin: 0px auto;
            background: #dfe3eb;
            color:rgb(0, 55, 70);
            width: 90%;
            padding: 20px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
            border-radius: 10px;">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset('blog/img/Maria-Lu.jpeg') }}" alt="">
                    <h5>Maria Lu. </h5>
                    <p class="lead mb-0 descrption" style=" color: #0f5c87; font-size:14px">Gerente Administración en <br><b>INTERAMERICANA SAC</b></p>
                    <p class="font-weight-light mb-0" style="text-align:justify" style="color:rgb(0, 55, 70);">“Trabajar con OST CONSULTORES ha sido una gran experiencia. 
                        Nos han brindado el soporte técnico durante la implementación con los más altos estándares de calidad,
                        apoyándonos con mucha flexibilidad más aún en estos tiempos de pandemia por lo que el reto fue mayor, 
                        logrando el objetivo en el tiempo planificado. Certificar las 4 normas ISO.”</p>
                </div>
            </div>
            <div class="col-lg-4" style="margin: 0px auto;
            background: #dfe3eb;
            color:rgb(0, 55, 70);
            width: 90%;
            padding: 20px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
            border-radius: 10px;">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset('blog/img/PABLO-LI.jpg') }}" alt="">
                    <h5>Pablo Li.</h5>
                    <p class="lead mb-0 descrption" style=" color: #0f5c87; font-size:14px">Gerente de Operaciones en <br><b>MERCANTIL INTERAMERICANA S.A.C</b></p>
                    <p class="font-weight-light mb-0" style="text-align:justify" style="color:rgb(0, 55, 70);">“OST CONSULTORES ha sido un gran aliado 
                        en nuestro objetivo de implementar el Sistema Integrado de Gestión 
                        bajo el estándar ISO, cuentan con un staff de profesionales altamente 
                        capacitados los cuales han volcado su experiencia y conocimiento cumpliendo 
                        con nuestras expectativas y sobre todo en el 
                        tiempo acordado para la implementación y la ansiada certificación.”</p>
                </div>
            </div>
            <div class="col-lg-4" style="margin: 0 auto;
            background: #dfe3eb;
            color:rgb(0, 55, 70);
            width: 90%;
            padding: 20px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.377);
            border-radius: 10px;">
                <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                    <img class="img-fluid rounded-circle mb-3" src="{{ asset('blog/img/Pablo-Damian.jpeg') }}" alt="">
                    <h5>Pablo Damián.</h5>
                    <p class="lead mb-0 descrption"  style=" color: #0f5c87; font-size:14px">Gerente General Crosscheck Perú <br><b> Operador de Turismo</b></p>
                    <p class="font-weight-light mb-0" style="text-align:justify" style="color:rgb(0, 55, 70);">“Crosscheck Perú,
                         viene trabajando de la mano con OST CONSULTORES
                        desde hace más de un año en el cual siempre han demostrado alta calidad,
                         el soporte adecuado a nuestro personal y tecnología de punta en cada una 
                         de las certificaciones solicitadas.”</p>
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
