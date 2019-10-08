<?php $page = "quienesSomos";
require 'variables/asesores.php';
include 'layout/menu2.php';
?>
<script>
    var pagina = 'quienesSomos';
</script>

<div id="quienesSomos" class="mb-4 w-100 overflow-hidden">
    <section class="quienes-somos pb-4">
        <div class="container">
            <div class="row">
                <div class="col-6 wow slideInLeft" data-wow-delay="1s">
                    <div class="container-img text-center mt-4">
                        <img src="<?php echo $url_host; ?>images/SEDE MEDELLIN.jpg" alt="" style="width:80%">
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h2 class="mb-4 wow bounceInDown" data-wow-delay="1s">
                            Somos
                        </h2>
                        <p class="wow bounceInUp" data-wow-delay="1s"> <?php echo $texto_quienes_somos['parrafos'][0]; ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="separador" id="aliados">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h2 class="mb-0 pb-0">Nuestros Aliados</h2>
                </div>
                <div class="col-11 wow slideInLeft">
                    <div class="owl-carousel owl-theme" id="owl_aliados">
                        <?php
                        for ($i = 1; $i < count($aliados); $i++) {
                            echo '
                        <div class="item">
                            <img src="' . $url_host . $aliados[$i] . '" alt="">
                        </div>    
                        ';
                        }; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Nuestro Equipo de trabajo</h2>
                </div>
                <div class="col-12">
                    <!-- Bogota Medellin  -->
                    <ul class="nav nav-pills mb-3 row justify-content-center w-100 text-center" id="pills-tab" role="tablist">
                        <!-- Bogota  -->
                        <!-- Medellin  -->
                        <li class="nav-item col-3">
                            <a class="nav-link active rounded-0" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Medellín</a>
                        </li>
                        <li class="nav-item col-3">
                            <a class="nav-link  rounded-0" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Bogotá</a>
                        </li>
                    </ul>
                    <div class="tab-content row w-100" id="pills-tabContent">
                        <!-- Contenido Medellin -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="container">
                                <div class="row w-100 justify-content-center asesores-contain">
                                    <?php
                                    for ($i = 0; $i < count($asesores); $i++) {
                                        if ($asesores[$i]['sede'] == 1 || $asesores[$i]['sede'] == 2) {
                                            echo '<div class="col-3 mt-4">
                                                <div class="container-img">
                                                    <img  src="' . $url_host . '' . $asesores[$i]['rutaImagen'] . '" alt="" class="img-fluid">
                                                </div>
                                                <div class="card-body pt-1">
                                                    <div class="card-title text-center">'.$asesores[$i]['nombre'].'</div>
                                                </div>
                                                </div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- Contenido Bogota -->
                        <div class="tab-pane fade  w-100" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="container">
                                <div class="row w-100 justify-content-center asesores-contain">
                                    <?php
                                    for ($i = 0; $i < count($asesores); $i++) {
                                        if ($asesores[$i]['sede'] == 0 ||$asesores[$i]['sede'] == 2) {
                                            echo '<div class="col-3 mt-4">
												<div class="container-img">
                                                    <img src="' . $url_host . '' . $asesores[$i]['rutaImagen'] . '" alt="" class="img-fluid">
                                                </div>
												<div class="card-body pt-1">
                                                    <div class="card-title text-center">'.$asesores[$i]['nombre'].'</div>
                                                </div>
												</div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row wow bounceInLeft separador" data-wow-delay="2s">
                <div class="col-6">
                    <div class="container-img">
                        <img src="<?php echo $url_host; ?>images/Experiencia.png" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center wow flipInX" data-wow-delay="2.2s">
                    <div class="text-center w-100">
                        <h2 class="mb-4">
                            Experiencia
                        </h2>
                        <p class="text-center">Experiencia informacion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row wow bounceInLeft separador" data-wow-delay="2s">
                <div class="col-6 d-flex align-items-center wow flipInX" data-wow-delay="2.2s">
                    <div>
                        <h2 class="mb-4">
                            Misión
                        </h2>
                        <p> <?php echo $texto_quienes_somos['mision'][0]; ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container-img">
                        <img src="<?php echo $url_host; ?>images/mision.jpeg" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vision">
        <div class="container">
            <div class="row wow bounceInRight separador">
                <div class="col-6">
                    <div class="container-img">
                        <img src="<?php echo $url_host; ?>images/manos.jpg" alt="">
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center wow flipInX">
                    <div>
                        <h2 class="mb-4">
                            Valores
                        </h2>
                        <ul>
                            <?php for ($i = 0; $i < count($texto_quienes_somos['valores']); $i++) {
                                echo '
                                    <li>' . $texto_quienes_somos['valores'][$i] . '</li>
                                ';
                            }; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>