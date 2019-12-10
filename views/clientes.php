<?php $page = "clientes";
include 'layout/menu2.php';
?>
<script>
    var pagina = 'clientes';
</script>

<section id="clientes" class="bg-grey separador_clientes">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Clientes</h2>
            </div>
            <div class="col-12 row justify-content-center cont_cards">
                <div class="col-lg-4 col-md-6 col-12 wow slideInLeft">
                    <a href="https://www.simiinmobiliarias.com/base/simired/simidocsapi1.0/index.php?inmo=813&tipo=2" target="_blank">
                        <div class="card text-center" style="">
                            <div class="container-icon">
                                <i class="<?php echo $iconos_clientes['arredatarios'] ?>"></i>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h3 class="card-title">Arrendatarios</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow slideInDown">
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
                <div class="col-lg-4 col-md-6 col-12 wow slideInUp">
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
                <div class="col-lg-3 col-md-6 col-12 wow slideInRight">
                    <a type="button" data-toggle="modal" class="botton_virtual" data-target="#formularios">
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
                <div class="col-lg-3 col-md-6 col-12 wow slideInRight">
                    <a type="button"  data-toggle="modal" class="cont_intruct_boton" data-target="#instructivo">
                        <div class="card text-center" style="">
                            <div class="container-icon">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Instructivos</h3>
                            </div>
                        </div>
                    </a>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <?php
                    for ($i = 0; $i < count($formularios_aseguradoras); $i++) {
                        echo '
                                <li class="list-group-item">
                                    <a href="' . $url_host . '/formatos' . $formularios_aseguradoras[$i]['ruta'] . '" target="_blank">
                                        ' . $formularios_aseguradoras[$i]['nombre'] . '
                                    </a>
                                </li>
                            ';
                    }; ?>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="instructivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Descargar Instructivos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a class="color_modal" href="formatos/INSTRUCTIVO_ARRENDATARIO.pdf" target="_blank">
                            Instructivo Arrendatarios
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a class="color_modal"href="formatos/INSTRUCTIVO_PROPIETARIO.pdf" target="_blank">
                            Instructivo Propietarios
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>