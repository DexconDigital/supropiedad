<?php $page = "inicio";
include 'layout/menu.php';
?>
<script>
    var pagina = 'inicio';
</script>

<section id="carousel">
    <div class="container-fluid">
        <div class="row">
            <div id="slide_inicio" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video src="./videos/video1.mov" class="d-block w-100" autoplay muted loop></video>
                    </div>
                    <div class="carousel-item">
                        <video src="./videos/video2.mov" class="d-block w-100" autoplay muted loop></video>
                    </div>
                    <?php
                    for($i=0; $i<count($imagenes_slide_principal)-1;$i++){
                        echo ' <div class="carousel-item">
                                <img src="'.$imagenes_slide_principal[$i]['imagen'] .'" class="d-block w-100" alt="...">
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
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center">Encuentra tu Inmueble Ideal con Nosotros</h1>
                        </div>
                        <div class="col-12">
                            <form action="" class="w-100">
                                <div class="form-row justify-content-center">
                                    <div class="col-auto">
                                        <input type="text" class="form-control" placeholder="Código">
                                    </div>
                                    <div class="col-auto">
                                        <select id="inputState" class="form-control">
                                            <option selected>Ciudad</option>
                                            <option>Bogota</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <select id="inputState" class="form-control">
                                            <option selected>Barrio</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <select id="inputState" class="form-control">
                                            <option selected>Tipo Inmueble</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <select id="inputState" class="form-control">
                                            <option selected>Gestion</option>
                                            <option>Arriendo/venta</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-search mr-2"></i>Buscar
                                        </button>
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

<section class="propiedades separador" id="destacadas">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Propiedades Destacadas</h2>
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="card" style="">
                            <div class="container-img">
                                <a href="">
                                    <div class="gestion">
                                        <span>Precio</span>
                                    </div>
                                    <div class="precio">
                                        Arriendo
                                    </div>
                                    <img src="<?php echo $url_host; ?>images/no_image.png" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body pb-2">
                                <h5 class="card-title mb-1">Card title</h5>
                                <span class="ubicacion mb-1">
                                    <i class="<?php echo $iconos_contacto['direccion']; ?>"></i> ubicación
                                </span>
                            </div>
                            <ul class="detalles">
                                <li>
                                    <span>Area</span>3600
                                </li>
                                <li>
                                    <span>Alcobas</span> 3
                                </li>
                                <li>
                                    <span>Baños</span> 2
                                </li>
                                <li>
                                    <span>Garaje</span> 1
                                </li>
                            </ul>
                            <div class="footer">
                                <a href="#">
                                    Codigo: Codigo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="separador bg-grey" id="servicios">
    <div class="container">
        <div class="col-12">
            <h2 class="text-center">Nuestros Servicios</h2>
        </div>
        <div class="col-12 row justify-content-center">
            <div class="col-4">
                <div class="card text-center" style="">
                    <div class="container-icon">
                        <i class="<?php echo $iconos_servicios['arriendos'] ?>"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Arriendos</h3>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center" style="">
                    <div class="container-icon">
                        <i class="<?php echo $iconos_servicios['ventas'] ?>"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Ventas</h3>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center" style="">
                    <div class="container-icon">
                        <i class="<?php echo $iconos_servicios['avaluos'] ?>"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Avalúos</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="separador" id="servicios">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">
                    Su Propiedad Virtual
                </h2>
            </div>
            <div class="col-12 row">
                <div class="col-3">
                    <a href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=813&tipo=2" target="_blank">
                        <div class="card text-center" style="">
                            <div class="container-icon">
                                <i class="<?php echo $iconos_clientes['arredatarios'] ?>"></i>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Arrendatarios</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=813&tipo=1" target="_blank">
                        <div class="card text-center" style="">
                            <div class="container-icon">
                                <i class="<?php echo $iconos_clientes['propietarios'] ?>"></i>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Propietarios</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="<?php echo $link_pse ?>" target="_blank">
                        <div class="card text-center" style="">
                            <div class="container-icon">
                                <i class="<?php echo $iconos_clientes['pse'] ?>"></i>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Pagos PSE</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a type="button" data-toggle="modal" data-target="#formularios">
                        <div class="card text-center" style="">
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
        <div class="col-12 contador">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="counter-box">
                            <h1 class="counter Starting">967</h1>
                            <p>Propiedades en Venta</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="counter-box">
                            <h1 class="counter Starting">1276</h1>
                            <p>Propiedades en Arriendo</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="counter-box">
                            <h1 class="counter Starting">396</h1>
                            <p>Clientes</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="counter-box">
                            <h1 class="counter Starting">177</h1>
                            <p>Años de Experiencia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="separador" id="aliados">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nuestros Aliados</h2>
            </div>
            <div class="col-12">
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