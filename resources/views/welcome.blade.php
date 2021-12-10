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
            <img src="{{asset('turismo/images/ideaspiuratours/banner-1.jpg')}}" alt class="slider-bg">
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
        <img src="{{asset('turismo/images/ideaspiuratours/banner-2.jpg')}}" alt class="slider-bg">
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
        <img src="{{asset('turismo/images/ideaspiuratours/banner-3.jpg')}}" alt class="slider-bg">
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
        <h2 class="text-center" style="color: #2ECC71">Ideas Piura Tours EIRL.</h2>
        <p class="text-center" style="margin-top: 30px">
            La Agencia de Viajes y Turismo Ideas Piura Tours EIRL con RUC 20604249296 y oficina comercial ubicada en calle Junín 651 (referencias espaladas del hotel costa del sol Piura). Tiene el agrado de presentarse ante ustedes con la finalidad de ofrecerles nuestra amplia variedad de productos y servicios turísticos, siendo una excelente alternativa en la elección que Usted y su Institución requiera.
        </p>
    </div>
</section>



{{-- paquetes --}}

<section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center" style="margin-bottom: 30px">Nuestros Servicios</h3>

        <div class="row">

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/ideaspiuratours/servicios/mancora_web1.jpg') }}" alt="Mancora ideaspiuratours">
                    <div class="card-body">
                        <h5 class="text-justify">PQTE. MANCORA - EL NORTE LO TIENE TODO 5D / 4N </h5>


                    </div>
                </div>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/ideaspiuratours/servicios/mancora_web2.jpg') }}" alt="Mancora ideaspiuratours">
                    <div class="card-body">
                        <h5 class="text-justify">PQTE. MANCORA - VIVE EL NORTE 4DÍAS / 3NOCHES </h5>


                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/ideaspiuratours/servicios/mancora_web3.jpg') }}" alt="Mancora ideaspiuratours">
                    <div class="card-body">
                        <h5 class="text-justify">PQTE. MANCORA - ENAMORATE DEL NORTE 3D / 2N </h5>

                    </div>
                </div>
            </div>


        </div>

        <div class="paquetes text-center" style="margin-bottom:30px">
            <a href="{{ route('servicios') }}" class="btn btn-danger"> <i class="fa fa-paper-plane"> </i> Todos los paquetes </a>
        </div>
    </div>
</section>



<section class="parallax"></section>


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



{{-- paquetes --}}

<section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center" style="margin-bottom: 30px">Nuestro portafolio</h3>

        <div class="row">

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/ideaspiuratours/portafolio/tortugas_web.jpg') }}" alt="portafolio ideaspiuratours">
                    <div class="card-body">
                        <h5>TOURS NADO CON TORTUGAS </h5>
                        <a href="{{ route('tortugas') }}" class="btn btn-danger"> <i class="fa fa-camera"></i> VER IMAGENES</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/ideaspiuratours/portafolio/manglares_web.jpg') }}" alt="portafolio ideaspiuratours">
                    <div class="card-body">
                        <h5>TOURS MANGLARES</h5>
                        <a href="{{ route('manglares') }}" class="btn btn-danger"> <i class="fa fa-camera"></i> VER IMAGENES</a>
                    </div>
                </div>
            </div>



            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/ideaspiuratours/portafolio/caracucho_web.jpg') }}" alt="portafolio ideaspiuratours">
                    <div class="card-body">
                        <h5>TOURS CARACUCHO </h5>
                        <a href="{{ route('caracucho') }}" class="btn btn-danger"> <i class="fa fa-camera"></i> VER IMAGENES</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center" style="margin-bottom: 30px">Agencia de viajes registrada</h3>
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
    </div>
</section>


<section>
    <div class="container" style="margin-top: 30px">
        <h3 class="text-center" style="margin-bottom: 30px">Nuestras recomendaciones</h3>

        <div class="row">


            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active text-center">
                            <img src="{{ asset('/turismo/images/testimonials/diana-sanchez.jpg') }}" alt="..." style="margin:auto; display:block; border-radius: 50%">
                            <br>
                            <p class="text-center"> <strong>Diana Sánchez Del Castillo</strong> </p>
                            <p>Excelente servicio de esta agencia al 100 % recomendadisimo muy seguro 😎</p>
                        </div>

                        <div class="item">
                            <img src="{{ asset('/turismo/images/testimonials/vanessa-fiorella.jpg') }}" alt="..." style="margin:auto; display:block; border-radius: 50%">
                            <br>
                            <p class="text-center"> <strong>Vanessa Fiorella Ancori Smith</strong> </p>
                            <p class="text-center">Muy buena agencia son puntuales, me recoges tal como el itinerario. El guía de turismo son muy responsables y amables. Mucha gracias fue un viaje largo y estuvo muy bonito lugares que he conocido. Un fuerte abrazos a cada uno de ellos son Idelssa, Edden, Eder.</p>
                        </div>


                         <div class="item">
                            <img src="{{ asset('/turismo/images/testimonials/judith-noriega.jpg') }}" alt="..." style="margin:auto; display:block; border-radius: 50%">
                            <br>
                            <p class="text-center"> <strong>Judith Noriega</strong> </p>
                            <p class="text-center">Esta agencia brinda un servicio de calidad, cuenta con personal muy amable, atentos en todo y con muy buena vibra que hacen única la experiencia de conocer tan bellos lugares. Recomendadísimo 👍</p>
                        </div>

                        <div class="item">
                            <img src="{{ asset('/turismo/images/testimonials/ericka-ruiz.jpg') }}" alt="..." style="margin:auto; display:block; border-radius: 50%">
                            <br>
                            <p class="text-center"> <strong>Ericka Ruiz Ramirez</strong> </p>
                            <p class="text-center">La amabilidad y paciencia que tuvieron a orientarme la elección del tours. y excelente servicio.</p>
                        </div>


                         <div class="item">
                            <img src="{{ asset('/turismo/images/testimonials/jessica-curto.jpg') }}" alt="..." style="margin:auto; display:block; border-radius: 50%">
                            <br>
                            <p class="text-center"> <strong>Jessica Curto</strong> </p>
                            <p class="text-center">Excelente,todo se cumplió tal como nos ofrecieron,desde el lugar donde nos hospedamos(el que escogimos buenazo buen precio y su piscina)la puntualidad,el buen trato de los guías,los lugares maravillosos que conocimos,su historia su gente,sus playas desde Máncora.</p>
                        </div>

                         <div class="item">
                            <img src="{{ asset('/turismo/images/testimonials/katherine-alvez.jpg') }}" alt="..." style="margin:auto; display:block; border-radius: 50%">
                            <br>
                            <p class="text-center"> <strong>Katherine Alvarez</strong> </p>
                            <p class="text-center">Una experiencia única, exelente servicio, siempre pendiente del cliente, lo máximo💪💪.</p>
                        </div>


                          <div class="item">
                            <img src="{{ asset('/turismo/images/testimonials/tadokiario-.jpg') }}" alt="..." style="margin:auto; display:block; border-radius: 50%">
                            <br>
                            <p class="text-center"> <strong>Tadokiari Alexander Vivas Masias</strong> </p>
                            <p class="text-center">BUENA ELECCION, una atención amable desde el momento de separar la fecha del viaje, hasta la despedida del tour, gracias tambien al amigo Eddén Reyes que nos mostró este lugar maravilloso que es Canchaque.</p>
                        </div>


                    </div>


                </div>
            </div>
            <div class="col-md-2"></div>

        </div>

    </div>
</section>


<section>
    <div class="" style="margin-top: 50px; margin-bottom: 50px;"></div>
</section>

@endsection
