<?php
require 'variables/config.php';
require 'variables/variables.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Su propiedad Inmobiliaria</title>
    <meta property="og:url"           content="<?php echo $url_host;?>" />
    <meta property="og:type"          content="Sitio web Inmobiliario de SuPropiedad" />
    <meta property="og:title"         content="Inmueble de Supropiedad" />
    <meta property="og:description"   content="Mira este increible Inmueble" />
    <meta property="og:image"         content="<?php echo $url_host;?>logo_trazo.png"/>
    <link rel="shortcut icon" href="<?php echo $url_host ?>favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/all.min.css" class="css">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/owl.carousel.min.css" class="css">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/owl.theme.default.min.css" class="css">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/animate.css">
    <script src="<?php echo $url_host ?>js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <style>
        #wrap-preload {
            position: fixed;
            z-index: 10;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: #fff;
            opacity: 1;
            visibility: visible;
            transition: opacity .5s ease, visibility .5s ease;
            z-index: 998;
        }

        #wrap-preload.close {
            opacity: 0;
            visibility: hidden;
        }

        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 997;
        }

        #wrap-preload>img.gif {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -50%, 0);
            z-index: 1032;
        }
    </style>  
</head>

<body>

    <div id="wrap-preload">
        <img src="<?php echo $url_host ?>images/preloader.gif" alt="gif" class="gif" id="gif">
    </div>
    <script>
       var loader = document.getElementById("wrap-preload");
        window.addEventListener("load", function () {
            loader.style.visibility = "hidden";
        });
    </script>
    <div class="container-fluid body">
        <?php
        $datos = array();
        if (isset($_GET['datos'])) {
            $datos =  explode('/', $_GET['datos']);
            $ruta_archivo = './views/' . $datos[0] . '.php';
            if (is_file($ruta_archivo)) {
                include './views/' . $datos[0] . '.php';
            } else {
                include './views/inicio.php';
            }
        } else {
            include './views/inicio.php';
        }
        ?>
    </div>
    <footer>
        <?php include 'layout/footer.php'; ?>
    </footer>
    <div class="subir">
        <i class="fas fa-angle-double-up"></i>
    </div>
    <div class="redes">
        <ul>
            <li><a href="<?php echo $link_facebook; ?>" target="blank"><img src="<?php echo $url_host ?>images/facebook.jpg" alt=""></a></li>
            <li><a href="<?php echo $link_instagram; ?>" target="blank"><img src="<?php echo $url_host ?>images/instagram.png" alt=""></a></li>
            <li><a href="<?php echo $link_whatsapp; ?>" target="blank"><img src="<?php echo $url_host ?>images/whatsapp2.png" alt=""></a></li>
        </ul>
    </div>

    <script src="<?php echo $url_host ?>js/jquery.min.js"></script>
    <script src="<?php echo $url_host ?>js/countUp.min.js"  ></script>
    <script src="<?php echo $url_host ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $url_host ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo $url_host ?>conexion_api/token_api.js"></script>
    <script src="<?php echo $url_host ?>js/menu.paginas.js"></script>
    <script src="<?php echo $url_host ?>js/busqueda.avanzada.js"></script>
    <script src="<?php echo $url_host ?>js/scripts.js"></script>
    <script src="<?php echo $url_host ?>js/counter-propertys.js"></script>

    <script src="<?php echo $url_host ?>conexion_api/validadores.js"></script>
    <script src="<?php echo $url_host ?>conexion_api/buscador.js"></script>
    <script src="<?php echo $url_host ?>conexion_api/listarInmuebles.js"></script>

    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        })
    </script>
    <script>
        $(document).ready(function() {

            $('.subir').click(function() {
                $('body, html').animate({
                    scrollTop: '0px'
                }, 300);
            });

            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.subir').fadeIn(500);
                } else {
                    $('.subir').fadeOut(500);
                }
            });
        });
    </script>
    <script>

    </script>
</body>

</html>