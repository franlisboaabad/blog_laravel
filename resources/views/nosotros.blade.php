@extends('layouts.page')
@section('title', 'Nosotros')

@section('contenido')
    <section>
        <div class="main">
            <div class="container my-5">
    
                <h3 class="text-success">Acerca de Nosotros</h3>
                <div class="row pt-3">
                    <div class="col-md-5 mb-3">
                        <img src="{{asset('turismo/images/logo.png')}}" alt="Piura trips" class="img-fluid">
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="space" style="margin-top: 50px;"></div>
                        <p class="text-justify"><b>"PIURA TRIPS"</b> <br> <br>
                            Empresa de turismo conformada por un equipo multidisciplinario, liderado por profesionales, especialistas en la gestión turística con experiencia combinada en el sector turístico.  
                        <br> <br> Puedes seguirnos en Facebook como: <a href="https://www.facebook.com/Piuratrips" target="_blank" class="btn btn-primary"> <i class="fa fa-facebook-square"> </i> Puratrips </a>
                        </p>
                    </div>
                </div>
    
                <h3>Nuestra Historia</h3>
                <p class="text-justify"> La empresa Piura trips nace legalmente constituida con profesionales capacitados en el sector turístico. <br>
                Ubicada en Conj. Hab. Villa California – Interior A- 1, Castilla, lugar donde se realizan sus actividades comerciales. 
                </p>
                <p class="text-justify"> 
                    Como toda empresa exitosa los inicios son difíciles y son estos hechos fortuitos los que crean carácter, determinación y consecuencia. Con el transcurso del tiempo, se logró adquirir más instrumentos y se realizaron los trámites necesarios en la Municipalidad de Piura para obtener la licencia de funcionamiento. Además, se registró como persona jurídica en la SUNAT. </p>
              
                <p class="text-justify">  Actualmente <b>“PIURA TRIPS”</b> cuenta con paquetes turísticos a nivel regional (Talara, Máncora, Ayabaca, Canchaque, Huancabamba), nacional (Tumbes, Cajamarca, Huaraz, Tarapoto, Cusco, Arequipa, entre otros). </p>
    
                <div class="row pt-3">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-header"> <h5 class="card-title text-center">Misión</h5> </div>
                            <div class="card-body">
                                <p class="card-text text-justify">Nuestra misión es hacer realidad la ilusión de viajar de nuestros clientes y convertirla en experiencias de gran satisfacción, además, contribuir con el desarrollo del turismo en toda nuestra región, llevando alternativa de desarrollo social y económico a destinos emergentes. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-header"> <h5 class="card-title text-center">Visión</h5> </div>
                            <div class="card-body">
                                
                                <p class="card-text text-justify">Ser la Agencia de Viajes y Operadora de Turismo líder en la Región Piura, por la seguridad, confianza y experiencia que le ofrecemos a nuestros clientes, brindando servicios de óptima calidad, responsabilidad social y ambiental. <br> <br>  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                             <div class="card-header"> <h5 class="card-title text-center">Valores</h5> </div>
                            <div class="card-body">
                                
                                <p class="card-text text-justify">Confianza, Responsabilidad, Puntualidad y Calidad.</p>
                            </div>
                        </div>
                    </div>
    
                </div>
                
                {{-- <section class="mt-3">
                    <h3>Organigrama de nuestra empresa.</h3>
                    <img src="https://www.monachecotoursperu.com/assets//img/organigrama-monacheco.jpg" class="img-fluid">
                </section> --}}
            </div>
        </div>
        
   
    </section>
@endsection