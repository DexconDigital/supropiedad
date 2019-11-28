<?php
require 'controllers/detalleInmuebleController.php';
$page = "inmuebles";
?>
<script>
    var pagina = 'inmuebles';
</script>
<!-- Llamar los archivos para el incio del carousel -->
<link rel="stylesheet" type="text/css" href="<?php echo $url_host ?>css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo $url_host ?>css/slick-theme.css">
<script src="<?php echo $url_host ?>js/jquery.min.js"></script>
<script src="<?php echo $url_host ?>js/slick.min.js"></script>
<link rel="stylesheet" href="<?php echo $url_host ?>css/carousel.tamanos.css">
<!-- fin de llamado -->

<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-light borde-menu" id="menu">
        <a class="navbar-brand" href="<?php echo $url_host ?>">
            <img id="imagen_menu" src="<?php echo $url_host ?>images/logo_trazo.png" alt="" width="200px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto d-flex  align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $url_host ?>inicio">INICIO</a>
                </li>
                <li class="nav-item <?php if ($page == 'quienesSomos') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="<?php echo $url_host ?>quienesSomos">QUIÉNES SOMOS</a>
                </li>
                <li class="nav-item <?php if ($page == 'servicios') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="<?php echo $url_host ?>servicios">SERVICIOS</a>
                </li>
                <li class="nav-item <?php if ($page == 'inmuebles') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="<?php echo $url_host ?>inmuebles">INMUEBLES</a>
                </li>
                <li class="nav-item <?php if ($page == 'clientes') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="<?php echo $url_host ?>clientes">CLIENTES</a>
                </li>
                <li class="nav-item <?php if ($page == 'consigna') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="<?php echo $url_host ?>publicaTuInmueble">PUBLICA TU INMUEBLE</a>
                </li>
                <li class="nav-item <?php if ($page == 'trabaja') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="<?php echo $url_host ?>trabajaConNosotros">TRABAJA CON NOSOTROS</a>
                </li>
                <li class="nav-item <?php if ($page == 'contacto') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="<?php echo $url_host ?>contactenos">CONTÁCTANOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $link_pse ?>" target="_blank">
                        <img src="<?php echo $url_host . $logo_pse; ?>" alt="Logo Pse" width="50px">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</section>


