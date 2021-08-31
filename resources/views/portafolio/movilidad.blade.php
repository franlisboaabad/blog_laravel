@extends('layouts.page')

@section('title', 'Servicio de movilida')

@section('contenido')


<section>
    <div class="container">
        <h3 class="text-center" style="margin-top: 30px">SERVICIO DE MOVILIDAD</h3>


        <div class="row" style="margin-top: 30px">
            
            @for($i = 1; $i <= 5; $i++)
                
                  <div class="col-md-4" style="margin-bottom:30px">
                <a href="{{ asset('turismo/images/ideaspiuratours/portafolio/movilidad/movil_'.$i.'.jpeg') }}" data-toggle="lightbox" style="width:100%; height: 350px">
                    <img src="{{ asset('turismo/images/ideaspiuratours/portafolio/movilidad/movil_'.$i.'.jpeg') }}" class="img-fluid" style="width:100%; height: 350px">
                </a>
            </div>

            @endfor
          
        </div>
    </div>
</section>

@endsection