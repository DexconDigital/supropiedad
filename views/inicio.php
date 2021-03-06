<?php
require 'controllers/inicioController.php';
$page = "inicio";
include 'layout/menu.php';
?>
<script>
    var pagina = 'inicio';
</script>
<style>
    .celulares {
        color: #c87a33;
    }

    .celulares:hover {
        color: #c87a33;
    }
</style>
<script src="./js/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#myModal').modal('show')
        }, 3500);
    });
</script>

<section id="carousel">
    <div class="container-fluid">
        <div class="row">
            <div id="slide_inicio" class="carousel slide w-100" data-ride="carousel">
                <div class="cont_slider">
                    <div class="carousel-item active">
                        <video src="./videos/video2.mov" class="d-block video_tamaño" autoplay muted loop></video>
                    </div>
                    <?php
                    for ($i = 0; $i < count($imagenes_slide_principal); $i++) {
                        echo ' <div class="carousel-item carousel-imagen-slide-' . $i . '">
                                <img src="' . $imagenes_slide_principal[$i]['imagen'] . '" class="d-block w-100" alt="...">
                            </div>';
                    }
                    ?>
                </div>

                <a class="carousel-control-prev" href="#slide_inicio" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slide_inicio" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="overlay">
                <div class="container cont_movil">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-9 col-9">
                            <h1 class="text-center wow bounceInDown" data-wow-Duration="2s" data-wow-delay=".5s">Encuentra tu Inmueble Ideal con Nosotros</h1>
                        </div>
                        <div class="col-12 col-md-12 col-lg-11 cont_secundario contenedor_compresor">
                            <form action="" class="w-100 wow bounceInUp" data-wow-Duration="2s" data-wow-delay=".5s">
                                <div class="form-row justify-content-center">
                                    <div class="col col-md-2 col-lg-2  bot1">
                                        <input type="number" class="form-control rounded-0" id="codigo_buscar" placeholder="Código">
                                    </div>
                                    <div class="col col-md-2 col-lg-2   bot1">
                                        <select id="ciudad_buscar" class="form-control rounded-0">
                                            <option selected value="0">Ciudad</option>
                                        </select>
                                    </div>
                                    <div class="col col-md-2 col-lg-2  bot2">
                                        <select id="barrio_buscar" class="form-control rounded-0">
                                            <option selected value='0'>Barrio</option>
                                        </select>
                                    </div>
                                    <div class="col col-md-2 col-lg-3  bot3 posicion1">
                                        <select id="tipo_inmueble_buscar" class="form-control rounded-0">
                                            <option selected value='0'>Tipo Inmueble</option>
                                        </select>
                                    </div>
                                    <div class="col col-md-2 col-lg-2  bot4 posicion2 pr-4 margen_2 input-group">
                                        <select id="tipo_gestion_buscar" class="form-control rounded-0">
                                            <option selected value='0'>Gestión</option>
                                        </select>
                                        <div class="input-group-append boton_buscar">
                                            <button type="button" class="btn btn-primary btn-lg btn-block" id="buscar">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="propiedades separador mt-4 pt-0" id="destacadas">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-center mb-4">Propiedades Destacadas</h2>
            </div>
            <div class="col-md-11 col-lg-11 col-10">
                <div style="position:relative;">
                    <div class="owl-carousel owl-theme wow fadeInUp" data-wow-Duration="2s" id="owl-propiedades">
                        <?php inmuebles_destacados($api, $url_host); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="separador" id="servicios">
    <div class="container">
        <div class="col-12">
            <h2 class="text-center">Nuestros Servicios</h2>
        </div>
        <div class="col-12 row justify-content-center cont_servicios">
            <div class="col-lg-3 col-md-6 col-10 tarjeta">
                <div class="card text-center wow slideInLeft">
                    <a href="<?php echo $url_host ?>servicios">
                        <div class="container-icon">
                            <i class="<?php echo $iconos_servicios['arriendos'] ?>"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Arriendos</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-10 tarjeta">
                <div class="card text-center wow slideInDown">
                    <a href="<?php echo $url_host ?>servicios">
                        <div class="container-icon">
                            <i class="<?php echo $iconos_servicios['ventas'] ?>"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Ventas</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-10 tarjeta">
                <div class="card text-center wow slideInRight">
                    <a href="<?php echo $url_host ?>servicios">
                        <div class="container-icon">
                            <i class="<?php echo $iconos_servicios['avaluos'] ?>"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Avalúos</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-10 tarjeta">
                <div class="card text-center wow slideInRight">
                    <a href="<?php echo $url_host ?>publicaTuInmueble">
                        <div class="container-icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Publica tu Inmueble</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="separador" id="servicios">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <h2 class="text-center texto_servicios">
                    Su Propiedad Virtual
                </h2>
            </div>
            <div class="col-12 row justify-content-center cont_servicios">
                <div class="col-lg-3 col-md-6 col-9 tarjeta">
                    <a href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=813&tipo=2" target="_blank">
                        <div class="card text-center wow zoomInLeft" data-wow-Duration="1.5s">
                            <div class="container-icon">
                                <i class="<?php echo $iconos_clientes['arredatarios'] ?>"></i>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h3 class="card-title">Arrendatarios</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-9 tarjeta">
                    <a href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=813&tipo=1" target="_blank">
                        <div class="card text-center wow zoomInUp" data-wow-Duration="1.5s">
                            <div class="container-icon">
                                <i class="<?php echo $iconos_clientes['propietarios'] ?>"></i>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Propietarios</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-9 tarjeta">
                    <a href="<?php echo $link_pse ?>" target="_blank">
                        <div class="card text-center wow zoomInDown" data-wow-Duration="1.5s">
                            <div class="container-icon">
                                <i class="<?php echo $iconos_clientes['pse'] ?>"></i>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Pagos PSE</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-9 tarjeta">
                    <a class="wow zoomInRight botton_virtual" data-wow-Duration="1.5s" data-toggle="modal" data-target="#formularios">
                        <div class="card text-center">
                            <div class="container-icon">
                                <i class="<?php echo $iconos_clientes['formularios_aseguradoras'] ?>"></i>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Formularios</h3>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
