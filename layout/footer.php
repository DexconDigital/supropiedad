<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<div class="container">
    <div class="row pb-4 pt-1">
        <div class="col-12 col-md-12 col-lg-12">
            <h3 class="text-center mb-4">CONTÁCTANOS</h3>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 cont_bogota">
                    <h4 class="mb-4 mt-4 text-center">Bogotá D.C.</h4>
                    <h6>Chicó</h6>
                    <ul>
                        <li>
                            <div class="icon-container">
                                <i class="<?php echo $iconos_contacto['direccion'] ?>"></i>
                            </div>
                            <?php echo $datos_contacto_sedes['bogota_chico']['direccion']; ?>
                        </li>
                        <li>
                            <div class="icon-container">
                                <i class="<?php echo $iconos_contacto['celular'] ?>"></i>
                            </div>
                            <?php echo '
                                <a href="tel:' . $datos_contacto_sedes['bogota_chico']['celular']['link'] . '">' . $datos_contacto_sedes['bogota_chico']['celular']['imprimir'] . '</a>
                            '; ?>
                        </li>
                        <li>
                            <div class="icon-container">
                                <i class="<?php echo $iconos_contacto['telefono_fijo'] ?>"></i>
                            </div>
                            <?php echo '
                                <a href="tel:' . $datos_contacto_sedes['bogota_chico']['fijo']['link'] . '">' . $datos_contacto_sedes['bogota_chico']['fijo']['imprimir'] . '</a>
                            '; ?>
                        </li>
                        <li>
                            <div class="icon-container">
                                <i class="<?php echo $iconos_contacto['correo'] ?>"></i>
                            </div>
                            <a href='<?php echo $datos_contacto_sedes['bogota_chico']['correo']; ?>'>
                                <?php echo $datos_contacto_sedes['bogota_chico']['correo']; ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-12 col-lg-8 row con_medellin">
                    <div class="col-12">
                        <h4 class="text-center mb-4 mt-4">Medellín</h4>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <h6>Poblado</h6>
                        <ul>
                            <li>
                                <div class="icon-container">
                                    <i class="<?php echo $iconos_contacto['direccion'] ?>"></i>
                                </div>
                                <?php echo $datos_contacto_sedes['medellin_poblado']['direccion']; ?>
                            </li>
                            <li>
                                <div class="icon-container">
                                    <i class="<?php echo $iconos_contacto['celular'] ?>"></i>
                                </div>
                                <?php echo '
                                    <a href="tel:' . $datos_contacto_sedes['medellin_poblado']['celular']['link'] . '">' . $datos_contacto_sedes['medellin_poblado']['celular']['imprimir'] . '</a>
                                '; ?>
                            </li>
                            <li>
                                <div class="icon-container">
                                    <i class="<?php echo $iconos_contacto['telefono_fijo'] ?>"></i>
                                </div>
                                <?php echo '
                                    <a href="tel:' . $datos_contacto_sedes['medellin_poblado']['fijo']['link'] . '">' . $datos_contacto_sedes['medellin_poblado']['fijo']['imprimir'] . '</a>
                                '; ?>
                            </li>
                            <li>
                                <div class="icon-container mr-2">
                                    <i class="<?php echo $iconos_contacto['correo'] ?>"></i>
                                </div>
                                <a href='<?php echo $datos_contacto_sedes['medellin_poblado']['correo']; ?>'>
                                    <?php echo $datos_contacto_sedes['medellin_poblado']['correo']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <h6>Centro</h6>
                        <ul>
                            <li>
                                <div class="icon-container">
                                    <i class="<?php echo $iconos_contacto['direccion'] ?>"></i>
                                </div>
                                <?php echo $datos_contacto_sedes['medellin_centro']['direccion']; ?>
                            </li>
                            <li>
                                <div class="icon-container">
                                    <i class="<?php echo $iconos_contacto['celular'] ?>"></i>
                                </div>
                                <?php echo '
                                    <a href="tel:' . $datos_contacto_sedes['medellin_centro']['celular']['link'] . '">' . $datos_contacto_sedes['medellin_centro']['celular']['imprimir'] . '</a>
                                '; ?>
                            </li>
                            <li>
                                <div class="icon-container">
                                    <i class="<?php echo $iconos_contacto['telefono_fijo'] ?>"></i>
                                </div>
                                <?php echo '
                                    <a href="tel:' . $datos_contacto_sedes['medellin_centro']['fijo']['link'] . '">' . $datos_contacto_sedes['medellin_centro']['fijo']['imprimir'] . '</a>
                                '; ?>
                            </li>
                            <li>
                                <div class="icon-container">
                                    <i class="<?php echo $iconos_contacto['correo'] ?>"></i>
                                </div>

                                <a href='<?php echo $datos_contacto_sedes['medellin_centro']['correo']; ?>'>
                                    <?php echo $datos_contacto_sedes['medellin_centro']['correo']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pl-0 pr-0 borde pt-3 pb-1">
        <div class="col-12">
            <p class="pt-1 pb-1 text-center">
                 Todos los derechos reservados. <span class="colapse_movil">Su Propiedad Inmobiliaria Asociados SAS.</span> 
               <div class="col-12 text-center">
                   <a id="color_footer" target="_blank" href="<?php echo $url_host; ?>formatos/politica_de_datos.pdf">Política de protección de datos</a>  |  <a id="color_footer2" target="_blank" href="<?php echo $url_host; ?>formatos/TERMINOS-Y-CONDICIONES.pdf">Téminos y condiciones.</a> | Diseñado y Desarrollado por <a  href="https://www.dexcondigital.com" target="_blank">Dexcon Digital</a> © Copyright
                </div>

            </p>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 propiedad"><img class="imagen" src="images/Arrienda_propiedad.jpeg" alt=""></div>
                        <div class="col-lg-8 col-12 col-md-12 text-justify"> En SU PROPIEDAD INMOBILIARIA somos expertos en brindarte el mejor acompañamiento en la búsqueda de tu inmueble ideal hasta finalizar el proceso con la entrega de este. Nuestros aliados hacen que el proceso de arriendo sea más fácil y práctico a la hora de presentar los documentos para tu estudio. Tenemos en promedio respuesta en trámites en menos de 24 horas. Para tranquilidad de nuestros clientes, nuestros contratos y procesos están avalados por la secretaria de gobierno y La Lonja de Propiedad raíz. Nuestros asesores, están totalmente a disposición de nuestros clientes para la búsqueda de tu inmueble ideal según tus necesidades y requerimientos.</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
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
                        <div class="col-lg-6 col-12">
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
                    <div class="col-12 text-center margen_top">
                        <h2 style="margin-bottom: 0px;"><a class="enlace" href="publicaTuInmueble">PUBLICA TU INMUEBLE AQUÍ</a></h2>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>