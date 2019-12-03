<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



require '../vendor/autoload.php';
if ($_POST) {
    $nombre = $_POST['nombred'];
    $correo = $_POST['correod'];
    $telefono = $_POST['telefonod'];
    $mensaje = $_POST['mensajed'];
    $co = $_POST['codigo'];
    
}
$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar
    
    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('SuPropiedadInmobiliaria@supropiedadinmobiliaria.com', 'SuPropiedadInmobiliaria@supropiedadinmobiliaria.com');
    //destinos
    /* $mail->addAddress('servicioalcliente@supropiedadinmobiliaria.com'); */
    

    

    $mail->Subject = 'Mensaje desde la página web de Su Propiedad Inmobiliaria';
    $mail->Body = '<span>Hola, '.$nombre.' quiere  recibir información del inmueble con Código <strong>'.$co.'</strong> y sus datos de contacto son:</span>
                   <ul>
                        <li>Correo: '.$correo.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script>window.location.href='.././inmuebles'</script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
?>