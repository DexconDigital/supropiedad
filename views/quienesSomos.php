<?php $page = "quienesSomos";
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
                    <div class="container-img text-center ">
                        <img src="<?php echo $url_host; ?>images/Logo2.jpg" alt="" style="width:80%">
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center">
                    <div>
                        <h2 class="mb-4 wow bounceInDown" data-wow-delay="1s">
                            Quiénes Somos
                        </h2>
                        <p class="wow bounceInUp" data-wow-delay="1s"> <?php echo $texto_quienes_somos['parrafos'][0]; ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="mision">
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
                        <img src="<?php echo $url_host; ?>images/no_image.png" alt="">
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