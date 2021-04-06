@extends('layouts.page')
@section('title','Contacto')

@section('contenido')


<div class="main" style="margin-bottom: 50px">
    <div class="container my-5">
        <h3 class="text-center" style="color:green">Piura Trips - Contáctanos</h3>

        <div class="row" style="margin-top: 50px">
            <div class="col-md-7 mb-3">
                <p>Para ponerse en contácto con uno de nuestros representantes, debe llenar todos los campos del formulario.</p>

                <form action="" method="POST">

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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31786.8072263826!2d-80.65015808217012!3d-5.207428308171303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904a109f58eccde9%3A0xa351073a40527404!2sAv.%20Miguel%20Grau%201802-1852%2C%20Piura%2020003!5e0!3m2!1ses-419!2spe!4v1617674723374!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <p>informes@piuratrips.com <br> piuratrips@gmail.com <br>
                PE: +51 951 411 377  <br>   <a href="https://www.facebook.com/Piuratrips" target="_blank"> Visita nuestro fanpage</a>  </p>
            </div>
        </div>

    </div>
</div>



@endsection
