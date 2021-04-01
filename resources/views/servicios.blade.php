@extends('layouts.page')
@section('title','Servicios')

@section('contenido')
    <section>
        <div class="main">
            <div class="container my-5">
                <h3 class="text-center text-danger">Monacheo Tours - Servicios</h3>
                <div class="row pt-3">
    
                    <div class="col-md-4 mb-3 ">
                        <div class="card">
                            <img class="card-img-top" src="https://www.monachecotoursperu.com/assets/img/paquetes/vip.jpg" alt="3 Días 2 Noches Noches Canchaque VIP">
                            <div class="card-body">
                                <h5 class="card-title text-justify">3 Días 2 Noches Noches Canchaque VIP</h5>
                                <p class="card-text">De lunes a domingo: <span class="badge badge-danger">S/450.00</span> por pareja. <br> Habitación Matrimonial con baño privado, tv por cable, wifi , terma. </p>
                                <a class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target=".modal-paquete-vip"> <i class="fa fa-eye"></i> Más info</a>
                                <a class="btn btn-success btn-sm float-right text-white" href="https://wa.me/51919023541?text=Servicio 3 Días 2 Noches Noches Canchaque VIP" target="_blank"> <i class="fa fa-whatsapp"></i> Solicitar Ahora</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://www.monachecotoursperu.com/assets/img/paquetes/fulday-2.jpg" alt="Canchaque + San Miguel del Faique Monacheco Tours">
                            <div class="card-body">
                                <h5 class="card-title text-justify">2 Días 1 noche Canchaque + San Miguel del Faique + Mirador Huayanay </h5>
                                <p class="card-text">De lunes a domingo: <span class="badge badge-danger">S/190.00</span> por pareja.</p>
                                <a class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target=".modal-paquete1"> <i class="fa fa-eye"></i> Más info</a>
                                <a class="btn btn-success btn-sm float-right text-white" href="https://wa.me/51919023541?text=Servicio 2 días 1 noche - Canchaque + San Miguel del Faique" target="_blank"> <i class="fa fa-whatsapp"></i> Solicitar Ahora</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://www.monachecotoursperu.com/assets/img/paquetes/fulday-canchaque.jpg" alt="Tour Canchaque 2 días 1 noche">
                            <div class="card-body">
                                <h5 class="card-title">Canchaque 2 días 1 noche</h5>
                                <div style="margin-bottom: 35px;"></div>
                                <p class="card-text">De lunes a domingos: <span class="badge badge-danger">S/150.00</span> la pareja.</p>
                                <a class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target=".modal-paquete2"> <i class="fa fa-eye"></i> Más info</a>
                                <a class="btn btn-success btn-sm float-right text-white" href="https://wa.me/51919023541?text=Tour Full Canchaque 2 días 1 noche" target="_blank"> <i class="fa fa-whatsapp"></i> Solicitar Ahora</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://www.monachecotoursperu.com/assets/img/paquetes/fulday-canchaque-0.jpg" alt="Servicio FULL DAY Canchaque Monacheco Tours">
                            <div class="card-body">
                                <h5 class="card-title">Full Day Canchaque + Huayanay + Faique
                                </h5>
                                <div style="margin-bottom: 60px;"></div>
                                <p class="card-text">De lunes a domingos: <span class="badge badge-danger">S/80.00</span> por persona.</p>
                                <a class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target=".modal-paquete3"> <i class="fa fa-eye"></i> Más info</a>
                                <a class="btn btn-success btn-sm float-right text-white" href="https://wa.me/51919023541?text=Servicio FULL day Canchaque + Huayanay + Faique" target="_blank"> <i class="fa fa-whatsapp"></i> Solicitar Ahora</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://www.monachecotoursperu.com/assets/img/paquetes/ful-day-c.jpg" alt="Servicio FULL DAY Canchaque Monacheco Tours">
                            <div class="card-body">
                                <h5 class="card-title">Full Day Canchaque
                                </h5>
                                <div style="margin-bottom: 60px;"></div>
                                <p class="card-text">Salida todos los días: <span class="badge badge-danger">S/50.00</span> por persona.</p>
                                <a class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target=".modal-paquete-canchaque"> <i class="fa fa-eye"></i> Más info</a>
                                <a class="btn btn-success btn-sm float-right text-white" href="https://wa.me/51919023541?text=Servicio FULL DAY Canchaque" target="_blank"> <i class="fa fa-whatsapp"></i> Solicitar Ahora</a>
                            </div>
                        </div>
                    </div>
    
    
    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://www.monachecotoursperu.com/assets/img/paquetes/paquete1.jpg" alt="Trekking Catarata Chorro Blanco Monacheco Tours">
                            <div class="card-body">
                                <h5 class="card-title">Trekking Catarata Chorro Blanco</h5>
                                <a class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target=".modal-paquete4"> <i class="fa fa-eye"></i> Más info</a>
                                <a class="btn btn-success btn-sm float-right text-white" href="https://wa.me/51919023541?text=Trekking Catarata Chorro Blanco" target="_blank"> <i class="fa fa-whatsapp"></i> Solicitar Ahora</a>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://www.monachecotoursperu.com/assets/img/paquetes/paquete2.jpg" alt="Ruta Del Cafe – Canchaque Monacheco Tours">
                            <div class="card-body">
                                <h5 class="card-title">Ruta Del Cafe – Canchaque</h5>
    
                                <a class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target=".modal-paquete5"> <i class="fa fa-eye"></i> Más info</a>
                                <a class="btn btn-success btn-sm float-right text-white" href="https://wa.me/51919023541?text=Ruta Del Cafe – Canchaque" target="_blank"> <i class="fa fa-whatsapp"></i> Solicitar Ahora</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://www.monachecotoursperu.com/assets/img/paquetes/paquete3.jpg" alt="Tour Cataratas de Santa Ana-Canchaque  – Canchaque Monacheco Tours">
                            <div class="card-body">
                                <h5 class="card-title">Full Day Cataratas de Santa Ana</h5>
                                <div style="margin-bottom: 60px;"></div>
                                <p class="card-text">De lunes a domingos: <span class="badge badge-danger">S/100.00</span> por persona.</p>
                                <a class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target=".modal-paquete6"> <i class="fa fa-eye"></i> Más info</a>
                                <a class="btn btn-success btn-sm float-right text-white" href="https://wa.me/51919023541?text=Tour Cataratas de Santa Ana-Canchaque  – Canchaque" target="_blank"> <i class="fa fa-whatsapp"></i> Solicitar Ahora</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="card-img-top" src="https://www.monachecotoursperu.com/assets/img/paquetes/medanos-sechura.jpg" alt="Tour Desierto Fascinante Monacheco Tours">
                            <div class="card-body">
                                <h5 class="card-title">Tour Desierto Fascinante</h5>
                                <p class="card-text">De lunes a jueves: <span class="badge badge-danger">S/80.00</span> por persona.</p>
                                <a class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target=".modal-medanos"> <i class="fa fa-eye"></i> Más info</a>
                                <a class="btn btn-success btn-sm float-right text-white" href="https://wa.me/51919023541?text=Tour Desierto Fascinante" target="_blank"> <i class="fa fa-whatsapp"></i> Solicitar Ahora</a>
                            </div>
                        </div>
                    </div>
    
                </div>
    
    
    
                <div class="row pt-5">
                    <div class="col-md-4 mb-3"></div>
                    <div class="col-md-4 mb-3">
                        <p class="text-center"><strong>Solicitar más información vía: </strong></p>
                        <p class="text-center">
                            <a href="https://www.facebook.com/Monachecotours/" target="_Blank" class="btn btn-primary btn-sm"> <i class="fa fa-facebook"></i> Facebook</a>
                            <a href="https://instagram.com/monachecotours" target="_blank" class="btn btn-danger btn-sm"> <i class="fa fa-instagram"></i> Instagram</a>
                            <a href="https://wa.me/51919023541?text=Necesito más información paquetes Turísticos." target="_blank" class="btn btn-success btn-sm"> <i class="fa fa-whatsapp"></i> whatsapp</a>
                        </p>
                    </div>
                    <div class="col-md-4 mb-3"></div>
                </div>
    
            </div>
        </div>
    
          <!-- Modal paquete 1 2 Días 1 noche Canchaque + San Miguel del Faique + Mirador Huayanay -->
      <div class="modal fade bd-example-modal-lg modal-paquete1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">2 Días 1 noche Canchaque + San Miguel del Faique + Mirador Huayanay </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p class="text-justify">Servicio 2 días 1 noche en Canchaque + El faique + Mirador Huayanay.</p>
                      <p>Costo: s/190.00 (la pareja) - Salida todos los días.</p>
                      <div class="row">
    
                          <div class="col-md-6 mb-3">
                              <p> <strong>Tours a destinos turísticos como:</strong> <br>
                                  Peroles de Mishahuaca <br>
                                  Puente Colgante <br>
                                  Puente de la Chununa <br>
                                  City tour <br>
                                  Mirador central <br>
                                  Mirador Huayanay <br>
                                  Petroglifos <br>
                                  Quebrada del Limón <br>
                                  Iglesia de Canchaque <br>
                                  Casa Ciccia. <br>
                                  Tickets de Ingreso <br>
                                  Botiquín primeros auxilios. <br>
                                  Guía de Turismo. <br>
                                  Degustación de Café. <br>
                                  Sesión de fotos durante todo el recorrido. <br>
                                  Seguro de pasajeros <br>
                                  Movilidad interna a San Miguel del Faique. <br>
                                  Sorteo interno entre el grupo de turistas. <br>
                                  Protocolos de Bioseguridad.
    
                              </p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <p> <strong>Incluye:</strong> <br>
                                  Pareja: Habitación Matrimonial o doble. <br>
                                  2 Almuerzos por persona los 2 días. <br>
                                  Refrigerios. <br>
                                  2 mascarillas
                              </p>
    
                              <p> <strong>Recomendaciones:</strong> <br>
    
                                  Zapatillas deportivas o de Trekking. <br>
                                  Lentes de sol. <br>
                                  Bloqueador. <br>
                                  Repelente.
                              </p>
    
                          </div>
                      </div>
                      <p class="text-justify"> No incluye movilidad Piura/Canchaque o viceversa <br>
                          (Tour inicia en Canchaque 10:00 am y finaliza al siguiente día a las 1:30 PM día) <br>
                          Reserva se efectuará con el 100% por ser costo de promoción.
                      </p>
                      <p class="text-danger">Siguiendo todos los protocolos frente al Covid19.</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    
    
      <!-- Modal paquete 2 -->
      <div class="modal fade bd-example-modal-lg modal-paquete2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Canchaque 2 días 1 noche</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p>Salidas todos los días.</p>
                      <p>Costo: s/150 (la pareja)</p>
                      <!-- <p>Fines de semana: S/70 por persona / Disponible hasta agotar cupos.</p> -->
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <p> <strong>Incluye:</strong> <br>
                                  Pareja: Habitación Matrimonial con baño privado, tv por cable, wifi, terma.
                                  2 Almuerzos por persona los 2 días. <br>
                                  2 refrigerios. <br>
                                  2 mascarillas <br>
                                  Tours a destinos turísticos como: Peroles de Mishahuaca, Puente Colgante , Puente de la <br>
                                  Chununa, Mirador central , Quebrada del Limón, Iglesia de Canchaque, Casa Ciccia, casa blanca,
                                  fábrica de guarapo.
                                  Tickets de Ingreso <br>
                                  Botiquín primeros auxilios. <br>
                                  Guía español Inglés. <br>
                                  Degustación de Café y de licor. <br>
                                  Sesión de fotos durante todo el recorrido. <br>
                                  Sorteo interno entre el grupo de turistas. <br>
                                  Protocolos de Bioseguridad.
    
                              </p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <p> <strong>Recomendaciones:</strong> <br>
                                  Zapatillas deportivas <br>
                                  Lentes de sol.<br>
                                  Bloqueador.<br>
                                  Repelente
                              </p>
                          </div>
                      </div>
                      <p class="text-justify"> No incluye movilidad Piura/Canchaque o viceversa - Tampoco incluye Movílidad interna. </p>
                      <p class="text-justify">(Tour inicia en Canchaque 10:00 am y finaliza al siguiente día a las 1:30 PM día) <br> Reserva se efectuará con el 100% por ser costo de promoción. </p>
                      <p class="text-justify text-danger">Siguiendo todos los protocolos frente al Covid19.</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    
    
      <!-- Modal paquete 3 Full Day Canchaque + Huayanay + Faique -->
      <div class="modal fade bd-example-modal-lg modal-paquete3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Full Day Canchaque + Huayanay + Faique
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p>S/80.00 (por persona) - Válido a partir de 2 Personas o más.</p>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <p> <strong>Incluye:</strong> <br>
                                  Recoger desde su llegada a Canchaque <br>
                                  Refrigerio <br>
                                  1 Almuerzo por persona. <br>
                                  Degustación de Café <br>
                                  Degustación de licor <br>
                                  Mascarilla <br>
                                  Seguro de Pasajeros <br>
                                  Fotografías grupales del recorrido. <br>
                                  Visita a Peroles de Mishahuaca <br>
                                  Puente colgante, Puente la Chununa <br>
                                  Mirador Huayanay <br>
                                  San Miguel del Faique <br>
                                  Petroglifos <br>
                                  1 Guía <br>
                                  Fotos personalizadas <br>
                                  Atención personalizada + Botiquín primeros auxilios. <br>
                                  Tickets de ingreso a los lugares turísticos por visitar. <br>
                                  Sorteo interno entre el grupo de turistas. <br>
                                  Protocolos de Bioseguridad.
                              </p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <p> <strong>Recomendaciones:</strong> <br>
                                  Zapatillas deportivas o de Trekking. <br>
                                  Lentes de sol. <br>
                                  Bloqueador. <br>
                                  Repelente.
                              </p>
                          </div>
                      </div>
                      <p class="text-justify"> (No incluye movilidad Piura Canchaque o viceversa)  <br> Tour inicia en Canchaque (solo incluye movilidad a San Miguel del Faique, Huayanay y Petroglifos)  </p>
                      <p class="text-justify">Reserva se efectuará con el 100% por ser costo de promoción.</p>
                      <p class="text-justify text-danger">Siguiendo todos los protocolos frente al Covid19</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    
    <!-- ful day canchaque -->
      <div class="modal fade bd-example-modal-lg modal-paquete-canchaque" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Full Day Canchaque
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p>S/50.00 (por persona) - Salidas todos los días.</p>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <p> <strong>Incluye:</strong> <br>
                                  Tour Peroles de Mishahuaca <br>
                                  Puente colgante <br>
                                  Puente de la Chununa <br>
                                  Casa Ciccia <br>
                                  Ruta Fábrica de Guarapo <br>
                                  Casa blanca <br>
                                  Mirador <br>
                                  Trekking quebrada del Limón <br>
                                  2 almuerzos <br>
                                  2 refrigerios <br>
                                  2 mascarillas <br>
                                  Guía de Turismo <br>
                                  Fotografías en todo el recorrido <br>
                                  Degustación de Café y Licor <br>
                                  Botiquín primeros auxilios. <br>
                                  Sorteo interno entre el grupo de turistas. <br>
                                  Protocolos de Bioseguridad.
    
                              </p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <p> <strong>Recomendaciones:</strong> <br>
                                  Zapatillas deportivas o de Trekking. <br>
                                  Lentes de sol. <br>
                                  Bloqueador. <br>
                                  Repelente.
                              </p>
                          </div>
                      </div>
                      <p class="text-justify">Tour inicia desde su llegada a Canchaque a las 10:00 am.  - Tour Finaliza el mismo día en Canchaque 4:00 pm. <br>(No incluye movilidad Piura/Canchaque o movilidad interna en Canchaque.)</p>
                      <p class="text-justify">Reserva se efectuará con el 100% por ser costo de promoción.</p>
                      <p class="text-justify text-danger">Siguiendo todos los protocolos frente al Covid19.</p>
    
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    
    
    
      <!-- Modal paquete 4 -->
      <div class="modal fade bd-example-modal-lg modal-paquete4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Trekking Catarata Chorro Blanco</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p> El costo es de s/40.00 por persona - Válido a partir de 4 Personas o más.</p>
                      <p>(Tour inicia en Canchaque 8:00 am y finaliza a la 2:00 PM) </p>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <p> <strong>Incluye:</strong> <br>
                                  Trekking Chorro Blanco <br>
                                  Refrigerio <br>
                                  Instructor <br>
                                  1 almuerzo por persona <br>
                                  1 mascarilla por persona <br>
                                  Equipo de primeros auxilios <br>
                                  Fotos durante el recorrido <br>
                                  Degustación de café y Licor <br>
                                  Sorteo interno entre el grupo de turistas. <br>
                                  Protocolos de Bioseguridad.
    
                              </p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <p> <strong>Se recomienda</strong> <br>
                                  Zapatillas deportivas o de Trekking. <br>
                                  Lentes de sol . <br>
                                  Bloqueador. <br>
                                  Repelente. <br>
                                  Baston de trekking (en caso lo tuvieran). <br>
                              </p>
                          </div>
                      </div>
                      <p class="text-justify">Tour inicia y finaliza en Canchaque - No incluye Movilidad Piura-Canchaque o viceversa </p> 
                      <p class="text-justify">(Tour inicia en Canchaque 8:00 am y finaliza a la 2:00 PM) <br> Reserva se efectuará con el 100% por ser costo de promoción. </p>
                      <p class="text-justify text-danger">Siguiendo todos los protocolos frente al Covid19.</p>
     
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    
      <!-- Modal paquete 4 -->
      <div class="modal fade bd-example-modal-lg modal-paquete5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Ruta Del Cafe – Canchaque</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p class="text-justify">Disfruta de la tranquilidad de la naturaleza, el aire fresco, paisajes hermosos y conoce la cultura de Canchaque en un paseo de aventura en bicicleta a través de los hermosos caminos de Café.</p>
                      <p>Costo/50.00 (por persona).</p>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <p> <strong>Incluye:</strong> <br>
                                  Refrigerio <br>
                                  1 Guía instructor <br>
                                  Bicicleta Montañera modelo MTB / Trek de Aluminio. <br>
                                  Botiquín primeros auxilios.<br>
                                  Casco <br>
                                  degustacion de cóctel.<br>
                                  Botiquín primeros auxilios.<br>
                              </p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <p> <strong>No incluye</strong> <br>
                                  Almuerzo. <br>
                                  Pasajes Piura/Canchaque/Piura. <br>
                                  Tour inicia desde su llegada a Canchaque. <br>
                              </p>
                          </div>
                      </div>
                      <p class="text-justify">No incluye movilidad Piura/Canchaque o viceversa. </p> 
                        <p class="text-justify text-danger">Siguiendo todos los protocolos frente al Covid19.</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    
    
    
      <!-- Modal paquete 6 -->
      <div class="modal fade bd-example-modal-lg modal-paquete6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Full Day Cataratas de Santa Ana </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p class="text-justify">Salidas todos los días.</p>
                      <p>Costo S/100 por persona - Válido a partir de 4 Personas o más. </p>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <p> <strong>Incluye:</strong> <br>
                                  Movilidad Canchaque - Cataratas de Santa Ana ida y vuelta, San Miguel del faique. <br>
                                  Peroles de Mishahuaca <br>
                                  Mirador Huayanay <br>
                                  Tickets de Ingreso. <br>
                                  Guía de Turismo <br>
                                  Mascarilla por persona <br>
                                  Refrigerios <br>
                                  Almuerzo de la zona por persona. <br>
                                  Fotos durante el recorrido <br>
                                  Botiquín primeros auxilios <br>
                                  Protocolos de Bioseguridad. <br>
                                  Degustación de café y de licor <br>
                                  Sorteo interno entre el grupo de turistas.
                              </p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <p> <strong>Recomendaciones:</strong> <br>
                                  Zapatillas deportivas o de Trekking. <br>
                                  Lentes de sol.<br>
                                  Bloqueador. <br>
                                  Repelente. <br>
                                  Baston de trekking (en caso lo tuvieran).
                              </p>
                          </div>
                      </div>
                        <p class="text-justify">Nuestro servicio no incluye Movílidad Piura-Canchaque o viceversa. - Tour inicia en Canchaque 10:00 am (plaza de armas)</p>
                        <p class="text-justify">Horario: De 10:00 AM a 4:00 PM <br> Reserva se efectuará con el 100% por ser costo de promoción. </p>
                        <p class="text-justify text-danger">Siguiendo todos los protocolos frente al Covid19.</p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    
    
      <!-- Modal medanos sechura 6 -->
      <div class="modal fade bd-example-modal-lg modal-medanos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Tour Desierto Fascinante</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p class="text-justify">Disponible solo domingos </p>
                      <p>Costo S/80 por persona. <br> Salidas todos los días. </p>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <p> <strong>Visitamos:</strong> <br>
                                  Playa Chuyillache <br>
                                  Manglares de Chuyillache <br>
                                  Duna Médano Blanco <br>
                                  Desierto de Sechura.<br>
                                  Práctica de kayak <br>
                                  Sandboard en la duna <br>
                                  Médano Blanco <br>
                              </p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <p>
                                  <strong>Incluye:</strong> <br>
                                  Equipos de Sandboard <br>
                                  Guía e instructor. <br>
                                  Traslados en TUBULAR <br>
                              </p>
                          </div>
                      </div>
                      <p class="text-justify">No incluye movilidad Piura/Canchaque o viceversa. <br> Inicia y culmina en Sechura.
                          Siguiendo todos los <strong>protocolos</strong> frente al Covid19.<br>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>
    
    
    
      <!-- 3 Días 2 Noches Noches Canchaque VIP -->
      <div class="modal fade bd-example-modal-lg modal-paquete-vip" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">3 Días 2 Noches Noches Canchaque VIP</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <p class="text-justify">Habitación Matrimonial con baño privado, tv por cable, wifi , terma - Salidas todos los días.</p>
                      <p>Costo: S/450.00 (La pareja)</p>
                      <div class="row">
                          <div class="col-md-6 mb-3">
                              <p> <strong>Incluye:</strong> <br>
                                  Transporte: Canchaque - San Miguel del Faique y Mirador Huayanay <br>
                                  Peroles de Mishahuaca <br>
                                  Petroglifos <br>
                                  3 días 2 noches de alojamiento en Hospedaje. <br>
                                  3 almuerzos <br>
                                  2 desayunos <br>
                                  Refrigerios <br>
                                  Degustación de café y de licor <br>
                                  Movilidad a San Miguel del Faique y Mirador Huayanay. <br>
                                  Full Day Peroles de Mishahuaca <br>
                                  Puente de la Chununa <br>
                                  Puente Colgante <br>
                                  Casa Blanca <br>
                                  Casa Ciccia <br>
                                  Fábrica de Guarapo <br>
                                  Mirador central <br>
                                  Lagunillas Full Day – opcional: Cataratas de chorro blanco según disponibilidad. <br>
                                  Ingreso a los atractivos turísticos. <br>
                                  Guiado especializado de la zona y atención personalizada. <br>
                                  Petroglifos 3 Mangos. <br>
                                  1 Mascarilla por persona. <br>
                                  - Protocolos de Bioseguridad. <br>
                                  -Sorteo interno entre el grupo de turistas.
                              </p>
                          </div>
                          <div class="col-md-6 mb-3">
                              <p>
                                  <strong>Recomendaciones:</strong> <br>
                                  Zapatillas deportivas o de Trekking <br>
                                  Lentes de sol . <br>
                                  Bloqueador. <br>
                                  Repelente. <br>
                                  Baston de trekking (en caso lo tuvieran).
    
                              </p>
                          </div>
                      </div>
                      <p class="text-justify">
                          Reservas: info@monachecotoursperu.com <br>
                          Dirección: Jr. La esperanza 112 - Canchaque Huancabamba.
                      </p>
                      <p class="text-justify">
                          (Tour inicia en Canchaque 10:00 am y finaliza día 3 a la 1:30 PM).<br>
                          No incluye: Movilidad interna en Canchaque.
                          Solo a San Miguel del Faique + Mirador Huayanay <br> Reserva se efectuará con el 100% por ser costo de promoción.
                      </p>
                      <p class="text-justify text-danger">
                          Siguiendo todos los protocolos frente al Covid19.
                      </p>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  </div>
              </div>
          </div>
      </div>    
</div>   
    </section>
@endsection
    
