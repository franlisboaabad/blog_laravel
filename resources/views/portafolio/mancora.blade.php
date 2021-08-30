@extends('layouts.page')

@section('title', 'Portafolio tours mancora')

@section('contenido')


<section>
    <div class="container">
        <h3 class="text-center" style="margin-top: 30px">TOURS MANCORA</h3>


        <div class="row" style="margin-top: 30px">

           
            <div class="row" style="margin-top: 30px">
            
            @for($i = 1; $i <= 6; $i++)
                
                  <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/ideaspiuratours/portafolio/mancora/mancora_'.$i.'.jpg') }}" data-toggle="lightbox">
                    <img src="{{ asset('turismo/images/ideaspiuratours/portafolio/mancora/mancora_'.$i.'.jpg') }}" class="img-fluid">
                </a>
            </div>

            @endfor
          
        </div>



        </div>
    </div>
</section>

@endsection