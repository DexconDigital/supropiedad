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
    <link rel="shortcut icon" href="<?php echo $url_host ?>favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/bootstrap.min.css" class="css">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/all.css" class="css">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/owl.carousel.min.css" class="css">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/owl.theme.default.min.css" class="css">
    <link rel="stylesheet" href="<?php echo $url_host ?>css/style.css">
</head>

<body>
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
    <script src="<?php echo $url_host ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $url_host ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo $url_host ?>js/menu.paginas.js"></script>
    <script src="<?php echo $url_host ?>js/busqueda.avanzada.js"></script>
    <script src="<?php echo $url_host ?>js/scripts.js"></script>
    <script src="<?php echo $url_host ?>conexion_api/token_api.js"></script>
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