<?php

require_once 'variables/config.php';
require_once 'modelo_inmueble.php';

$pag = 1;
$ciudad = 0;
$barrio = 0;
$gestion = 0;
$inmueble = 0;
$alcobas = 0;
$banos = 0;
$area_minima = 0;
$area_maxima = 0;
$precio_minimo = 0;
$precio_maximo = 0;

if (isset($datos[1]) && $datos[1] == 'pagina') {
    $pag = $datos[2];
}

if (isset($datos[3]) && !isset($datos[11])) {
    $ciudad = $datos[2];
    $barrio = $datos[4];
    $gestion = $datos[6];
    $inmueble = $datos[8];
    $pagina = $datos[10];
}
if (isset($datos[3]) && isset($datos[11])) {
    $ciudad = $datos[2];
    $barrio = $datos[4];
    $gestion = $datos[6];
    $inmueble = $datos[8];
    $banos = $datos[10];
    $alcobas = $datos[12];
    $area_minima = $datos[14];
    $area_maxima = $datos[16];
    $precio_minimo = $datos[18];
    $precio_maximo = $datos[20];
    $pag = $datos[22];
}
$ch = curl_init();
$headers =  'Authorization:' . TOKEN;
curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2.1.1/filtroInmueble/limite/' . $pag . '/total/9/departamento/0/ciudad/' . $ciudad . '/zona/0/barrio/' . $barrio . '/tipoInm/' . $inmueble . '/tipOper/' . $gestion . '/areamin/'.$area_minima.'/areamax/'.$area_maxima.'/valmin/'.$precio_minimo.'/valmax/'.$precio_maximo.'/campo/0/order/0/banios/'.$banos.'/alcobas/'.$alcobas.'/garajes/0/sede/0/usuario/0');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$api = json_decode($result, true);
if (!is_array($api)) {
    $api=[
        'Inmuebles' => ''
    ];
}

function listar_inmuebles($r, $url)
{
    if (is_array($r)) {
        modelo_inmueble2($r, $url);
    } else {
        echo '<h2 class="text-center w-100" >No se encontraron inmuebles</h2>';
    }
}
