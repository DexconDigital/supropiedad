<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombrep'];
    $apellido = $_POST['apellidop'];
    $documento  = $_POST['documentop'];
    $telefono  = $_POST['telefonop'];
    $correo  = $_POST['correop'];
    $tipo_gestion  = $_POST['tipo_gestionp'];
    $tipo_inmueble  = $_POST['tipo_inmueblep'];
    $estrato  = $_POST['estratop'];
    $direccion  = $_POST['direccionp'];
    $ciudad  = $_POST['ciudadp'];
    $precio  = $_POST['preciop'];
    $area  = $_POST['areap'];
    $habitacion  = $_POST['habitap'];
    $baños  = $_POST['banosp'];
    $parqueaderos  = $_POST['garajep'];


    /* echo 'Nombre :' , $nombre, 'Apellido:' , $apellido , 'Documento:' , $documento , 'Telefono:' ,  $telefono, 'Tipo de gestion: ' , $tipo_gestion , 'Tipo de inmueble:' , $tipo_inmueble , 'estrato:' , $estrato , 'Direccion:' , $direccion , 'Ciudad:' , $ciudad , 'Precio:' , $precio , 'Area:', $area ,   'Habitacion' , $habitacion ,
    'Baños:' ,$baños ,  'Parqueaderos: ',  $parqueaderos ;
    die(); */
}


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar

    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('SuPropiedad@supropiedad.com', 'SuPropiedad@supropiedad.com');
    //destinos
    $mail->addAddress('alexthunder7@gmail.com');
    $mail->addAddress('wdsp9898@gmail.com');
    $mail->addAddress('ceo@dexcondigital.com');


    $mail->Subject = 'Mensaje desde la pagina web de Su Propiedad Inmobiliaria';
    $mail->Body = '<span>Hola, ' . $nombre . ' quiere recibir información sobre como consignar un inmueble</span>
                   <span>sus datos de contacto son: </span>
                   <ul>
                        <li>Nombre: ' . $nombre . '</li>
                        <li>Apellido: ' . $apellido . '</li>
                        <li>Documento: ' . $documento . '</li>
                        <li>Télefono: ' . $telefono . '</li>
                        <li>Correo: ' . $correo . '</li>
                    </ul>
                    <span>Datos de su inmueble:</span>
                    <ul>
                    <li>Gestión: ' . $tipo_gestion . '</li>
                    <li>Tipo de Inmueble: ' . $tipo_inmueble . '</li>
                    <li>Estrato: ' . $estrato . '</li>
                    <li>Dirección: ' . $direccion . '</li>
                    <li>Ciudad: ' . $ciudad . '</li>
                    <li>Precio : $ ' . $precio . '</li>
                    <li>Área: ' . $area . '</li>
                    <li>Habitaciones: ' . $habitacion . '</li>
                    <li>Baños: ' . $baños . '</li>
                    <li>Parqueaderos: ' . $parqueaderos . '</li>
                </ul>

    ';
    $mail->send();
    echo "<script>window.location.href='.././publicaTuInmueble'</script>";
} catch (Exception $e) {
    echo 'algo salio mal', $e->getMessage();
}
