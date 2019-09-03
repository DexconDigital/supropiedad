<?php $page = "quienesSomos";
include 'layout/menu2.php';
?>
<script>var pagina = 'quienesSomos';</script>

<section id="quienesSomos" class=" mt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-12 row">
                <div class="col-6">
                    <div class="container-img">
                        <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h2 class="mb-4">
                            Quiénes Somos
                        </h2>
                        <p> <?php echo $texto_quienes_somos['parrafos'][0]; ?> </p>
                    </div>
                </div>
            </div>
            <div class="col-12 row">
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h2 class="mb-4">
                            Misión
                        </h2>
                        <p> <?php echo $texto_quienes_somos['mision'][0]; ?></p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container-img">
                        <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 row">
                <div class="col-6">
                    <div class="container-img">
                        <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h2 class="mb-4">
                            Visión
                        </h2>
                        <ul>
                            <?php for($i=0; $i<count($texto_quienes_somos['valores']); $i++){
                                echo '
                                    <li>'.$texto_quienes_somos['valores'][$i].'</li>
                                ';
                            } ;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>