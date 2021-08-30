@extends('layouts.page')

@section('title', 'Portafolio tours Piura')

@section('contenido')


<section>
    <div class="container">
        <h3 class="text-center" style="margin-top: 30px">TOURS PIURA</h3>


        <div class="row" style="margin-top: 30px">

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/manglares/1.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/manglares/1.jpg') }}" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/manglares/2.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/manglares/2.jpg') }}" class="img-fluid">
                </a>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/manglares/3.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/manglares/3.jpg') }}" class="img-fluid">
                </a>
            </div>


            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/manglares/4.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/manglares/4.jpg') }}" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/manglares/5.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/manglares/5.jpg') }}" class="img-fluid">
                </a>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/portafolio/manglares/6.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/portafolio/manglares/6.jpg') }}" class="img-fluid">
                </a>
            </div>



        </div>
    </div>
</section>

@endsection