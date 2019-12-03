<form action="<?php echo $url_host ?>email/formulario_bogota.php" method="post">
    <div class="row">
        <div class="col-6 form-group">
            <input type="text" class="form-control" id="nombrebog" name="nombrebog"  placeholder="Nombre Completo" required>
        </div>
        <div class="col-6 form-group pl-0">
            <input type="text" class="form-control" id="correobog" name="correobog" placeholder="Correo" required>
        </div>
        <div class="col-6 form-group">
            <input type="text" class="form-control" id="telefonobog" name="telefonobog" placeholder="Teléfono" required>
        </div>
        <div class="col-6 form-group pl-0">
            <input type="text" class="form-control" id="asuntobog" name="asuntobog" placeholder="Asunto" required>
        </div>
        <div class="col-12 form-group">
            <textarea type="text" rows="4" class="form-control" id="mensajebog" name="mensajebog" placeholder="Comentarios"required></textarea>
        </div>
        <div class=" col-12 form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" style="height:auto;" required>
                <label class="form-check-label" for="gridCheck">
                    Confirmo que he leído, entendido y acepto la <a target="_blank" href="<?php echo $url_host; ?>formatos/politica_de_datos.pdf">política de tratamiento de datos personales</a> y <a target="_blank" href="<?php echo $url_host; ?>formatos/TERMINOS-Y-CONDICIONES.pdf">Terminos y condiciones</a>
                    de SU PROPIEDAD INMOBILIARIA SAS
                </label>
            </div>
        </div>
        <div class="col-12 row justify-content-center">
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-md btn-block">Enviar</button>
            </div>
        </div>
    </div>
</form>