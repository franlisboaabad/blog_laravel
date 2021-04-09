@extends('layouts.page')

@section('title', 'Portafolio tours tortugas')

@section('contenido')


<section>
    <div class="container">
        <h3 class="text-center" style="margin-top: 30px">TOURS NADO CON TORTUGAS</h3>


        <div class="row" style="margin-top: 30px">

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/tortugas/1.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/tortugas/1.jpg') }}" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/tortugas/2.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/tortugas/2.jpg') }}" class="img-fluid">
                </a>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/tortugas/3.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/tortugas/3.jpg') }}" class="img-fluid">
                </a>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/tortugas/4.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/tortugas/4.jpg') }}" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/tortugas/5.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/tortugas/5.jpg') }}" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/tortugas/6.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/tortugas/6.jpg') }}" class="img-fluid">
                </a>
            </div>



        </div>
    </div>
</section>


@endsection
