<?php $page = "servicios";
include 'layout/menu2.php';
?>
<script>
    var pagina = 'servicios';
</script>

<section id="nuestros_servicios">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Nuestros Servicios</h2>
            </div>
            <div class="col-12">
                <?php for ($i = 0; $i < count($texto_servicios['parrafos']); $i++) {
                    echo '
                        <p>' . $texto_servicios['parrafos'][$i] . '</p>
                    ';
                } ?>
            </div>
        </div>
    </div>
</section>

<section class="bg-grey separador" id="servicios">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $texto_servicios['lista'][0] ?></h2>
            </div>
            <div class="col-12 row">
                    <?php for ($i = 1; $i < count($texto_servicios['lista']); $i++) {
                        echo '
                        <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">'.$texto_servicios['lista'][$i].'</p>
                            </div>
                        </div>
                        </div>
                        ';
                    } ?>
            </div>
        </div>
    </div>
</section>