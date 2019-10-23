<?php $page = "servicios";
include 'layout/menu2.php';
?>
<script>
    var pagina = 'servicios';
</script>

<section id="nuestros_servicios" class="separador">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4 wow zoomInUp" data-wow-delay=".5s" data-wow-duration="2s">Nuestros Servicios</h2>
            </div>
            <div class="col-12 wow zoomInDown" data-wow-delay=".6s" data-wow-duration="2s">
                <?php for ($i = 0; $i < count($texto_servicios['parrafos']); $i++) {
                    echo '
                        <p>' . $texto_servicios['parrafos'][$i] . '</p>
                    ';
                } ?>
            </div>
        </div>
    </div>
</section>

<!--

<section>
    <div id="accordion">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <h2 class="color_titulo">Arriendo</h2>
                        <p>
                            <button class="btn btn-primary col-12 collapsed" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="true" aria-controls="uno">
                                <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO ARRENDAR MI PROPIEDAD
                            </button>

                        </p>
                    </div>
                    <div class="col-4">
                        <h2 class="color_titulo">Venta</h2>
                        <p>
                            <button class="btn btn-primary col-12 collapsed" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO VENDER
                            </button>
                        </p>
                    </div>
                    <div class="col-4">
                        <h2 class="color_titulo">Avalúos</h2>
                        <p>
                            <button class="btn btn-primary col-12 collapsed" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="false" aria-controls="tres">
                                <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO AVALUAR MI INMUEBLE
                            </button>
                        </p>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="card">
            <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div id="tres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</section>
            -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/common.js"></script>


