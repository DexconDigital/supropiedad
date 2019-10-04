<?php $page = "servicios";
include 'layout/menu2.php';
?>
<script>
    var pagina = 'servicios';
</script>

<section id="nuestros_servicios" class="separador">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4 wow zoomInUp" data-wow-delay=".5s" data-wow-duration="2s">Nuestros Servicios</h2>
            </div>
            <div class="col-12 wow zoomInDown" data-wow-delay=".6s" data-wow-duration="2s">
                <?php for ($i = 0; $i < count($texto_servicios['parrafos']); $i++) {
                    echo '
                        <p>' . $texto_servicios['parrafos'][$i] . '</p>
                    ';
                } ?>
            </div>
        </div>
    </div>
</section>

<section class="separador" id="servicios">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12 wow zoomInUp" data-wow-delay=".7s" data-wow-duration="2s">
                <h2><?php echo $texto_servicios['lista'][0] ?></h2>
            </div>
            <div class="col-12">
                <div class="card-deck">
                    <?php for ($i = 1; $i < count($texto_servicios['lista']); $i++) {
                        echo '
                        <div class="card wow '.$texto_servicios['animacion'][$i].'">
                            <div class="container-icon text-center">
                                <i class="'.$texto_servicios['iconos'][$i].'"></i>
                            </div>
                            <div class="card-body">
                                <p class="card-text">'.$texto_servicios['lista'][$i].'</p>
                            </div>
                        </div>
                        ';
                    } ?>
                </div>
            </div>
        </div>
        </div>
</section>

