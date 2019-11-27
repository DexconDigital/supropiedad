<?php $page = "contacto";
include 'layout/menu2.php';
?>
<script>
    var pagina = 'contacto';
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

<section id="contacto" class="separador">
    <div class="container">
        <div class="row">
            <div class="col-12 titulo_contacto">
                <h2>Contáctanos</h2>
            </div>
        </div>
        <!-- tabs-principales Medellin Bogota  -->
        <ul class="nav nav-pills mb-3 row w-100 text-center justify-content-center" id="pills-tab" role="tablist">
            <!-- Bogota  -->
            <li class="nav-item col-lg-4 col-md 4 col-5">
                <a class="nav-link active rounded-0" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Bogotá D.C</a>
            </li>
            <!-- Medellin -->
            <li class="nav-item col-lg-4 col-md 4 col-5">
                <a class="nav-link rounded-0" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Medellín</a>
            </li>
        </ul>
        <!-- contenido de los tabs medellin y bogota  -->
        <div class="tab-content row" id="pills-tabContent">
            <!-- contenido del tab de medellin  -->
            <div class="tab-pane fade w-100 " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <ul  class="nav nav-tabs row justify-content-center mt-4 text-center border-0" id="myTab" role="tablist">
                    <!-- sede 1 -->
                    <li class="nav-item col-lg-2 col-md-2 col-4">
                        <a class="nav-link active rounded-0" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Poblado</a>
                    </li>
                    <!-- sede 2  -->
                    <li class="nav-item col-lg-2 col-md-2 col-4">
                        <a class="nav-link rounded-0" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Centro</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- contenido sede 1 -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container-fluid">
                            <div class="row caracteristicas">
                                <div class="col-12 row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card text-center" style="">
                                            <div class="container-icon">
                                                <i class="<?php echo $iconos_contacto['direccion'] ?>"></i>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Dirección</h5>
                                                <p class="card-text">
                                                    <?php echo $datos_contacto_sedes['medellin_poblado']['direccion']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card text-center" style="">
                                            <div class="container-icon">
                                                <i class="<?php echo $iconos_contacto['celular'] ?>"></i>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Teléfonos</h5>
                                                <p class="card-text" style="text-align: center;">
                                                    <a href="tel:<?php echo $datos_contacto_sedes['medellin_poblado']['celular']['link'] ?>">
                                                        <?php echo $datos_contacto_sedes['medellin_poblado']['celular']['imprimir']; ?>
                                                    </a>
                                                </p>
                                                <p class="card-text" style="text-align: center;">
                                                    <a href="tel:<?php echo $datos_contacto_sedes['medellin_poblado']['fijo']['link'] ?>">
                                                        <?php echo $datos_contacto_sedes['medellin_poblado']['fijo']['imprimir']; ?>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card text-center" style="">
                                            <div class="container-icon">
                                                <i class="<?php echo $iconos_contacto['correo'] ?>"></i>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Correo</h5>
                                                <p class="card-text">
                                                    <a href="mailto:<?php echo $datos_contacto_sedes['medellin_poblado']['correo'] ?>">
                                                        <?php echo $datos_contacto_sedes['medellin_poblado']['correo']; ?>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card text-center" style="">
                                            <div class="container-icon">
                                                <i class="<?php echo $iconos_contacto['horario'] ?>"></i>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Horario</h5>
                                                <p class="card-text">
                                                    <?php echo $datos_contacto_sedes['medellin_poblado']['horario']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center" id="formulario">
                                <div class="col-12">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.413866790555!2d-75.56875278590688!3d6.209017028463473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442971b6f1ddbb%3A0x96843d9f5a2ef9ec!2sSu+propiedad+inmobiliaria!5e0!3m2!1ses!2sco!4v1563976009544!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <div class="col-12">
                                    <h5 class="text-center mb-4">¿Tienes dudas o inquietudes? Por favor llena este
                                        formulario para poder ponernos en contacto contigo lo más pronto posible.</h5>
                                </div>
                                
                                <div class="col-11">
                                    <?php include 'layout/formulario.php'; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- contenido sede 2  -->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="container-fluid">
                            <div class="row caracteristicas">
                                <div class="col-12 row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card text-center" style="">
                                            <div class="container-icon">
                                                <i class="<?php echo $iconos_contacto['direccion'] ?>"></i>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Dirección</h5>
                                                <p class="card-text">
                                                    <?php echo $datos_contacto_sedes['medellin_centro']['direccion']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card text-center" style="">
                                            <div class="container-icon">
                                                <i class="<?php echo $iconos_contacto['celular'] ?>"></i>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Teléfono</h5>
                                                <p class="card-text" style="text-align: center;">
                                                    <a href="tel:<?php echo $datos_contacto_sedes['medellin_centro']['celular']['link'] ?>">
                                                        <?php echo $datos_contacto_sedes['medellin_centro']['celular']['imprimir']; ?>
                                                    </a>
                                                </p>
                                                <p class="card-text" style="text-align: center;">
                                                    <a href="tel:<?php echo $datos_contacto_sedes['medellin_centro']['fijo']['link'] ?>">
                                                        <?php echo $datos_contacto_sedes['medellin_centro']['fijo']['imprimir']; ?>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card text-center" style="">
                                            <div class="container-icon">
                                                <i class="<?php echo $iconos_contacto['correo'] ?>"></i>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Correo</h5>
                                                <p class="card-text">
                                                    <a href="mailto:<?php echo $datos_contacto_sedes['medellin_centro']['correo'] ?>">
                                                        <?php echo $datos_contacto_sedes['medellin_centro']['correo']; ?>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <div class="card text-center" style="">
                                            <div class="container-icon">
                                                <i class="<?php echo $iconos_contacto['horario'] ?>"></i>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">Horario</h5>
                                                <p class="card-text">
                                                    <?php echo $datos_contacto_sedes['medellin_centro']['horario']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center" id="formulario">

                                <div class="col-12">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.10334419172!2d-75.56879708590674!3d6.250111528016703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428f8e7969e67%3A0x4035b62a22a1e1d4!2sCl.+52+%2349-28%2C+Medell%C3%ADn%2C+Antioquia!5e0!3m2!1ses!2sco!4v1563976255892!5m2!1ses!2sco" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <div class="col-12">
                                    <h5 class="text-center">¿Tienes dudas o inquietudes? Por favor llena este
                                        formulario para poder ponernos en contacto contigo lo más pronto posible.</h5>
                                </div>
                                <div class="col-11">
                                    <?php include 'layout/formulario.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contenido del tab de bogota -->
            <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="container-fluid">
                    <div class="row caracteristicas">
                        <div class="col-12 row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card text-center" style="">
                                    <div class="container-icon">
                                        <i class="<?php echo $iconos_contacto['direccion'] ?>"></i>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Dirección</h5>
                                        <p class="card-text">
                                            <?php echo $datos_contacto_sedes['bogota_chico']['direccion']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card text-center" style="">
                                    <div class="container-icon">
                                        <i class="<?php echo $iconos_contacto['celular'] ?>"></i>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Teléfono</h5>
                                        <p class="card-text" style="text-align: center;">
                                            <a href="tel:<?php echo $datos_contacto_sedes['bogota_chico']['celular']['link'] ?>">
                                                <?php echo $datos_contacto_sedes['bogota_chico']['celular']['imprimir']; ?>
                                            </a>
                                        </p>
                                        <p class="card-text" style="text-align: center;">
                                            <a href="tel:<?php echo $datos_contacto_sedes['bogota_chico']['fijo']['link'] ?>">
                                                <?php echo $datos_contacto_sedes['bogota_chico']['fijo']['imprimir']; ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card text-center" style="">
                                    <div class="container-icon">
                                        <i class="<?php echo $iconos_contacto['correo'] ?>"></i>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Correo</h5>
                                        <p class="card-text">
                                            <a href="mailto:<?php echo $datos_contacto_sedes['bogota_chico']['correo'] ?>">
                                                <?php echo $datos_contacto_sedes['bogota_chico']['correo']; ?>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card text-center" style="">
                                    <div class="container-icon">
                                        <i class="<?php echo $iconos_contacto['horario'] ?>"></i>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Horario</h5>
                                        <p class="card-text">
                                            <?php echo $datos_contacto_sedes['bogota_chico']['horario']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" id="formulario">

                        <div class="col-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.5474923451197!2d-74.05741368573688!3d4.6744501431873955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9af2e8e9a9eb%3A0x4ac3417faacef1fc!2sCra.%2017%20%2388-23%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1570504366085!5m2!1ses-419!2sco" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="container col-11 col-md-12 col-lg-12">
                            <h5 class="text-center">¿Tienes dudas o inquietudes? Por favor llena este
                                formulario para poder ponernos en contacto contigo lo más pronto posible.</h5>
                        </div>
                        <div class="col-10 col-md-10 col-lg-10">
                            <?php include 'layout/formulario.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>