<section id="servi_ar_ven_ava" class=" wow bounceInLeft " data-wow-delay=".7s" data-wow-duration="2s">
    <div id="accordion">
        <div class="container">
            <div class="col-12">
                <div class="row">
                    <!-- Opcion #uno-->
                    <div class="col-4">
                        <h2 class="color_titulo">Arriendo</h2>
                        <p>
                            <button class="btn btn-primary col-12 collapsed" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO ARRENDAR MI PROPIEDAD
                            </button>
                        </p>
                    </div>
                    <!-- Opcion #dos-->
                    <div class="col-4">
                        <h2 class="color_titulo">Venta</h2>
                        <p>
                            <button class="btn btn-primary col-12 collapsed" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO VENDER
                            </button>
                        </p>
                    </div>
                    <!-- Opcion #tres-->
                    <div class="col-4">
                        <h2 class="color_titulo">Avalúos</h2>
                        <p>
                            <button class="btn btn-primary col-12 collapsed" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="true" aria-controls="collapseExample">
                                <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO AVALUAR MI INMUEBLE
                            </button>
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <!-- Targeta #uno-->
                    <div class="card">
                        <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
                            <div class="card-body mb-3">
                                <div class="row">
                                    <div class="col-4"><img class="imagen" src="images/Arrienda_propiedad.jpeg" alt=""></div>
                                    <div class="col-8 text-justify"> En SU PROPIEDAD INMOBILIARIA somos expertos en brindarte el mejor acompañamiento en la búsqueda de tu inmueble ideal hasta finalizar el proceso con la entrega de este. Nuestros aliados hacen que el proceso de arriendo sea más fácil y práctico a la hora de presentar los documentos para tu estudio. Tenemos en promedio respuesta en trámites en menos de 24 horas. Para tranquilidad de nuestros clientes, nuestros contratos y procesos están avalados por la secretaria de gobierno y La Lonja de Propiedad raíz. Nuestros asesores, están totalmente a disposición de nuestros clientes para la búsqueda de tu inmueble ideal según tus necesidades y requerimientos.</div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="titulos"> <strong>EN ADMINISTRACIÓN - TU ARRIENDO SEGURO</strong></h5>
                                        <ul class="pl-0">
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>PRECIO UNICO mensual del 10% más IVA de comisión INCLUIDO el Seguro/Fianza de Arrendamiento.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Realizamos estudios de crédito al arrendatario con respuesta en menos de 4-8 horas en promedio. <small><strong>Aplica términos y condiciones.</strong></small></p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Tenemos la opción de ADELANTAR los primeros 3 meses de arriendo. <small><strong>Aplica términos y condiciones.</strong></small></p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>El contrato de arredramiento contara con una póliza de ASEGURADORAS/AFIANZADORAS durante toda la vigencia del contrato.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Ofrecemos el servicio de pago de la administración de la copropiedad de tu inmueble (Si aplica). <small><strong>Aplica términos y condiciones.</strong></small></p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Pago 100% de la cláusula penal si el inquilino abandona el inmueble sin justa causa ante de que finalice el contrato.</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-6">
                                        <h5 class="titulos"> <strong>CORRETAJE</strong></h5>
                                        <ul class="pl-0">
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Administras tu arriendo directamente, SU PROPIEDAD INMOBILIARIA te proporcionara el cliente. El Precio de este corresponde a un (1) Canon de arrendamiento más IVA.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Prestamos asesoría en los trámites de estudio de documentos de los futuros arrendatarios de tu inmueble ante la Aseguradora/ Afianzadora.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Realizamos los contratos de arrendamientos.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Ejecutamos un detallado inventario INICIAL fotográfico y escrito del inmueble.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Asesoría jurídica durante el trámite.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <h2 style="margin-bottom: 0px;"><a class="enlace" href="publicaTuInmueble">PUBLICA TU INMUEBLE AQUÍ</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Targeta #dos-->
                    <div class="card">
                        <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                            <div class="card card-body mb-3">
                                <div class="row">
                                    <div class="col-4"><img class="imagen" src="images/vender_inmueble.jpeg" alt=""></div>
                                    <div class="col-8 text-justify">
                                        <p class="stylo_p">SU PROPIEDAD INMOBILIARIA cuenta con brókers inmobiliarios calificados y expertos en la promoción y trámites en la venta de tu inmueble; de esta forma ofrecemos a nuestros clientes un servicio ágil y seguro.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <p> <strong>En la promoción de la venta de inmuebles te podemos ofrecer los siguientes servicios:</strong></p>
                                        <ul class="pl-0">
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Publicar tu propiedad en los mejores portales inmobiliarios del sector (Finca raíz, Metro cuadrado, Ciencuadras, Properati). Adicionalmente, tenemos nuestro sitio web www.supropiedadinmobiliaria.com donde también será publicada tu propiedad.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Realizamos un registro fotográfico profesional de tu propiedad.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Asesoramos sobre el valor posible de venta, según el mercado, la oferta y la demanda que haya en el sector</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Acompañamiento durante la negociación entre las partes.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Estudio de títulos.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Elaboramos la promesa de compraventa, de acuerdo a los requerimientos jurídicos de la negociación.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Nos encargamos de los trámites y envío de documentos para realizar las escrituras. Entre ellos, paz y salvo de predial, valorización y catastro.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Entregamos escritura registrada junto con sus certificados de libertad.</p>
                                            </li>
                                            <li class="d-flex">
                                                <i class="fas fa-check mt-1 mr-2"></i>
                                                <p>Asesoramos jurídicamente cualquier duda o inquietud que pueda generarse durante el proceso.</p>
                                            </li>
                                        </ul>

                                    </div>

                                </div>
                                <div class="col-12 text-center">
                                    <h2 style="margin-bottom: 0px;"><a class="enlace" href="publicaTuInmueble">PUBLICA TU INMUEBLE AQUÍ</a></h2>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Targeta #tres-->
                    <div class="card">
                        <div id="tres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
                            <div class="card card-body mb-3">
                                <div class="row">
                                    <div class="col-4"><img class="imagen" src="images/avaluos.jpeg" alt=""></div>
                                    <div class="col-8 text-justify"> En SU PROPIEDAD INMOBILIARIA contamos con un grupo de Avaluadores altamente capacitados y calificados para ofrecerles un servicio de calidad a los clientes. Nuestros Avaluadores cuentan con el Registro Nacional de Avalúos R.N.A. y el Registro Abierto de Avaluadores A.N.A. <br>
                                        En nuestros Avalúos tenemos diferentes maneras y métodos de hacer la estimación más aproximada del valor del inmueble ya sea para compra o venta.

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <div class="col-12 text-justify"> Nuestro personal está constantemente actualizándose acerca de los precios, de acuerdo al mercado inmobiliario y su comportamiento, tanto para venta, como para arriendo.
                                            Para realizar el avaluó solo necesitamos una copia de la escritura de compraventa del bien, en cuanto al precio este varía de acuerdo al área del inmueble.
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 p-0">
                <div class="container">

                    <div class="row">
                        <!-- Opcion #cuatro-->
                        <div class="col-4">
                            <p>
                                <button class="btn btn-primary col-12 collapsed" type="button" data-toggle="collapse" data-target="#cuatro" aria-expanded="false" aria-controls="collapseExample">
                                    <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO ARRENDAR UN INMUEBLE
                                </button>
                            </p>
                        </div>
                        <!-- Opcion #cinco-->
                        <div class="col-4">
                            <p>
                                <button class="btn btn-primary col-12 collapsed" type="button" data-toggle="collapse" data-target="#cinco" aria-expanded="false" aria-controls="collapseExample">
                                    <span style="color:white;" class="fas fa-chevron-up"></span> QUIERO COMPRAR
                                </button>
                            </p>
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- Targeta #cuatro-->
                        <div class="card">
                            <div id="cuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
                                <div class="card card-body mb-3">
                                    <div class="row">
                                        <div class="col-4"><img class="imagen" src="images/arrendar_inmueble.jpeg" alt=""></div>
                                        <div class="col-8 text-justify">¿POR QUÉ ARRENDAR CON NOSOTROS?, En SU PROPIEDAD INMOBILIARIA somos expertos en brindarte el mejor acompañamiento en la búsqueda de tu inmueble ideal hasta finalizar el proceso con la entrega de este. Nuestros aliados hacen que el proceso de arriendo sea más fácil y práctico a la hora de presentar los documentos para tu estudio. Tenemos en promedio respuesta en trámites en menos de 24 horas.
                                            Para tranquilidad de nuestros clientes, nuestros contratos y procesos están avalados por la secretaria de gobierno y La Lonja de Propiedad raíz.
                                            Nuestros asesores, están totalmente a disposición de nuestros clientes para la búsqueda de tu inmueble ideal según tus necesidades y requerimientos.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="mt-3 titulos">¿QUÉ DOCUMENTO SOLICITAMOS PARA ARRENDAR CON NOSOTROS?</h5 class="mt-3">
                                    </div>
                                    <div class="col-12">
                                        <p><strong>ARRENDATARIO</strong></p>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="sub_tit">PERSONA NATURAL (EMPLEADO)</p>
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Formulario aseguradora/afianzadora totalmente diligenciado con huella y firma.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia de la cédula.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Carta Laboral no mayor a treinta (30) días.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Extractos bancarios de los últimos tres (3) meses.</p>
                                                    </li>

                                                </ul>
                                                <p class="sub_tit">PERSONA NATURAL (INDEPENDIENTE)</p>
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Formulario aseguradora/afianzadora totalmente diligenciado con huella y firma.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia de la cédula.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Extractos bancarios de los últimos tres (3) meses.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Rut (Si aplica).</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Declaración de Renta.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <p class="sub_tit">PERSONA JURÍDICA</p>
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Representante legal debe diligenciar el formulario con firma y huella. </p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia de la cedula del representante legal que sea legible ampliada al 150%.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Rut y cámara de comercio. </p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia extractos bancarios de los últimos 3 meses. </p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia de la última declaración de renta presentada y estados financieros al último corte (si aplica).</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Relación de los socios ó accionistas de la empresa con nombres y número de identificación de cada uno de ellos y composición accionaria, hasta la última persona natural, Firmado por el representante legal, Revisor fiscal o Contador.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p><strong>DEUDOR SOLIDARIO/FIADOR</strong></p>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="sub_tit">PERSONA NATURAL (EMPLEADO)</p>
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Formulario aseguradora/afianzadora totalmente diligenciado con huella y firma.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia de la cédula.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Carta Laboral no mayor a treinta (30) días.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Extractos bancarios de los últimos tres (3) meses.</p>
                                                    </li>

                                                </ul>
                                                <p class="sub_tit">PERSONA NATURAL (INDEPENDIENTE)</p>
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Formulario aseguradora/afianzadora totalmente diligenciado con huella y firma.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia de la cédula.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Extractos bancarios de los últimos tres (3) meses.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Rut (Si aplica).</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Declaración de Renta.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <p class="sub_tit">PERSONA JURÍDICA</p>
                                                <ul class="pl-0">
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Representante legal debe diligenciar el formulario con firma y huella.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia de la cedula del representante legal que sea legible ampliada al 150%.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Rut y cámara de comercio.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia extractos bancarios de los últimos 3 meses.</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Copia de la última declaración de renta presentada y estados financieros al último corte (si aplica).</p>
                                                    </li>
                                                    <li class="d-flex">
                                                        <i class="fas fa-check mt-1 mr-2"></i>
                                                        <p>Relación de los socios ó accionistas de la empresa con nombres y número de identificación de cada uno de ellos y composición accionaria, hasta la última persona natural, Firmado por el representante legal, Revisor fiscal o Contador. </p>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="text-center"><strong>TENER PRESENTE</strong></p>
                                        <p class="text-justify">La aseguradora cobra un valor por el estudio, equivalente al 5% + iva del valor del canon. Si esta solicitud es aprobada por la aseguradora y se efectúa el contrato de arrendamiento con la empresa SU PROPIEDAD INMOBILIARIA, se genera una comisión equivalente al 20% + iva del valor del canon en la ciudad de Medellín más $25.000 de papelería. </p>
                                    </div>

                                    <div class="col-12 text-center">
                                        <h2 style="margin-bottom: 0px;"><a class="enlace" href="inmuebles">ENCUENTRA TU INMUEBLE AQUÍ </a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Targeta #cinco-->
                        <div class="card">
                            <div id="cinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
                                <div class="card card-body mb-3">
                                    <div class="row">
                                        <div class="col-4"><img class="imagen" src="images/comprar.jpeg" alt=""></div>
                                        <div class="col-8 text-justify">
                                            <p class="stylo_p">SU PROPIEDAD INMOBILIARIA cuenta con bróker inmobiliarios calificados y expertos en la búsqueda de tu inmueble ideal y los trámites de venta, de esta forma ofrecemos a nuestros clientes un servicio ágil y seguro.</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="mt-3 titulos">¿POR QUÉ COMPRAR CON NOSOTROS?</h5 class="mt-3">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="pl-0">
                                                <li class="d-flex">
                                                    <i class="fas fa-check mt-1 mr-2"></i>
                                                    <p>Asesoramos sobre el valor posible de la compra, según el mercado, la oferta y la demanda que haya en el sector.</p>
                                                </li>
                                                <li class="d-flex">
                                                    <i class="fas fa-check mt-1 mr-2"></i>
                                                    <p>Contamos con un amplio portafolio de propiedades, de acuerdo a tus gustos y necesidades.</p>
                                                </li>
                                                <li class="d-flex">
                                                    <i class="fas fa-check mt-1 mr-2"></i>
                                                    <p>Brindamos acompañamiento durante la negociación entre las partes.</p>
                                                </li>
                                                <li class="d-flex">
                                                    <i class="fas fa-check mt-1 mr-2"></i>
                                                    <p>Realizamos un completo estudio de títulos de la propiedad a comprar.</p>
                                                </li>
                                                <li class="d-flex">
                                                    <i class="fas fa-check mt-1 mr-2"></i>
                                                    <p>Elaboramos la promesa de compraventa, de acuerdo a los requerimientos jurídicos de la negociación.</p>
                                                </li>
                                                <li class="d-flex">
                                                    <i class="fas fa-check mt-1 mr-2"></i>
                                                    <p>Nos encargamos de los trámites y envío de documentos para realizar las escrituras. Entre ellos, paz y salvo de predial, valorización y catastro.</p>
                                                </li>
                                                <li class="d-flex">
                                                    <i class="fas fa-check mt-1 mr-2"></i>
                                                    <p>Entregamos escritura registrada junto con sus certificados de libertad.</p>
                                                </li>
                                                <li class="d-flex">
                                                    <i class="fas fa-check mt-1 mr-2"></i>
                                                    <p>Asesoramos jurídicamente cualquier duda o inquietud que pueda generarse durante el proceso.</p>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                    <div class="col-12 text-center">
                                        <h2 style="margin-bottom: 0px;"><a class="enlace" href="inmuebles">ENCUENTRA TU INMUEBLE AQUÍ</a></h2>
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


<!--
<section class="separador" id="servicios">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 wow zoomInUp" data-wow-delay=".7s" data-wow-duration="2s">
                <h2><?php echo $texto_servicios['lista'][0] ?></h2>
            </div>
            <div class="col-12">
                <div class="card-deck">
                    <?php for ($i = 1; $i < count($texto_servicios['lista']); $i++) {
                        echo '
                        <div class="card wow ' . $texto_servicios['animacion'][$i] . '">
                            <div class="container-icon text-center">
                                <i class="' . $texto_servicios['iconos'][$i] . '"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">' . $texto_servicios['lista'][$i] . '</p>
                            </div>
                        </div>
                        ';
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
-->