</section>



<section class="separador" id="contador">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-2 pt-2">
                SU PROPIEDAD INMOBILIARIA EN CIFRAS
            </h2>
        </div>
        <div class="col-12 contador">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="counter-box">
                            <h1 id="counter-sale"></h1>
                            <p class="text-center">Propiedades en Venta</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="counter-box ">
                            <h1 id="counter-rent"></h1>
                            <p class="text-center">Propiedades en Arriendo</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="counter-box">
                            <h1 id="counter-experence"></h1>
                            <p class="text-center">Años de Experiencia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="separador" id="aliados">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h2>Nuestros Aliados</h2>
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

<div class="modal fade" id="formularios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descargar Formularios</h5>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <?php for ($i = 0; $i < count($formularios_aseguradoras); $i++) {
                        echo '<li class="list-group-item"><a href="formatos/' . $formularios_aseguradoras[$i]['ruta'] . '" target="_blank">' . $formularios_aseguradoras[$i]['nombre'] . '</a></li>';
                    } ?>

                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">UN MENSAJE PARA NUESTROS CLIENTES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-3">
                <p> ESTIMADOS CLIENTES DEBIDO A NUESTRO TRASLADO DE SEDE PRINCIPAL, ESTAMOS PRESENTANDO INCONVENIENTES CON NUESTRO PBX, PARA CUALQUIER REQUERIMIENTO, POR FAVOR COMUNICARSE A LOS SIGUIENTES CELULARES.</p><br>

                <ul>
                    <li>SEDE POBLADO: <a class="celulares" href="tel:3156733000">315-673-3000</a></li>
                    <li>SEDE CENTRO: <a class="celulares" href="tel:3166161076"> 316-616-1076</a></li>
                    <li>SEDE BOGOTÁ: <a class="celulares" href="tel:3043297400"> 304-329-7400</a></li>
                </ul>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>