<?php 
require 'controllers/inmueblesController.php';
$page = "inmuebles";
include 'layout/menu.php';
?>
<script>
    var pagina = 'inmuebles';
</script>

<section id="buscador_inmueble" class="separador">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Busqueda de Inmuebles</h2>
            </div>
            <div class="col-12">
                <div class="card bg-grey">
                    <div class="card-body">
                        <form action="">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-4">
                                    <label for="codigo">Código</label>
                                    <input type="number" class="form-control" id="codigo_buscar" placeholder="Código" disabled>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Ciudad</label>
                                    <select id="ciudad_buscar" class="form-control">
                                        <option selected value='0'>Ciudad</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Barrio</label>
                                    <select id="barrio_buscar" class="form-control">
                                        <option selected value='0'>Barrio</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Gestión</label>
                                    <select id="tipo_gestion_buscar" class="form-control">
                                        <option selected value='0'>Gestión</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Tipo Inmueble</label>
                                    <select id="tipo_inmueble_buscar" class="form-control">
                                        <option selected value='0'>Tipo Inmueble</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 busqueda_avanzada">
                                    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-secondary btn-md btn-block d-flex align-items-center justify-content-center" id="button_avanzada">Busqueda Avanzada</a>
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Baños</label>
                                    <input type="number" class="form-control" id="banios_buscar" placeholder="Baños">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Alcobas</label>
                                    <input type="number" class="form-control" id="alcobas_buscar" placeholder="Alcobas">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Área Mínima</label>
                                    <input type="number" class="form-control" id="area_minima_buscar" placeholder="Área Mínima">
                                </div><div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Área Máxima</label>
                                    <input type="number" class="form-control" id="area_maxima_buscar" placeholder="Área Máxima">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Precio Mínimo</label>
                                    <input type="number" class="form-control" id="precio_minimo_buscar" placeholder="Precio Mínimo">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <label for="inputEmail4">Máximo</label>
                                    <input type="number" class="form-control" id="precio_maximo_buscar" placeholder="Precio Máximo">
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <div class="container">
                                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-secondary btn-md btn-block d-flex align-items-center justify-content-center" id="button_avanzada_2">Cerrar Busqueda Avanzada</a>
                                    </div>
                                </div>
                                <div class="col-5 text-center">
                                        <button type="button" class="btn btn-primary btn-md btn-block mt-4" id="buscar2">
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
                <?php listar_inmuebles($api['Inmuebles'], $url_host);?>
            </div>
            <div class="col-12 text-center">
            <?php
                if (is_array($api) && isset($api['datosGrales'])) {
                    echo '
                        <nav aria-label="Page navigation example" class="text-center">
                        <span><small id="numero_pagina"></small></span>
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" id="ant" onclick="paginador(1)" >Atras</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" id="next" onclick="paginador(2)">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                        ';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php if(is_array($api) && isset($api['datosGrales'])){
    echo '<script>var page = "' . $pag . '"; </script>'; 
    echo '<script>var url = "' . $url_total . '"; </script>'; 
    echo '<script>var totalpagina = ' . $api['datosGrales']['totalPagina'] . '; </script>'; 
    echo '<script>var totalInmuebles = ' . $api['datosGrales']['totalInmuebles'] . '; </script>'; 
};
?>