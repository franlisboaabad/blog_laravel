@extends('layouts.page')
@section('title','Agencia de viajes y turismo')
<style>
    #caption {
        margin-bottom: 250px;
    }

</style>
@section('contenido')

<!-- start of hero -->
<section class="hero hero-slider-wrapper hero-style-2">
    <div class="hero-slider">
        <div class="slide">
            <img src="{{asset('turismo/images/slider/slider-banner-1.jpg')}}" alt class="slider-bg">
            <div class="container">
                {{-- <div class="row">
                    <div class="col col-lg-7 col-sm-10 slide-caption" id="caption">
                        <h3 style="color:white;">PIURA TRIPS</h3>
                        <p style="color:white;">Les da la bienvenida al mundo de los viajes y el turismo en la ciudad del eterno calor, nuestra experiencia combinada en el sector turístico nos permite hacer realidad tu viaje soñado.</p>
                        <a href="{{route('servicios') }}" class="theme-btn">Nuestro servicios</a>
                <a href="{{route('contacto') }}" class="theme-btn">Contáctanos</a>
            </div>
        </div> --}}
    </div>
    </div>

    <div class="slide">
        <img src="{{asset('turismo/images/slider/slider-banner-2.jpg')}}" alt class="slider-bg">
        <div class="container">
            {{-- <div class="row">
                    <div class="col col-lg-7 col-sm-10 slide-caption" id="caption">
                        <h3 style="color:white;">NUESTROS SERVICIOS</h3>
                        <p style="color:white;">Incluyen vijajes por distintas partes del Perú, contáctanos y disfruta de un viaje de ensueño.</p>
                        <br>
                        <a href="{{route('servicios') }}" class="theme-btn">Nuestro servicios</a>
            <a href="{{route('contacto') }}" class="theme-btn">Contáctanos</a>
        </div>
    </div> --}}
    </div>
    </div>


    <div class="slide">
        <img src="{{asset('turismo/images/slider/slider-banner-3.jpg')}}" alt class="slider-bg">
        <div class="container">
            {{-- <div class="row">
                    <div class="col col-lg-7 col-sm-10 slide-caption" id="caption">
                        <h3 style="color:white;">NUESTROS SERVICIOS</h3>
                        <p style="color:white;">Incluyen vijajes por distintas partes del Perú, contáctanos y disfruta de un viaje de ensueño.</p>
                        <br>
                        <a href="{{route('servicios') }}" class="theme-btn">Nuestro servicios</a>
            <a href="{{route('contacto') }}" class="theme-btn">Contáctanos</a>
        </div>
    </div> --}}
    </div>
    </div>


    </div>
</section>

<section>
    <div class="container" style="margin-top: 30px">
        <h2 class="text-center">BIENVENIDOS - Ideas Piura Tours Eirl.</h2>
        <p class="text-center" style="margin-top: 30px">
            La Agencia de Viajes y Turismo Ideas Piura Tours EIRL con RUC 20604249296 y oficina comercial ubicada en calle Junín 651 (referencias espaladas del hotel costa del sol Piura). Tiene el agrado de presentarse ante ustedes con la finalidad de ofrecerles nuestra amplia variedad de productos y servicios turísticos, siendo una excelente alternativa en la elección que Usted y su Institución educativa requiera.
        </p>
    </div>
</section>


{{-- turismo en piura --}}
<section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center">Turismo en Piura</h3>

        <div class="row" style="margin-top: 30px">
            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <div class="img-holder">
                        <img src="{{ asset('turismo/images/turismo-piura/piura.png') }}" alt="turismo-piura">
                    </div>
                    <div class="card-body">
                        <p class="text-justify">Piura es la capital de la región homónima, ubicada en el noroeste de Perú. Es famosa por sus edificios coloniales, la plaza de armas, es una de las más antiguas y bella del país, en el centro se encuentra en el monumento de la libertad "La Pola".</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <div class="img-holder">
                        <img src="{{ asset('turismo/images/turismo-piura/canchaque.png') }}" alt="canchaque-piura">
                    </div>
                    <div class="card-body">
                        <p class="text-justify">Es capital del distrito de Canchaque en la provincia de Huancabamba, departamento de Piura, llamada la Suiza piurana por su clima y paisajes. Se encuentra a aproximadamente 150 kilómetros de la ciudad de Piura.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <div class="img-holder">
                        <img src="{{ asset('turismo/images/turismo-piura/faique.png') }}" alt="faique-piura">
                    </div>
                    <div class="card-body">
                        <p class="text-justify">El distrito de San Miguel de El Faique es uno de los ocho que integran la provincia de Huancabamba, destino que ofrece a sus visitantes, cultura, historia y aventura en sus diversos atractivos turísticos con los que cuenta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- servicios --}}
{{-- <section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center text-muted">NUESTROS SERVICIOS</h3>
        <div class="row" style="margin-top: 30px">
            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <div class="img-holder">
                        <img src="{{ asset('turismo/images/services/consultoria.jpg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <p class="text-justify">CONSULTORÍA Y ASESORÍA TURÍSTICA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <div class="img-holder">
                        <img src="{{ asset('turismo/images/services/privado.jpg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <p class="text-justify">VENTA DE BOLETOS AÉREOS NACIONALES E INTERNACIONALES</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <div class="img-holder">
                        <img src="{{ asset('turismo/images/services/ventas.jpg') }}" alt="">
                    </div>
                    <div class="card-body">
                        <p class="text-justify">TRASLADOS AEROPUERTO – HOTEL AEROPUERTO | TRASLADOS AEROPUERTO – PLAYAS – AEROPUERTO </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<section class="parallax"></section>



{{-- paquetes --}}

<section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center">Nuestros paquetes</h3>
        <div class="row" style="margin-top: 30px">
            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s1.jpg') }}" alt="3 Días 2 Noches Noches Canchaque VIP">
                    <div class="card-body">
                        <h5 class="text-justify">PQTE. MANCORA - ENAMORATE DEL NORTE 4D / 3N </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s2.jpg') }}" alt="Canchaque + San Miguel del Faique Monacheco Tours">
                    <div class="card-body">
                        <h5 class="text-justify">PQTE. MANCORA - ENAMORATE DEL NORTE 3D / 2N </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s3.jpg') }}" alt="Tour Canchaque 2 días 1 noche">
                    <div class="card-body">
                        <h5 class="text-justify">PQTE. MANCORA - ENAMORATE DEL NORTE 2D / 1N </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="paquetes text-center">
            <a href="{{ route('servicios') }}" class="btn btn-danger"> <i class="fa fa-paper-plane"> </i> Todos los paquetes </a>
        </div>
    </div>
</section>


<section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center" style="margin-bottom: 30px">Agencia de viajes registrada</h3>
        <div class="row">
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
    </div>
</section>


<section>
    <div class="" style="margin-top: 50px; margin-bottom: 50px;"></div>
</section>



@endsection
