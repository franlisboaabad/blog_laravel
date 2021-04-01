@extends('layouts.page')
@section('title','- Capacitación')

<style>
    .masthead { display: none !important; }
</style>

@section('contenido')
<header class="masthead-internas text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mx-auto">
                <h3 class="mb-5">CAPACITACIÓN</h2>
            </div>
        </div>
    </div>
</header>


<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-5 mb-3">
                 <img src="{{ asset('../blog/img/capacitacion.jpg') }}" class="img-fluid">
            </div>

            <div class="col-md-7 mb-3 mt-3">
                <p class="text-justify"> Nuestro servicio de capacitación se programa en acuerdo con su organización. Nos adaptamos a su disponibilidad y posibilidades.
                        A través de la plataforma de ISO´s Teach, generamos las sesiones que necesite para compartir conocimiento y experiencias de parte de nuestro equipo especializado.
                        Estas capacitaciones son guiadas por consultores expertos que están dispuestos y preparados para resolver cualquier duda y están orientadas al trabajo práctico.
                        Todos enseñan conceptos, aquí aprenderás cómo hacerlo.</p>
            </div>
        </div>
    </div>
</section>


@endsection