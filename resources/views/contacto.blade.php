@extends('layouts.page')
@section('title','contacto')
    
@section('contenido')
    <section>
        
    <div class="main">
                <div class="container my-5">
                    <h3 class="text-center text-danger">Contáctanos</h3>
        
                    <div class="row pt-3">
                        <div class="col-md-6 mb-3">
                            <p>Para ponerse en contácto con uno de nuestros representantes, debe llenar todos los campos del formulario.</p>
                            <form method="post" id="formulario">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Nombres y Apellidos*">
                                </div>
        
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Correo electronico*">
                                </div>
        
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="Celular*">
                                </div>
        
                                <div class="form-group">
                                    <input type="text" class="form-control" id="title" placeholder="Título de mensaje*">
                                </div>
        
                                <div class="form-group">
                                    <textarea class="form-control" id="message" rows="6" placeholder="Escribir mensaje..."></textarea>
                                </div>
        
                                <button type="submit" class="btn btn-success" id="send_email"> <i class="fa fa-send"></i> Enviar mensaje</button>
                            </form>
                            <div class="respuesta">
                                <!-- respuesta de formulario -->
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.2735693862946!2d-79.60637208523497!3d-5.375191596101137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ac71314449105%3A0xf3311609e767e75c!2sMonacheco%20Tours!5e0!3m2!1ses!2spe!4v1613101584654!5m2!1ses!2spe" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    
                        </div>
                    </div>
                </div>
            </div>
            
       
       
        
        
    </section>
    @endsection