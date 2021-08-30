@extends('layouts.page')
@section('title','Contacto')

@section('contenido')


<div class="main" style="margin-bottom: 50px">
    <div class="container my-5">
        <h3 class="text-center">Contáctanos</h3>

        <div class="row" style="margin-top: 50px">
            <div class="col-md-7 mb-3">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif



                <p>Para ponerse en contácto con uno de nuestros representantes, debe llenar todos los campos del formulario.</p>

                <form action="{{ route('contacto_email') }}" method="POST">

                    <div class="form-group">
                        <label for="">Ingrese su Nombre y Apellido</label>
                        <input type="text" name="nombres" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ingrese su email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Número de celular</label>
                        <input type="number" name="celular" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" name="titulo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Mensaje</label>
                        <textarea name="mensaje" rows="10" class="form-control" required>  </textarea>
                    </div>


                    <div class="form-group">
                        @csrf
                        <button class="btn btn-success" style="width:200px">ENVIAR MENSAJE</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5 mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.4310666838446!2d-80.63095168463751!3d-5.194729253840596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904a11f648bfd41b%3A0x9aaf86453a95b043!2sIdeas%20Piura%20Tours%2C%20agencia%20de%20viajes%20y%20turismo!5e0!3m2!1ses-419!2spe!4v1629996031425!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <p>informes@ideaspiuratours.com <br> ventas@ideaspiuratours.com <br>
                    PE: +51 945 368 416 <br> <a href="https://www.facebook.com/ideaspiuratours" target="_blank"> Visita nuestro fanpage</a> </p>
            </div>
        </div>

    </div>
</div>



@endsection
