<form>
    <div class="row">
        <div class="col-6 form-group">
            <input type="text" class="form-control" placeholder="Nombre Completo">
        </div>
        <div class="col-6 form-group">
            <input type="text" class="form-control" placeholder="Correo">
        </div>
        <div class="col-6 form-group">
            <input type="text" class="form-control" placeholder="Teléfono">
        </div>
        <div class="col-6 form-group">
            <input type="text" class="form-control" placeholder="Asunto">
        </div>
        <div class="col-12 form-group">
            <textarea type="text" rows="4" class="form-control" placeholder="Comentarios"></textarea>
        </div>
        <div class=" col-12 form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" style="height:auto;">
                <label class="form-check-label" for="gridCheck">
                    Confirmo que he leído, entendido y acepto la <a href="<?php echo $url_host; ?>formatos/politica_de_datos.pdf">política de tratamiento de datos personales</a>
                    de su Propiedad Inmobiliaria SAS
                </label>
            </div>
        </div>
        <div class="col-12 row justify-content-center">
            <div class="col-4">
                <button type="button" class="btn btn-primary btn-md btn-block">Enviar</button>
            </div>
        </div>
    </div>
</form>