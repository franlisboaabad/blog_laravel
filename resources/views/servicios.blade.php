@extends('layouts.page')
@section('title','Servicios')

@section('contenido')
<section>

    <div class="container my-5">
        <h3 class="text-center" style="margin-bottom:30px">Nuestros servicios</h3>
        <div class="row pt-3">

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s1.jpg') }}" alt="3 Días 2 Noches Noches Canchaque VIP">
                    <div class="card-body">
                        <h5 class="text-justify">MANCORA 2D / 1N desde <span>s/ 299.00</span> por persona.</h5>
                        <button class="btn btn-success" data-toggle="modal" data-target="#tours1"> <i class="fa fa-eye"></i> Más información</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s2.jpg') }}" alt="Canchaque + San Miguel del Faique Monacheco Tours">
                    <div class="card-body">
                        <h5 class="text-justify">MANCORA 3D / 2N desde <span>s/ 390.00</span> por persona.</h5>
                        <button class="btn btn-success" data-toggle="modal" data-target="#tours2"> <i class="fa fa-eye"></i> Más información</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s3.jpg') }}" alt="Tour Canchaque 2 días 1 noche">
                    <div class="card-body">
                        <h5 class="text-justify">MANCORA 4D / 3N desde <span>s/ 450.00</span> por persona.</h5>
                        <button class="btn btn-success" data-toggle="modal" data-target="#tours3"> <i class="fa fa-eye"></i> Más información</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s4.jpg') }}" alt="Servicio FULL DAY Canchaque Monacheco Tours">
                    <div class="card-body">
                        <h5 class="text-justify">TOURS MANGLARES desde <span>s/ 79.00</span> por persona.</h5>
                        <button class="btn btn-success" data-toggle="modal" data-target="#tours4"> <i class="fa fa-eye"></i> Más información</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s5.jpg') }}" alt="Servicio FULL DAY Canchaque Monacheco Tours">
                    <div class="card-body">
                        <h5 class="text-justify">TOURS TORTUGAS desde <span>s/ 69.00</span> por persona.</h5>
                        <button class="btn btn-success" data-toggle="modal" data-target="#tours5"> <i class="fa fa-eye"></i> Más información</button>
                    </div>
                </div>
            </div>



            <div class="col-md-4" style="margin-bottom:30px">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('turismo/images/servicios-tours/servicio-s6.jpg') }}" alt="Trekking Catarata Chorro Blanco Monacheco Tours">
                    <div class="card-body">
                        <h5 class="text-justify">CITY TOURS PIURA desde <span>s/ 50.00</span> por persona.</h5>
                        <button class="btn btn-success" data-toggle="modal" data-target="#tours6"> <i class="fa fa-eye"></i> Más información</button>
                    </div>
                </div>
            </div>





            <div class="row pt-5">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <p class="text-center"><strong>Solicitar más información vía: </strong></p>
                    <p class="text-center">
                        <a href="https://www.facebook.com/piuratrips/" target="_Blank" class="btn btn-primary btn-sm"> <i class="fa fa-facebook"></i> Facebook</a>
                        <a href="https://instagram.com/piuratrips" target="_blank" class="btn btn-danger btn-sm"> <i class="fa fa-instagram"></i> Instagram</a>
                        <a href="https://wa.me/51951411377?text=Necesito más información paquetes Turísticos." target="_blank" class="btn btn-success btn-sm"> <i class="fa fa-whatsapp"></i> whatsapp</a>
                    </p>
                </div>
                <div class="col-md-4"></div>
            </div>

        </div>


        {{-- modalls --}}

        <div class="modal fade" id="tours1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">MANCORA 2D / 1N desde <span>s/ 299.00</span> por persona.</h4>
                    </div>
                    <div class="modal-body">
                        <p>Incluye</p>
                        <ol>
                            <li>01 NOCHE DE ALOJAMIENTO CON PISCINA EN HABITACIÓN MATRIMONIAL</li>
                            <li>DESAYUNOS EN HOTEL</li>
                            <li>TOUR NADO CON TORTUGAS EN MÁNCORA </li>
                            <li>RECOJO DESDE HOTEL PARA RELIZAR EL TOUR</li>
                            <li>CHALECO SALVAVIDAS</li>
                            <li>INGRESO DESDE LA ORILLA EN MOTO ACUÁTICA</li>
                            <li>GUIADO Y TOMA DE FOTOGRAFIAS PARA EL RECUERDO</li>
                            <li> <span class="text-danger"> NO INCLUYE: SERVICIOS NO MENCIONADOS </span> </li>
                        </ol>
                        <p>PRECIOS NO VALIDOS PARA FERIADOS, SEMANA SANTA, FIESTAS DE FIN DE AÑO.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="tours2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">MANCORA 3D / 2N desde <span>s/ 390.00</span> por persona.</h4>
                    </div>
                    <div class="modal-body">
                        <p>Incluye</p>
                        <ol>
                            <li>02 NOCHES DE ALOJAMIENTO CON PISCINA EN HABITACIÓN MATRIMONIAL</li>
                            <li>DESAYUNOS EN HOTEL</li>
                            <li>TOUR NADO CON TORTUGAS EN MÁNCORA </li>
                            <li>INGRESO DESDE LA ORILLA EN MOTO ACUÁTICA </li>
                            <li>TOUR MANGLARES DE TUMBES (PLAYA PUNTA SAL, PLAYA ZORRITOS, PLAZA DE ARMAS DE TUMBES, PUERTO PIZARRO, ISLA DEL AMOR, ISLA DE LOS PÁJAROS, ISLA HUESO DE BALLENA, LA BOCANA, TÚNEL DEL MANGLAR)</li>
                            <li>RECOJO DESDE HOTEL PARA RELIZAR EL TOUR</li>
                            <li>CHALECO SALVAVIDAS</li>
                            <li>PASEO EN BOTE POR EL MANGLAR</li>
                            <li>GUIADO Y TOMA DE FOTOGRAFIAS PARA EL RECUERDO</li>
                            <li> <span class="text-danger"> NO INCLUYE: SERVICIOS NO MENCIONADOS </span> </li>
                        </ol>
                        <p>PRECIOS NO VALIDOS PARA FERIADOS, SEMANA SANTA, FIESTAS DE FIN DE AÑO.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <div class="modal fade" id="tours3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">MANCORA 4D / 3N desde <span>s/ 450.00</span> por persona.</h4>
                    </div>
                    <div class="modal-body">
                        <p>Incluye</p>
                        <ol>
                            <li>03 NOCHES DE ALOJAMIENTO CON PISCINA EN HABITACIÓN MATRIMONIAL</li>
                            <li>DESAYUNOS EN HOTEL</li>
                            <li>TOUR NADO CON TORTUGAS EN MÁNCORA </li>
                            <li>INGRESO DESDE LA ORILLA EN MOTO ACUÁTICA </li>
                            <li>TOUR MANGLARES DE TUMBES (PLAYA PUNTA SAL, PLAYA ZORRITOS, PLAZA DE ARMAS DE TUMBES, PUERTO PIZARRO, ISLA DEL AMOR, ISLA DE LOS PÁJAROS, ISLA HUESO DE BALLENA, LA BOCANA, TÚNEL DEL MANGLAR)</li>
                            <li>RECOJO DESDE HOTEL PARA RELIZAR EL TOUR</li>
                            <li>CHALECO SALVAVIDAS</li>
                            <li>PASEO EN BOTE POR EL MANGLAR</li>
                            <li>GUIADO Y TOMA DE FOTOGRAFIAS PARA EL RECUERDO</li>
                            <li> <span class="text-danger"> NO INCLUYE: SERVICIOS NO MENCIONADOS </span> </li>
                        </ol>
                        <p>PRECIOS NO VALIDOS PARA FERIADOS, SEMANA SANTA, FIESTAS DE FIN DE AÑO.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade" id="tours4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">TOUR MANGLARES desde <span>s/ 79.00</span> por persona.</h4>
                    </div>
                    <div class="modal-body">
                        <p>Incluye</p>
                        <ol>
                            <li>RECOJO DESDE HOTEL EN ZONA MÁNCORA</li>
                            <li>VISITA A LA PLAYA PUNTA SAL</li>
                            <li>VISITA A LA PLAYA ZORRITOS</li>
                            <li>VISITA A LA PLAZA DE ARMAS</li>
                            <li>PUERTO PIZARRO (ISLA DEL AMOR, ISLA DE LOS PÁJAROS, ISLA HUESO DE BALLENA, LA BOCANA, TÚNEL DEL MANGLAR)</li>
                            <li>RECOJO DESDE HOTEL PARA RELIZAR EL TOUR</li>
                            <li>CHALECOS SALVAVIDAS</li>
                            <li>PASEO EN BOTE POR EL MANGLAR</li>
                            <li>GUIADO Y TOMA DE FOTOGRAFIAS PARA EL RECUERDO</li>
                            <li> <span class="text-danger"> NO INCLUYE: SERVICIOS NO MENCIONADOS </span> </li>
                        </ol>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <div class="modal fade" id="tours5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">TOUR TORTUGAS desde <span>s/ 69.00</span> por persona.</h4>
                    </div>
                    <div class="modal-body">
                        <p>Incluye</p>
                        <ol>
                            <li>RECOJO DESDE HOTEL EN ZONA MÁNCORA</li>
                            <li>INGRESO DESDE ORILLA A EMBARCACIÓN EN MOTO ACUÁTICA</li>
                            <li>NADO CON TORTUGAS EN MÁNCORA</li>
                            <li>CHALECOS SALVAVIDAS</li>
                            <li>GUIADO</li>
                            <li>TOMA DE FOTOGRAFIAS BAJO EL AGUA CON CÁMARA GO-PRO PARA EL RECUERDO</li>
                            <li> <span class="text-danger"> NO INCLUYE: SERVICIOS NO MENCIONADOS </span> </li>
                        </ol>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



        <div class="modal fade" id="tours6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">CITY TOURS PIURA desde <span>s/ 50.00</span> por persona.</h4>
                    </div>
                    <div class="modal-body">
                        <p>Incluye</p>
                        <ol>
                            <li>RECOJO DESDE HOTEL EN ZONA CENTRO DE PIURA</li>
                            <li>VISITA A LA PLAZA DE ARMAS</li>
                            <li>VISITA A LA CASA MUSEO GRAU</li>
                            <li>MUSEO VICUS</li>
                            <li>GUIADO</li>
                            <li>TOMA DE FOTOGRAFIAS PARA EL RECUERDO</li>
                            <li> <span class="text-danger"> NO INCLUYE: SERVICIOS NO MENCIONADOS </span> </li>
                        </ol>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

</section>
@endsection
