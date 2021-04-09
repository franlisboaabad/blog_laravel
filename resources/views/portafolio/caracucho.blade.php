@extends('layouts.page')

@section('title', 'Portafolio tours caracucho')

@section('contenido')

<section>
    <div class="container">
        <h3 class="text-center" style="margin-top: 30px">TOURS CARACUCHO</h3>


        <div class="row" style="margin-top: 30px">

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/caracucho/1.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/caracucho/1.jpg') }}" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/caracucho/2.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/caracucho/2.jpg') }}" class="img-fluid">
                </a>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/caracucho/3.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/caracucho/3.jpg') }}" class="img-fluid">
                </a>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/caracucho/4.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/caracucho/4.jpg') }}" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/caracucho/5.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/caracucho/5.jpg') }}" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/caracucho/6.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/caracucho/6.jpg') }}" class="img-fluid">
                </a>
            </div>



        </div>
    </div>
</section>
@endsection