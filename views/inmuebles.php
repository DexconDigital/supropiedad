<?php $page = "inmuebles";
include 'layout/menu.php';
?>
<script>
    var pagina = 'inmuebles';
</script>

<section id="buscador_inmueble" class="separador">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Busqueda de Inmuebles</h2>
            </div>
            <div class="col-12">
                <div class="card bg-grey">
                    <div class="card-body">
                        <form action="">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Código</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="Código">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Ciudad</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Ciudad</option>
                                        <option>Bogota</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Barrio</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Barrio</option>
                                        <option>Bogota</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Gestion</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Gestion</option>
                                        <option>Arriendo</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Tipo Inmueble</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Inmueble</option>
                                        <option>Casa</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 busqueda_avanzada">
                                    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-secondary btn-md btn-block d-flex align-items-center justify-content-center" id="button_avanzada">Busqueda Avanzada</a>
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Baños</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="Alcobas">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Alcobas</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="Alcobas">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Área Minima</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="Área Miníma">
                                </div><div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Área Maxima</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="Área Maxíma">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Precio Minímo</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="Precio Minímo">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Maxímo</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="Precio Maxímo">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <div class="container">
                                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-secondary btn-md btn-block d-flex align-items-center justify-content-center" id="button_avanzada_2">Cerrar Busqueda Avanzada</a>
                                    </div>
                                </div>
                                <div class="col-5 text-center">
                                        <button type="button" class="btn btn-primary btn-md btn-block mt-4">
                                            <i class="fas fa-search mr-2"></i>Buscar
                                        </button>
                                </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="inmuebles" class="propiedades bg-grey separador">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="">Lista de inmuebles</h2>
            </div>
            <div class="col-12 row">
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
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-4">
                        <li class="page-item">
                            <a class="page-link" href="#">Atras</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Siguiente</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>