@extends('layouts.page')
@section('title', '- Contacto')
    <style>
        .masthead {
            display: none !important;
        }

    </style>
@section('contenido')

    <!-- Masthead -->
    <header class="masthead-contacto text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    {{-- <h2 class="mb-5">AUDITORIA INTERNA</h2> --}}
                </div>
            </div>
        </div>
    </header>


    <div class="container my-5">
        <h3>CONTÁCTANOS</h3>



        <div class="row">
            <div class="col-md-6 mb-3">
                
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                <form action="{{ route('contacto_email') }}" method="post">

                    @csrf
                    <div class="form-group">
                        <label for="">Nombres y Apellidos</label>
                        <input type="text" name="nombres" placeholder="Ingrese Nombres y Apellidos" required
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="email" name="email" placeholder="Ingrese correo electrónico" required
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Celular / Telefono</label>
                        <input type="number" name="celular" placeholder="Ingrese número de celular" required
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label for=""> DNI / RUC</label>
                        <input type="number" name="ruc" placeholder="Ingrese dni / ruc" required class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">Titulo de mensaje</label>
                        <input type="text" name="titulo" placeholder="Titulo de mensaje" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Mensaje</label>
                        <textarea class="form-control" name="mensaje" rows="6"></textarea>
                    </div>

                    <button class="btn btn btn-success" style=" width: 300px">ENVIAR MENSAJE</button>


                </form>
            </div>
            <div class="col-md-6 mb-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.411100054028!2d-80.62948958569905!3d-5.197895153862581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904a107e07d6b4eb%3A0x9586e744e921a6c0!2sCasa%20Museo%20Almirante%20Miguel%20Grau!5e0!3m2!1ses-419!2spe!4v1617287149302!5m2!1ses-419!2spe"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <div class="informacion mt-3">
                    <p>Celular +51 922852443 <br> Email: informes@ostconsultores.com <br> Email2:
                        contacto@ostconsultores.com </p>
                </div>
            </div>
        </div>
    </div>


@endsection
