@extends('layouts.page')
@section('title','portafolio')

@section('contenido')
<section>
    <div class="container">
        <h3 class="text-center">Nuestro portafolio</h3>

        <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s5.jpg') }}" alt="3 Días 2 Noches Noches Canchaque VIP">
                    <div class="card-body">
                        <h5>TOURS NADO CON TORTUGAS </h5>
                        <a  href="{{ route('tortugas') }}" class="btn btn-danger"> <i class="fa fa-camera"></i> VER IMAGENES</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s4.jpg') }}" alt="3 Días 2 Noches Noches Canchaque VIP">
                    <div class="card-body">
                        <h5>TOURS MANGLARES</h5>
                        <a  href="{{ route('manglares') }}" class="btn btn-danger"> <i class="fa fa-camera"></i> VER IMAGENES</a>
                    </div>
                </div>
            </div>



            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s7.png') }}" alt="3 Días 2 Noches Noches Canchaque VIP">
                    <div class="card-body">
                        <h5>TOURS CARACUCHO </h5>
                        <a  href="{{ route('caracucho') }}" class="btn btn-danger"> <i class="fa fa-camera"></i> VER IMAGENES</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s7.png') }}" alt="3 Días 2 Noches Noches Canchaque VIP">
                    <div class="card-body">
                        <h5>TOURS CANCHAQUE + EL FAIQUE </h5>
                        <a  href="{{ route('canchaque') }}" class="btn btn-danger"> <i class="fa fa-camera"></i> VER IMAGENES</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s7.png') }}" alt="3 Días 2 Noches Noches Canchaque VIP">
                    <div class="card-body">
                        <h5>TOURS MANCORA </h5>
                        <a  href="{{ route('mancora') }}" class="btn btn-danger"> <i class="fa fa-camera"></i> VER IMAGENES</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s7.png') }}" alt="3 Días 2 Noches Noches Canchaque VIP">
                    <div class="card-body">
                        <h5>CITY TOURS PIURA </h5>
                        <a  href="{{ route('piura') }}" class="btn btn-danger"> <i class="fa fa-camera"></i> VER IMAGENES</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
