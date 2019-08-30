<?php $page = "consigna";
include 'layout/menu.php';
$con = $consignar_inmueble;
?>

<script>
    var pagina = 'consignar';
</script>

<section id="consigna" class="separador">
    <div class="container">
        <div class="row">
            <div class="col-12 bg-grey">
                <h2 class="pt-2 mb-4">Consigna tu Inmueble</h2>
            </div>
            <div class="col-12">
                <p><?php echo $con['parrafos'][0]; ?></p>
                <p><?php echo $con['parrafos'][1]; ?></p>
            </div>
            <div class="col-12 bg-grey">
                <h2 class="mt-4 mb-4"><?php echo $con['oferta'][0]; ?></h2>
            </div>
            <div class="col-12">
                <h3 class="bg-grey"><?php echo $con['oferta']['pagos'][0]; ?></h3>
                <ul>
                    <?php for ($i = 1; $i < count($con['oferta']['pagos']); $i++) {
                        echo '
                            <li>' . $con['oferta']['pagos'][$i] . '</li>
                        ';
                    }; ?>
                </ul>
            </div>
            <div class="col-12">
                <h3 class="bg-grey"><?php echo $con['oferta']['seguridad_respaldo'][0]; ?></h3>
                <ul>
                    <?php for ($i = 1; $i < count($con['oferta']['seguridad_respaldo']); $i++) {
                        echo '
                            <li>' . $con['oferta']['seguridad_respaldo'][$i] . '</li>
                        ';
                    }; ?>
                </ul>
            </div>
            <div class="col-12">
                <h3 class="bg-grey"><?php echo $con['oferta']['asesoria_seguimiento'][0]; ?></h3>
                <ul>
                    <?php for ($i = 1; $i < count($con['oferta']['asesoria_seguimiento']); $i++) {
                        echo '
                            <li>' . $con['oferta']['asesoria_seguimiento'][$i] . '</li>
                        ';
                    }; ?>
                </ul>
            </div>
            <div class="col-12">
                <h3 class="bg-grey"><?php echo $con['oferta']['servicio_digital'][0]; ?></h3>
                <ul>
                    <?php for ($i = 1; $i < count($con['oferta']['servicio_digital']); $i++) {
                        echo '
                            <li>' . $con['oferta']['servicio_digital'][$i] . '</li>
                        ';
                    }; ?>
                </ul>
            </div>
            <div class="col-12">
                <h3 class="bg-grey"><?php echo $con['oferta']['visibilidad_efectividad'][0]; ?></h3>
                <ul>
                    <?php for ($i = 1; $i < count($con['oferta']['visibilidad_efectividad']); $i++) {
                        echo '
                            <li>' . $con['oferta']['visibilidad_efectividad'][$i] . '</li>
                        ';
                    }; ?>
                </ul>
            </div>
            <div class="col-12">
                <h3 class="bg-grey"><?php echo $con['oferta']['parrafo_2']['otros_servicios'][0]; ?></h3>
                <ul>
                    <?php for ($i = 1; $i < count($con['oferta']['parrafo_2']['otros_servicios']); $i++) {
                        echo '
                            <li>' . $con['oferta']['parrafo_2']['otros_servicios'][$i] . '</li>
                        ';
                    }; ?>
                </ul>
            </div>
            <div class="col-12">
                <h4 class="text-center mb-4 mt-4 pt-4 pb-4"><?php echo $con['oferta']['parrafo_2'][0]; ?></h4>
            </div>
            <div class="col-12 row bg-grey">
                <div class="col-12">
                    <h3 class="text-center mb-4 mt-4"><?php echo $con['oferta']['titulo_formulario'][0]; ?></h3>
                </div>
                <div class="col-12">
                    <form action="" class="row" id="consignar_formulario">
                        <h5 class="col-12 pb-3">Información Personal</h5>
                        <div class="col-5 form-group">
                            <input type="text" class="form-control" placeholder="Nombre Completo">
                        </div>
                        <div class="col-5 form-group">
                            <input type="text" class="form-control" placeholder="Apellido">
                        </div>
                        <div class="col-2 form-group">
                            <input type="text" class="form-control" placeholder="Documento">
                        </div>
                        <div class="col-4 form-group">
                            <input type="text" class="form-control" placeholder="Teléfono">
                        </div>
                        <div class="col-8 form-group">
                            <input type="text" class="form-control" placeholder="Correo">
                        </div>
                        <h5 class="col-12 pb-3">Información del inmueble</h5>
                        <div class="col-6 form-group">
                            <select name="" id="tipo_gestion_buscar" class="form-control">
                                <option value="0">Gestión</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <select name="" id="tipo_inmueble_buscar" class="form-control">
                                <option value="0">Tipo Inmueble</option>
                            </select>
                        </div>
                        <div class="col-2 form-group">
                            <input type="text" class="form-control" placeholder="Estrato">
                        </div>
                        <div class="col-10 form-group">
                            <input type="text" class="form-control" placeholder="Dirección">
                        </div>
                        <div class="col-4 form-group">
                            <input type="text" class="form-control" placeholder="Ciudad">
                        </div>
                        <div class="col-4 form-group">
                            <input type="text" class="form-control" placeholder="Precio">
                        </div>
                        <div class="col-4 form-group">
                            <input type="text" class="form-control" placeholder="Área">
                        </div>
                        <div class="col-4 form-group">
                            <input type="text" class="form-control" placeholder="Habitaciones">
                        </div>
                        <div class="col-4 form-group">
                            <input type="text" class="form-control" placeholder="Baños">
                        </div>
                        <div class="col-4 form-group">
                            <input type="text" class="form-control" placeholder="Parqueaderos">
                        </div>
                        <div class=" col-12 form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" style="height:auto;">
                                <label class="form-check-label" for="gridCheck">
                                Confirmo que he leído, entendido y acepto la <a href="<?php echo $url_host;?>formatos/politica_de_datos.pdf">política de tratamiento de datos personales</a>
                                    de su Propiedad Inmobiliaria SAS
                                </label>
                            </div>
                        </div>
                        <div class="col-12 row justify-content-center">
                            <div class="col-4">
                                <button type="button" class="btn btn-primary btn-md btn-block">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>