<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<div class="container">
    <div class="row pb-4 pt-1">
        <div class="col-12 col-md-6 col-lg-12">
            <h3 class="text-center mb-4">CONTÁCTANOS</h3>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h4 class="mb-4 mt-4 text-center">Bogotá</h4>
                    <h6>Chico</h6>
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
                <div class="col-12 col-lg-8 row">
                    <div class="col-12">
                        <h4 class="text-center mb-4 mt-4">Medellín</h4>
                    </div>
                    <div class="col-6">
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
                                <div class="icon-container">
                                    <i class="<?php echo $iconos_contacto['correo'] ?>"></i>
                                </div>
                                <a href='<?php echo $datos_contacto_sedes['medellin_poblado']['correo']; ?>'>
                                    <?php echo $datos_contacto_sedes['medellin_poblado']['correo']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6">
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
        <div class="col-8">
            <p class="pt-1 pb-1 text-center">
                Diseñado y Desarrollado por <a href="https://www.dexcondigital.com" target="_blank">Dexcon Digital</a> ©Copyright 2019 para Su Propiedad
                Inmobiliaria. Todos los derechos reservados.
            </p>
        </div>
    </div>
</div>