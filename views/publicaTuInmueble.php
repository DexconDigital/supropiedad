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
                <div class="col-12 wow fadeIn">
                    <h1 class="pt-2 mb-4 text-center">Publica Tu inmueble</h1>
                </div>
                <div class="col-12 wow fadeIn">
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
                    <div class="col-12">
                        <h3 class="text-center mb-4 mt-4"><?php echo $con['oferta']['titulo_formulario'][0]; ?></h3>
                    </div>
                    <div class="col-6">
                        <img src="<?php echo $url_host ?>images/publica.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <div>
                            <h5 class="text-center mb-2">¡Un asesor se contactara contigo lo más pronto posible!</h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Inmueble</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row mt-4">
                                        <div class="col-6 form-group">
                                            <input type="text" class="form-control" placeholder="Nombres">
                                        </div>
                                        <div class="col-6 form-group">
                                            <input type="text" class="form-control" placeholder="Apellidos">
                                        </div>
                                        <div class="col-6 form-group">
                                            <input type="text" class="form-control" placeholder="Documento">
                                        </div>
                                        <div class="col-6 form-group">
                                            <input type="text" class="form-control" placeholder="Teléfono">
                                        </div>
                                        <div class="col-12 form-group">
                                            <input type="text" class="form-control" placeholder="Correo">
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
                                        <div class="col-6 form-group">
                                            <select name="" id="tipo_gestion_buscar" class="form-control">
                                                <option value="0">Gestión</option>
                                            </select>
                                        </div>
                                        <div class="col-6 form-group">
                                            <select name="" id="tipo_inmueble_buscar" class="form-control">
                                                <option value="0">Tipo Inmueble</option>
                                            </select>
                                        </div>
                                        <div class="col-3 form-group">
                                            <input type="text" class="form-control" placeholder="Estrato">
                                        </div>
                                        <div class="col-9 form-group">
                                            <input type="text" class="form-control" placeholder="Dirección">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="text" class="form-control" placeholder="Ciudad">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="text" class="form-control" placeholder="Precio">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="text" class="form-control" placeholder="Área">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="text" class="form-control" placeholder="Habitaciones">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="text" class="form-control" placeholder="Baños">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="text" class="form-control" placeholder="Parqueaderos">
                                        </div>
                                        <div class=" col-12 form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck" style="height:auto;">
                                                <label class="form-check-label" for="gridCheck">
                                                    Confirmo que he leído, entendido y acepto la <a href="<?php echo $url_host; ?>formatos/politica_de_datos.pdf">política
                                                        de tratamiento de datos personales</a>
                                                    de su Propiedad Inmobiliaria SAS
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 row justify-content-center">
                                            <div class="col-4">
                                                <button type="button" class="btn btn-primary btn-md btn-block">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                <div class="col-6 d-flex align-items-center">
                    <!-- Contenedor -->
                    <div>
                        <h3 class="">Experiencia</h3>
                        <p>Su Propiedad Inmobiliaria tiene experiencia en el mercado inmobiliaria por más de 18 años, lo
                            cual nos permite brindar siempre el mejor servicio en nuestras diferentes sedes ubicadas en las
                            ciudades Medellín y Bogotá. En nuestras sucursales contamos con nuestros mejores aliados para
                            realizar un estudio ágil y confiable para poderles brindar siempre el mejor respaldo y
                            garantías.</p>
                    </div>
                </div>
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/Experiencia.jpeg" alt="" class="img-fluid">
                </div>
            </div>
            <!-- bloque -->
            <div class="row mt-4 wow fadeIn">
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/Fotografia.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">FOTOGRAFIA CON CAMARAS Y LENTES PROFESIONALES</h3>
                        <p>Todos los inmuebles consignados a SU PROPIEDAD INMOBILIARIA serán visitados por nuestro Bróker
                            Inmobiliario y se tomarán fotografías de alta calidad, con cámaras y lentes profesionales.
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
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">VISIBILIDAD</h3>
                        <p>Publicación y promoción de tu inmueble en diferentes medios; propios y externos, tales como
                            Principales y más importantes portales inmobiliarios del país, nuestra página web, periódicos,
                            revistas especializadas, avisos, entre otros.</p>
                    </div>
                </div>
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/Visibilidad y servicio personalizado.jpeg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Servicio profesional digitalizado -->
    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/personalizado.jpeg" alt="" class="img-fluid">
                </div>
                <div class="col-6 d-flex align-items-center">
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
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">ASESORÍA Y SEGUIMIENTO</h3>
                        <p>Te asignamos un Bróker Inmobiliario encargado de tu inmueble y de realizar las asesorías y visitas que requiera tu inmueble. Adicionalmente diseñamos plan de marketing y estrategias para arrendar/vender tu inmueble rápidamente, junto con asesoría jurídica y comercial durante todo el proceso.</p>
                    </div>
                </div>
                <div class="col-6">
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
                    <h1 class="mb-4 mt-4 pb-2 text-center">NUESTROS MEJORES PRECIOS Y BENEFICIOS</h1>
                </div>
                <div class="col-12">
                    <h2 class="mb-4 mt-4">Arriendo</h2>
                </div>
                <!-- administración  -->
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="mt-4 mb-4 text-center">Administración</h4>
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
                                        <p>Realizamos estudios de crédito al arrendatario con respuesta en menos de 4-8 horas en promedio.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p>Garantizamos el pago ANTICIPADO (5 primeros días hábiles de cada mes) de tu canon de arrendamiento por medio de transferencia electrónica, esté o no en mora el arrendatario.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p>Tenemos la opción de ADELANTAR los primeros 3 meses de arriendo. *Aplica términos y condiciones.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"></i>
                                        <p>Contamos con el respaldo de empresas ASEGURADORAS/AFIANZADORAS durante toda la vigencia del contrato.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt   -1 mr-2"></i>
                                        <p>Ofrecemos el servicio de pago de la administración de la copropiedad de tu inmueble (Si aplica).</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- corretajae  -->
                <div class="col-6">
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
                <div class="col-12">
                    <h2 class="mb-4 mt-4">Ventas</h2>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-8">
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


                <!-- </div>
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">ARRIENDO</h3>
                        <p>En Administración, PRECIO UNICO mensual del 10% más IVA de comisión INCLUIDO el Seguro/Fianza de Arrendamiento.</p>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">EFECTIVIDAD</h3>
                        
                    </div>
                </div>
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                </div>
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">PAGOS</h3>
                        <ul class="pl-3">
                            <li><i class="fas fa-check mr-2"></i>Garantizamos el pago ANTICIPADO (5 primeros días hábiles de cada mes) de tu canon de arrendamiento por medio de transferencia electrónica, esté o no en mora el arrendatario.</li>
                            <li><i class="fas fa-check mr-2"></i>Tenemos la opción de ADELANTAR los primeros 3 meses de arriendo. *Aplica términos y condiciones.</li>
                            <li><i class="fas fa-check mr-2"></i>Contamos con el respaldo de empresas ASEGURADORAS/AFIANZADORAS durante toda la vigencia del contrato.</li>
                            <li><i class="fas fa-check mr-2"></i>Ofrecemos el servicio de pago de la administración de la copropiedad de tu inmueble (Si aplica).</li>
                        </ul>
                    </div>
                </div>

                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">SEGURIDAD Y RESPALDO</h3>
                        <ul class="pl-3">
                            <li><i class="fas fa-check mr-2"></i>Realizamos un detallado inventario fotográfico y escrito INICIAL y FINAL del estado del inmueble.</li>
                            <li><i class="fas fa-check mr-2"></i>Respondemos por los servicios públicos domiciliarios y daños que NO sean por el deterioro normal del inmueble mientras está ocupado.</li>
                            <li><i class="fas fa-check mr-2"></i>Asumimos honorarios de abogados encargados de llevar cualquier proceso de restitución del inmueble en caso de mora.</li>
                            <li><i class="fas fa-check mr-2"></i>Revisamos que los arrendatarios que vayan a ocupar el inmueble NO tengan antecedentes legales de ninguna índole.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                </div>
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">Corretaje</h3>
                        <p>Administras tu arriendo directamente, y SU PROPIEDAD INMOBILIARIA te consigue el cliente.
                            Precio correspondiente a un (1) Canon de arrendamiento Más IVA.</p>
                    </div>
                </div>

                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">TRAMITES</h3>
                        <p>Hacemos los trámites de estudio de papeles de los futuros arrendatarios ante la Aseguradora/ Afianzadora.</p>
                        <p> Realizamos un detallado inventario INCIAL fotográfico y escrito del inmueble. </p>
                        <p> Realizamos contrato de arrendamiento y ofrecemos también acompañamiento de trámite ante notaria para la firma. </p>
                    </div>
                </div>
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                </div>
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">GARANTIA</h3>
                        <p>Entregamos carpeta al propietario con todos los documentos al día. Aprobado Aseguradora/Afianzadora, contratos autenticados, formularios, inventario, entre otros. </p>
                    </div>
                </div>

                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h3 class="">VENTA</h3>
                        <p>Comisión de 3% más IVA para inmuebles ubicados en las ciudades principales.
                            Comisión de 5% más IVA para inmuebles ubicados por fuera de las ciudades principales. </p>
                    </div>
                </div>
                <div class="col-6">
                    <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                </div>
                <div class="col-6 pb-4">
                    <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                </div>
                <div class="col-6 d-flex align-items-center pb-4">
                    <div>
                        <h3 class="">Más Beneficios</h3>
                        <p>Asesoría jurídica</p>
                        <p>Realizamos contrato de Promesa de venta</p>
                        <p>Nos encargamos de hacer todos los trámites requeridos y necesarios.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</div>