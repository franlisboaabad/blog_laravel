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
            <img src="{{asset('turismo/images/slider/paseo-caballo.jpg')}}" alt class="slider-bg">
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
        <img src="{{asset('turismo/images/slider/tours-manglares.jpg')}}" alt class="slider-bg">
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
        <img src="{{asset('turismo/images/slider/tours-tortugas.jpg')}}" alt class="slider-bg">
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
        <h2 class="text-center text-muted">BIENVENIDOS - PIURA TRIPS</h2>
        <p class="text-center" style="margin-top: 30px"> <strong>Piura Trips</strong> - Les da la bienvenida al mundo de los viajes y el turismo en la ciudad del eterno calor, nuestra experiencia combinada en el sector turístico nos permite hacer realidad tu viaje soñado.</p>
    </div>
</section>


{{-- servicios --}}
<section>
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
</section>


<section class="parallax"></section>

{{-- turismo en piura --}}
<section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center text-muted">TURISMO EN PIURA</h3>

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


{{-- paquetes --}}

<section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center text-muted">Nuestros paquetes</h3>
        <div class="row" style="margin-top: 30px">
            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s1.jpg') }}" alt="3 Días 2 Noches Noches Canchaque VIP">
                    <div class="card-body">
                        <h5 class="text-justify">MANCORA 2D / 1N desde <span>s/ 299.00</span> por persona.</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s2.jpg') }}" alt="Canchaque + San Miguel del Faique Monacheco Tours">
                    <div class="card-body">
                        <h5 class="text-justify">MANCORA 3D / 2N desde <span>s/ 390.00</span> por persona.</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s3.jpg') }}" alt="Tour Canchaque 2 días 1 noche">
                    <div class="card-body">
                        <h5 class="text-justify">MANCORA 4D / 3N desde <span>s/ 450.00</span> por persona.</h5>
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
    <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
        <h3 class="text-center text-muted">Agencia de viajes registrada</h3>
        <div class="row" style="margin-top: 30px; text-align: center;">

            <div class="col-md-2 mb-3">
                <a href="https://www.gob.pe/mincetur" target="_blank"><img src="{{ asset('turismo/images/enlaces/mincetur.png') }}" class="img-fluid"></a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="http://consultasenlinea.mincetur.gob.pe/set-regiones/(S(owdrwwbukojznhtfn3s1za0n))/Reportes/WebReportes/RptListadoCoincidencias.aspx?StrTipo=1&Var=02|20603077947|||" target="_blank"><img src="{{ asset('turismo/images/enlaces/agencia_registrada.png') }}" class="img-fluid"></a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="https://peru.info/en-us/" target="_blank"><img src="{{ asset('turismo/images/enlaces/marca_peru.png') }}" class="img-fluid"></a>
            </div>

            <div class="col-md-2 mb-3">
                <a href="https://www.ytuqueplanes.com/" target="_blank"><img src="{{ asset('turismo/images/enlaces/ytuqueplanes.png') }}" class="img-fluid"></a>
            </div>

            <div class="col-md-2 mb-3">
                <a href="https://www.facebook.com/ApavitPiura" target="_blank"><img src="{{ asset('turismo/images/enlaces/apavit.png') }}" class="img-fluid"></a>
            </div>

            <div class="col-md-2 mb-3">
                <a href="https://chsalternativo.org/recurso/turismo-responsable-para-prevenir-la-explotacion-sexual-de-ninas-ninos-y-adolescentes/" target="_blank"><img src="{{ asset('turismo/images/enlaces/esnna.png') }}" class="img-fluid"></a>
            </div>


        </div>
    </div>
</section>
@endsection
