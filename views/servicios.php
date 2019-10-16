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

<section>
    <div class="container">
        <div class="col-12 border border-dark">
            <div class="row">
                <div class="col-4 border border-dark">
                    <h2>Arriendo</h2>

                    <p>
                        <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                            QUIERO ARRENDAR MI PROPIEDAD
                        </button>
                    </p>

                </div>
                <div class="col-4 border border-dark">
                    <h2>Venta</h2>

                    <p>
                        <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="false" aria-controls="collapseExample">
                            QUIERO VENDER
                        </button>
                    </p>




                </div>
                <div class="col-4 border border-dark">
                    <h2>Avalúos</h2>

                    <p>
                        <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#cinco" aria-expanded="false" aria-controls="collapseExample">
                            QUIERO AVALUAR MI INMUEBLE
                        </button>
                    </p>


                </div>
            </div>
            <div class="col-12 border border-dark">
                <div class="collapse" id="uno">
                    <div class="card card-body mb-3">
                        <div class="row">
                            <div class="col-4"><img src="images/Arrienda_propiedad.jpeg" alt="" style="width: 100%;height: 100%;"></div>
                            <div class="col-8 text-justify"> En SU PROPIEDAD INMOBILIARIA somos expertos en brindarte el mejor acompañamiento en la búsqueda de tu inmueble ideal hasta finalizar el proceso con la entrega de este. Nuestros aliados hacen que el proceso de arriendo sea más fácil y práctico a la hora de presentar los documentos para tu estudio. Tenemos en promedio respuesta en trámites en menos de 24 horas. Para tranquilidad de nuestros clientes, nuestros contratos y procesos están avalados por la secretaria de gobierno y La Lonja de Propiedad raíz. Nuestros asesores, están totalmente a disposición de nuestros clientes para la búsqueda de tu inmueble ideal según tus necesidades y requerimientos.</div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h5 style="margin-bottom: 24px;margin-top: 9%;"> <strong>CORRETAJE</strong></h5>
                                <ul class="pl-0">
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2" style="color: #c87a33;"></i>
                                        <p>Administras tu arriendo directamente, SU PROPIEDAD INMOBILIARIA te proporcionara el cliente. El Precio de este corresponde a un (1) Canon de arrendamiento más IVA.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"  style="color: #c87a33;"></i>
                                        <p>Prestamos asesoría en los trámites de estudio de documentos de los futuros arrendatarios de tu inmueble ante la Aseguradora/ Afianzadora.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"  style="color: #c87a33;"></i>
                                        <p>Realizamos los contratos de arrendamientos.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"  style="color: #c87a33;"></i>
                                        <p>Ejecutamos un detallado inventario INICIAL fotográfico y escrito del inmueble.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"  style="color: #c87a33;"></i>
                                        <p>Asesoría  jurídica durante el trámite.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <h5 style="margin-bottom: 24px;margin-top: 9%;"> <strong>EN ADMINISTRACIÓN- TU ARRIENDO SEGURO</strong></h5>
                                <ul class="pl-0">
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2" style="color: #c87a33;"></i>
                                        <p>PRECIO UNICO mensual del 10% más IVA de comisión INCLUIDO el Seguro/Fianza de Arrendamiento.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"  style="color: #c87a33;"></i>
                                        <p>Realizamos estudios de crédito al arrendatario con respuesta en menos de 4-8 horas en promedio. <small><strong>Aplica términos y condiciones.</strong></small></p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"  style="color: #c87a33;"></i>
                                        <p>Tenemos la opción de ADELANTAR los primeros 3 meses de arriendo. <small><strong>Aplica términos y condiciones.</strong></small></p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"  style="color: #c87a33;"></i>
                                        <p>El contrato de arredramiento contara con una póliza de  ASEGURADORAS/AFIANZADORAS durante toda la vigencia del contrato.</p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"  style="color: #c87a33;"></i>
                                        <p>Ofrecemos el servicio de pago de la administración de la copropiedad de tu inmueble (Si aplica). <small><strong>Aplica términos y condiciones.</strong></small></p>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fas fa-check mt-1 mr-2"  style="color: #c87a33;"></i>
                                        <p>Pago 100% de la cláusula penal si el inquilino abandona el inmueble sin justa causa ante de que finalice el contrato.</p>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <h2 style="margin-bottom: 0px;"><a style="color: #c87a33; font-weight: 800;text-transform: uppercase; text-decoration: none;" href="publicaTuInmueble">PUBLICA TU INMUEBLE AQUÍ</a></h2>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="tres">
                    <div class="card card-body mb-3">
                        SU PROPIEDAD INMOBILIARIA cuenta con brókers inmobiliarios calificados y expertos en la promoción y trámites en la venta de tu inmueble; de esta forma ofrecemos a nuestros clientes un servicio ágil y seguro.
                    </div>
                </div>
                <div class="collapse" id="cinco">
                    <div class="card card-body mb-3">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <p>
                        <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="false" aria-controls="collapseExample">
                            QUIERO ARRENDAR UN INMUEBLE
                        </button>
                    </p>
                </div>
                <div class="col-4">
                    <p>
                        <button class="btn btn-primary col-12" type="button" data-toggle="collapse" data-target="#cuatro" aria-expanded="false" aria-controls="collapseExample">
                            QUIERO COMPRAR
                        </button>
                    </p>
                </div>
                <div class="col-4">

                </div>
            </div>
            <div class="col-12 border border-dark">
                <div class="collapse" id="dos">
                    <div class="card card-body mb-3">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
                <div class="collapse" id="cuatro">
                    <div class="card card-body mb-3">
                        SU PROPIEDAD INMOBILIARIA cuenta con bróker inmobiliarios calificados y expertos en la búsqueda de tu inmueble ideal y los trámites de venta, de esta forma ofrecemos a nuestros clientes un servicio ágil y seguro.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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