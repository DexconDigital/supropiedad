<?php $page = "consigna";
include 'layout/menu2.php';
$con = $consignar_inmueble;
?>

<script>
    var pagina = 'consignar';
</script>

<div id="consigna" class="separador pb-0 overflow-hidden">
    <section class="consignar-inmueble">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeIn titulo_publica">
                    <h2 class="pt-2 mb-4 text-center">PUBLICA TU INMUEBLE</h2>
                </div>
                <div class="col-10 col-md-11 col-lg-12 text_publica wow fadeIn">
                    <p><?php echo $con['parrafos'][0]; ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Frase consigna -->

    <!-- formulario-consigna -->
    <section class="formulario-consigna bg-grey pb-4 wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-12 row">
                    <div class="col-12 cont_titulo">
                        <h3 class="text-center mb-4 mt-4"><?php echo $con['oferta']['titulo_formulario'][0]; ?></h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-11 mb-4 cont_img">
                        <img src="<?php echo $url_host ?>images/publica.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-6 col-11 cont_items  d-flex align-items-center">
                        <div>
                            <h5 class="text-center mb-2">¡Un asesor se contactará contigo lo más pronto posible!</h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Inmueble</a>
                                </li>
                            </ul>
                            <form action="email/formulario_publica_tu_inmueble.php" method="post">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row mt-4">
                                            <div class="col-lg-6 col-md-6 col-12 form-group">
                                                <input type="text" name="nombrep" id="nombrep" class="form-control" placeholder="Nombres" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12 form-group">
                                                <input type="text" name="apellidop" id="apellidop" class="form-control" placeholder="Apellidos" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12 form-group">
                                                <input type="text" name="documentop" id="documentop" class="form-control" placeholder="Documento" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12 form-group">
                                                <input type="text" name="telefonop" id="telefonop" class="form-control" placeholder="Teléfono" required>
                                            </div>
                                            <div class="col-12 form-group">
                                                <input type="text" name="correop" id="correop" class="form-control" placeholder="Correo" required>
                                            </div>
                                            <div class="col-12 row justify-content-end pr-0">
                                                <div class="col-4 pr-0">
                                                    <a class="btn btn-primary btn-md btn-block" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Siguiente</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row mt-4">
                                            <div class="col-lg-6 col-md-6 col-12 form-group">
                                                <select name="tipo_gestionp" id="tipo_gestionp" class="form-control" required>
                                                    <option selected>Gestión</option>
                                                    <option value="Arriendo">Arriendo</option>
                                                    <option value="Venta">Venta</option>
                                                    <option value="Venta Y Arriendo">Venta Y Arriendo</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12 form-group">
                                                <select name="tipo_inmueblep" id="tipo_inmueblep" class="form-control" required>
                                                    <option selected>Tipo Inmueble</option>
                                                    <option value="Apartaestudio">Apartaestudio</option>
                                                    <option value="Apartamento">Apartamento</option>
                                                    <option value="Bodega">Bodega</option>
                                                    <option value="Casas">Casas</option>
                                                    <option value="Consultorios">Consultorios</option>
                                                    <option value="Edificios">Edificios</option>
                                                    <option value="Fincas">Fincas</option>
                                                    <option value="Hotel">Hotel</option>
                                                    <option value="Locales">Locales</option>
                                                    <option value="Lotes">Lotes</option>
                                                    <option value="Oficinas">Oficinas</option>
                                                    <option value="Parqueaderos">Parqueaderos</option>
                                                    <option value="Proyecto">Proyecto</option>
                                                    <option value="Otro">Otro</option>

                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-4 form-group">
                                                <input type="text" name="estratop" id="estratop" class="form-control" placeholder="Estrato" required>
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-8 form-group">
                                                <input type="text" name="direccionp" id="direccionp" class="form-control" placeholder="Dirección" required>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6 form-group">
                                                <input type="text" id="ciudadp" name="ciudadp" class="form-control" placeholder="Ciudad" required>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6 form-group">
                                                <input type="text" id="preciop" name="preciop" class="form-control" placeholder="Precio" required>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6 form-group">
                                                <input type="text" id="areap" name="areap" class="form-control" placeholder="Área" required>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6 form-group">
                                                <input type="text" id="habitap" name="habitap" class="form-control" placeholder="Habitaciones" required>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6 form-group">
                                                <input type="text" id="banosp" name="banosp" class="form-control" placeholder="Baños" required>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6 form-group">
                                                <input type="text" id="garajep" name="garajep" class="form-control" placeholder="Parqueaderos" required>
                                            </div>
                                            <div class=" col-12 form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck" style="height:auto;" required>
                                                    <label class="form-check-label" for="gridCheck">
                                                        Confirmo que he leído, entendido y acepto la <a target="_blank" href="<?php echo $url_host; ?>formatos/politica_de_datos.pdf">política
                                                            de tratamiento de datos personales</a> y <a target="_blank" href="<?php echo $url_host; ?>formatos/TERMINOS-Y-CONDICIONES.pdf">Terminos y condiciones</a>
                                                        de SU PROPIEDAD INMOBILIARIA SAS
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12 row justify-content-center">
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-primary btn-md btn-block">Enviar</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="oferta">
        <div class="container">
            <div class="row mt-4 wow fadeIn">
                <div class="col-12">
                    <h2 class="">¿Por qué publicar con nosotros?</h2>
                </div>
                <!-- bloque -->
                <div class="col-md-6 col-lg 6 col-10 cont_experiencia d-flex align-items-center">
                    <!-- Contenedor -->
                    <div>
                        <h3 class="">Experiencia</h3>
                        <p>SU PROPIEDAD INMOBILIARIA tiene experiencia en el mercado inmobiliaria por más de 18 años, lo
                            cual nos permite brindar siempre el mejor servicio en nuestras diferentes sedes ubicadas en las
                            ciudades Medellín y Bogotá. En nuestras sucursales contamos con nuestros mejores aliados para
                            realizar un estudio ágil y confiable para poderles brindar siempre el mejor respaldo y
                            garantías.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg 6 col-10 cont_experiencia">
                    <img src="<?php echo $url_host; ?>images/Experiencia.jpeg" alt="" class="img-fluid">
                </div>
            </div>
            <!-- bloque -->
            <div class="row mt-4 wow fadeIn">
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia">
                    <img src="<?php echo $url_host; ?>images/Fotografia.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia d-flex align-items-center">
                    <div>
                        <h3 class="">FOTOGRAFÍA CON CAMARAS Y LENTES PROFESIONALES</h3>
                        <p>Todos los inmuebles consignados a SU PROPIEDAD INMOBILIARIA serán visitados por nuestro BRÓKER INMOBILIARIO
                            y se tomarán fotografías de alta calidad, con cámaras y lentes profesionales.
                            Sabemos la importancia de mostrar cada de detalle al momento de ofrecerlos para venta/arriendo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vision">
        <div class="container">
            <!-- bloque -->
            <div class="row mt-4 wow fadeIn vision pt-4 pb-4">
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia d-flex align-items-center">
                    <div>
                        <h3 class="">VISIBILIDAD</h3>
                        <p>Publicación y promoción de tu inmueble en diferentes medios; propios y externos, tales como
                            Principales y más importantes portales inmobiliarios del país, nuestra página web, periódicos,
                            revistas especializadas, avisos, entre otros.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia">
                    <img src="<?php echo $url_host; ?>images/Visibilidad y servicio personalizado.jpeg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Servicio profesional digitalizado -->
    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia">
                    <img src="<?php echo $url_host; ?>images/personalizado.jpeg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia d-flex align-items-center">
                    <div>
                        <h3 class="">SERVICIO PERSONALIZADO Y DIGITAL</h3>
                        <p>Acceso a tus facturas y estados de cuenta por medio de nuestra página web www.supropiedadinmobiliaria.com. Así mismo, Valoramos tu TIEMPO, nos desplazamos por ti y hacemos todos los trámites necesarios ante bancos, notarias, abogados, entre otros; y te ofrecemos nuestra Comunicación rápida y fluida ante cualquier requerimiento por WhatsApp, Correo electrónico o telefónicamente. Respondemos sus solicitudes en un promedio de 1 ó 2 días hábiles.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia d-flex align-items-center">
                    <div>
                        <h3 class="">ASESORÍA Y SEGUIMIENTO</h3>
                        <p>Te asignamos un BRÓKER INMOBILIARIO encargado de tu inmueble y de realizar las asesorías y visitas que requiera tu inmueble. Adicionalmente diseñamos plan de marketing y estrategias para arrendar/vender tu inmueble rápidamente, junto con asesoría jurídica y comercial durante todo el proceso.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia">
                    <img src="<?php echo $url_host; ?>images/asesoriayseguimiento.jpeg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Frase del inmueble
    <section class="frase_consigna">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center mb-4 mt-4 pt-4 pb-4 wow zoomIn" data-wow-delay="1.3s">
                        <?php echo $con['oferta']['parrafo_2'][0]; ?></h4>
                </div>
            </div>
        </div>
    </section> -->

    <!-- otros servicios -->
    <section class="pt-4" id="otros-servicios">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h2 class="mb-4 mt-4 pb-2 text-center">NUESTROS MEJORES PRECIOS Y BENEFICIOS</h2>
                </div>
                <div class="col-12">
                    <h2 class="mb-4 mt-4 cont_experiencia">Arriendo</h2>
                </div>
                <!-- administración  -->
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-4 mb-4 text-center">En Administración - Tu Arriendo Seguro</h4>
                        </div>
                        <div class="col-12">
                            <div class="card-body pl-0">
                            <ul class="pl-0">
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>PRECIO UNICO mensual del 10% más IVA de comisión INCLUIDO el Seguro/Fianza de Arrendamiento.</p>
                               </li>
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>Pagamos el canon de arrendamiento los primeros CINCO (5) días hábiles de cada mes. </p>
                               </li>
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>Respondemos por los DAÑOS Y FALTANTES realizados por el arrendatario durante la vigencia del contrato. <small><strong>No incluye desgaste natural por uso ó por tiempo; ni arreglos locativos que requiera el inmueble.</strong></small></p>
                               </li>
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>Pagamoslos SERVICIOS PÚBLICOS hasta el día que sea habitado el inmueble por el arrendatario.</p>
                               </li>
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>Cobramos y pagamos a la Administración de la copropiedad las multas generadas por el inquilino, durante la vigencia del contrato. <small><strong>Aplica debido proceso en el cobro de la multa generada.</strong></small></p>
                               </li>
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>Pago del 100% de la cláusula penal si el inquilino abandona o desocupa el inmueble sin justa causa antes de que finalice el contrato. <small><strong>Aplica términos y condiciones.</strong></small></p>
                               </li>
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>Ofrecemos el servicio de pago de la administración de la copropiedad de tu inmueble (Si aplica). <small><strong>Aplica términos y condiciones.</strong></small></p>
                               </li>
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>El contrato de arredamiento contará con una póliza de ASEGURADORA/AFIANZADORA durante toda la vigencia del contrato.</p>
                               </li>
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>Brindamos la opción de ADELANTAR los primeros 3 meses de arriendo. <small><strong>Aplica términos y condiciones.</strong></small></p>
                               </li>
                               <li class="d-flex">
                                   <i class="fas fa-check mt-1 mr-2"></i>
                                   <p>Realizamos estudios de crédito al arrendatario con respuesta en menos de 4-8 horas en promedio. <small><strong>Aplica términos y condiciones.</strong></small></p>
                               </li>
                                  </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- corretajae  -->
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-4 mb-4 text-center">Corretaje</h4>
                        </div>
                        <div class="col-12">
                            <div class="card-body pl-0">
                                <ul class="pl-0">
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p>Administras tu arriendo directamente, y SU PROPIEDAD INMOBILIARIA te consigue el cliente.
                                            Precio correspondiente a un (1) Canon de arrendamiento Más IVA.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p>Hacemos los trámites de estudio de papeles de los futuros arrendatarios ante la Aseguradora/ Afianzadora.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p> Realizamos un detallado inventario INICIAL fotográfico y escrito del inmueble. </p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p>Realizamos contrato de arrendamiento y ofrecemos también acompañamiento de trámite ante notaria para la firma. </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ventas  -->
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-4 mb-4 text-center">Ventas</h4>
                        </div>
                        <div class="col-12">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card-body pl-0">
                                        <ul class="pl-0">
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Comisión de 3% más IVA para inmuebles ubicados en las ciudades principales.
                                                    Comisión de 5% más IVA para inmuebles ubicados por fuera de las ciudades principales. </p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Asesoría jurídica</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Realizamos contrato de Promesa de venta</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Nos encargamos de hacer todos los trámites requeridos y necesarios.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- corretajae  -->
                <div class="col-lg-6 col-md-6 col-10 cont_experiencia">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-4 mb-4 text-center">Avalúos</h4>
                        </div>
                        <div class="col-12">
                            <div class="card-body pl-0">
                                <ul class="pl-0">
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p>En SU PROPIEDAD INMOBILIARIA contamos con un grupo de Avaluadores altamente capacitados y calificados para ofrecerles un servicio de calidad a los clientes. Nuestros Avaluadores cuentan con el Registro Nacional de Avalúos R.N.A. y el Registro Abierto de Avaluadores A.N.A.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p>Registro Abierto de Avaluadores A.N.A.
                                            En nuestros Avalúos tenemos diferentes maneras y métodos de hacer la estimación más aproximada del valor del inmueble ya sea para compra o venta.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p>Nuestro personal está constantemente actualizándose acerca de los precios, de acuerdo al mercado inmobiliario y su comportamiento, tanto para venta, como para arriendo. Para realizar el avaluó solo necesitamos una copia de la escritura de compraventa del bien, en cuanto al precio este varía de acuerdo al área del inmueble.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>