<section id="detalle_inmueble">
    <div class="container p-0">
        <div class="row pt-3">
            <div class="col-12">
                <h3 class="mb-4 text-break titulo_imagen"><?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?></h3>
            </div>

            <div class="col-lg-8 col-md-12 col-12">
                <ul class="row">
                    <li class="col-lg-2 col-md-2 col-4"><b><?php precio($r); ?></b></li>
                    <li class="col-lg-2 col-md-2 col-3 contendor_precio"><span class="badge badge-pill badge-dark">Estrato: <?php echo $r['Estrato'] ?></span></li>
                    <li class="col-lg-6 col-md-6 col-12"><i class="fas fa-map-marker-alt mr-2"></i><?php echo $r['barrio'] . ', ' . $r['ciudad'] ?></li>
                </ul>
            </div>
            <!-- contenedor carousel y formulario -->
            <div class="col-12 row">

                <div class="col-lg-8 col-md-8 col-12 row">
                    <!-- Carousel -->
                    <div class="col-12 ">
                        <section class="mt-3" id="slide-detalle">
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 1; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="' . $url_host . 'images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                        <section class="vertical-center-4 slider" id="miniaturas">
                            <?php
                            if (isset($r['fotos'])) {
                                for ($i = 1; $i < count($r['fotos']); $i++) {
                                    echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                }
                            } else {
                                echo  '<div class="contenedor-img">
                                        <img src="' . $url_host . 'images/no_image.png" alt="">
                                    </div>';
                            }
                            ?>
                        </section>
                        <!-- script para iniciar el caousel -->
                        <script>
                            $('#slide-detalle').slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                arrows: true,
                                fade: true,
                                asNavFor: '#miniaturas'
                            });
                            $('#miniaturas').slick({
                                slidesToShow: 5,
                                slidesToScroll: 1,
                                asNavFor: '#slide-detalle',
                                dots: false,
                                centerMode: true,
                                focusOnSelect: true,
                                variableWidth: true,
                                responsive: [{
                                        breakpoint: 1024,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 3,
                                            infinite: true,
                                            dots: true
                                        }
                                    },
                                    {
                                        breakpoint: 600,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2
                                        }
                                    },
                                    {
                                        breakpoint: 480,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 3
                                        }
                                    }
                                ]
                            });
                        </script>
                    </div>
                    <!-- Fin de carousel -->
                    <div class="col-12 caracteristicas">
                        <div class="card compartir">
                            <div class="card-body row">
                                <div class="text-center col-lg-3 col-md-4 col-12 boton_imprimir"><a class="btn btn-primary" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=813-<?php echo $co ?>" target="_blank">Imprimir Ficha</a></div>
                                <div class="col-lg-3 col-md-4 col-7 div_compartir">Compartir por:</div>
                                <div class="mr-1 col-1">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.supropiedadinmobiliaria.com%2FdetalleInmueble%3Fcodigo%3D<?php echo $co; ?>" target="_blank">
                                        <i class="fab fa-facebook-square"></i></a>
                                </div>
                                <div class="mr-1 col-1">
                                    <a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.supropiedadinmobiliaria.com%2FdetalleInmueble%3Fcodigo%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank">
                                        <i class="fab fa-twitter"></i></a>
                                </div>
                                <div class="mr-1 col-1">
                                    <a href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www.supropiedadinmobiliaria.com/detalleInmueble.php?codigo%3d' . $co ?>" target="_blank">
                                        <i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Descripción</h5>
                                <p class="card-text">
                                    <?php echo $r['descripcionlarga']; ?>
                                </p>
                            </div>
                        </div>
                        <!-- caracteristicas Basicas -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Características</h5>
                                <ul>
                                    <?php if (!$r['Administracion'] == 0 || !$r['Administracion'] == '') {
                                        echo '<li><i class="fas fa-check mr-2"></i> Administración: $' . $r['Administracion'] . '</li>';
                                    }
                                    echo '<li><i class="fas fa-check mr-2"></i> Código: ' . $co . '</li>';
                                    echo '<li><i class="fas fa-check mr-2"></i> Área Construida: ' . $r['AreaConstruida'] . 'm<sup>2</sup></li>';
                                    echo '<li><i class="fas fa-check mr-2"></i> Área Lote: ' . $r['AreaLote'] . 'm<sup>2</sup></li>';
                                    echo '<li><i class="fas fa-check mr-2"></i> Edad del Inmueble: ' . $r['EdadInmueble'] . '</li>';
                                    echo '<li><i class="fas fa-check mr-2"></i> Alcobas: ' . $r['alcobas'] . '</li>';
                                    echo '<li><i class="fas fa-check mr-2"></i> Baños: ' . $r['banos'] . '</li>';
                                    echo '<li><i class="fas fa-check mr-2"></i> Garaje: ' . $r['garaje'] . '</li>';; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- caracteristicas internas -->
                        <?php
                        if (count($r['caracteristicasInternas']) > 0) {
                            echo
                                '<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Características Internas</h5>
                                    <ul>';
                            for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                echo '<li><i class="fas fa-check mr-2"></i>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                </div>
                            </div>
                            ';
                        }
                        ?>
                        <!-- caracteristicas externas -->
                        <?php
                        if (count($r['caracteristicasExternas']) > 0) {
                            echo
                                '<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Características Externas</h5>
                                    <ul>';
                            for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                echo '<li><i class="fas fa-check mr-2"></i>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                </div>
                            </div>
                            ';
                        }
                        ?>
                        <!-- caracteristicas externas -->
                        <?php
                        if (count($r['caracteristicasAlrededores']) > 0) {
                            echo
                                '<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Características Alrededores</h5>
                                    <ul>';
                            for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                echo '<li><i class="fas fa-check mr-2"></i>' . $caracteristicas . '</li>';
                            }
                            echo  '</ul>
                                </div>
                            </div>
                            ';
                        }
                        ?>
                        <!-- video -->
                        <div class="col-12">
                            <?php if ($r['video'] != "") {
                                echo
                                    '<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Video</h5>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                        <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                ';
                            } ?>
                        </div>
                    </div>
                    <!-- fin del script de carousel -->
                </div>
                <div class="col-lg-4 col-md-4 col-12 pr-md-0 row pr-lg-0">
                    <div class="col-12 card_contacto ">
                        <div class="card form-contact-property">
                            <div class="card-body">
                                <form action="" class="row">
                                    <div class="col-12">
                                        <h5 class="title-form">Nosotros te llamamos</h5>
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="text" class="form-control" placeholder="Nombre Completo">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="email" class="form-control" placeholder="Correo Electrónico">
                                    </div>
                                    <div class="form-group col-12">
                                        <input type="number" class="form-control" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group col-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div class="form-group form-check col-12">
                                        <input type="checkbox" class="form-check-input ml-1" id="exampleCheck1">
                                        <label class="form-check-label ml-4" for="gridCheck">
                                            <small>
                                                Confirmo que he leído, entendido y acepto la <a href="<?php echo $url_host; ?>formatos/politica_de_datos.pdf">política de tratamiento de datos personales</a>
                                                de su Propiedad Inmobiliaria SAS
                                            </small>
                                        </label>
                                    </div>
                                    <div class="form-group col-12">
                                        <button class="btn btn-primary btn-md btn-block">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card form-contact-property mt-4">
                            <div class="card-body pr-0">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="title-form">Propiedades Similares</h5>
                                    </div>
                                    <div class="col-12 row propiedades pr-0 ">
                                        <?php similares($url_host, $r['IdCiudad'], $r['IdTpInm']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>