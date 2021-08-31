@extends('layouts.page')
@section('title', 'Nosotros')
@section('contenido')
<style>
    .card{
        height: 300px;
    }
</style>
<section>

    <div class="container my-5">

        <section id="nosotros" style="margin-top: 30px">
            <div class="row"">
        <div class=" col-md-4 mb-3">
                <img src="{{asset('turismo/images/ideaspiuratours/ideaspiuratours.png')}}" alt="Piura trips" class="img-fluid" style="border-radius:50%">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7 mb-3">
                <div class="space" style="margin-top: 50px;"></div>
                <h3 class="">Acerca de Nosotros</h3>
                <p class="text-justify"><b>"IDEAS PIURA TOURS"</b> <br> <br>
                    Empresa de turismo conformada por un equipo multidisciplinario, liderado por profesionales, la atención al detalle y nuestro experimentado personal son algunas de las características con las que logramos operaciones exitosas y posición de liderazgo. Nuestras experiencias incluyen historia, cultura viva, arqueología, naturaleza, familia, romance, salud y bienestar, gastronomía, aventura y cruceros amazónicos.
                </p>
            </div>
    </div>
</section>


<section id="historia" style="margin-top:30px">
    <h3>Nuestra Historia</h3>
    <p class="text-justify"> La Agencia de Viajes y Turismo Ideas Piura Tours EIRL con RUC 20604249296 y oficina comercial ubicada en calle Junín 651 (referencias espaladas del hotel costa del sol Piura). Tiene el agrado de presentarse ante ustedes con la finalidad de ofrecerles nuestra amplia variedad de productos y servicios turísticos, siendo una excelente alternativa en la elección que Usted y su Institución educativa requiera.  
    </p>
    <p class="text-justify">
        Nuestra empresa está establecida en el mercado de agencia de viajes desde varios años dedicándose a la actividad turística en todas sus ramas, ofreciéndoles servicios de calidad, con personal altamente capacitado, haciendo que se sienta a gusto con nuestros servicios, teniendo alianzas con los mejores Operadores de Servicios Turísticos del país, contando con el permiso del DIRCETUR y a la vez inscritos en IPERU así como APAVIT.
</section>



<section id="valores">

    <div class="row" style=" margin-top: 30px ;margin-bottom:30px">
        <div class="col-md-4 mb-3" style="margin-bottom: 30px">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Misión</h3>
                    <p class="card-text text-justify">Nuestra misión es hacer realidad la ilusión de viajar de nuestros clientes y convertirla en experiencias de gran satisfacción, además, contribuir con el desarrollo del turismo en toda nuestra región, llevando alternativa de desarrollo social y económico a destinos emergentes. </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3" style="margin-bottom: 30px">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Visión</h3>
                    <p class="card-text text-justify">Ser la Agencia de Viajes y Operadora de Turismo líder en la Región Piura, por la seguridad, confianza y experiencia que le ofrecemos a nuestros clientes, brindando servicios de óptima calidad, responsabilidad social y ambiental. <br> <br> </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3" style="margin-bottom: 30px">
            <div class="card">

                <div class="card-body">
                    <h3 class="text-center">Valores</h3>
                    <p class="card-text text-justify">Confianza, Responsabilidad, Puntualidad y Calidad.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section style="margin-top: 30px; margin-bottom:30px">
    <div class="row text-center">
        <div class="col-md-3">
            <img src="{{ asset('turismo/images/ideaspiuratours/mincetur_web.png') }}" alt="Mincetur ideaspiuratours" class="img-fluid">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('turismo/images/ideaspiuratours/dircetur_web.png') }}" alt="Dircetur ideaspiuratours" class="img-fluid">
        </div>
         <div class="col-md-3">
            <img src="{{ asset('turismo/images/ideaspiuratours/iperu_web.png') }}" alt="I peru ideaspiuratours" class="img-fluid">
        </div>
         <div class="col-md-3">
            <img src="{{ asset('turismo/images/ideaspiuratours/apavit_web.png') }}" alt="Apavit ideaspiuratours" class="img-fluid">
        </div>
    </div>
</section>


</div>

</section>
@endsection
