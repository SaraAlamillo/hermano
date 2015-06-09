<?= anchor(site_url('vivienda'), 'Volver al listado') ?>
<form action="" method="POST" id="contact-form">
    <div class="text-fields">
        <fieldset>
            <legend>Barriada</legend> 
        <div class="float-input">
        <?= crearDesplegable('Barriada', $lisBarriada, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id'], FALSE) ?>
            <span><i class="fa fa-user"></i></span>
        </div>
        </fieldset>
        <fieldset>
            <legend>Línea</legend> 
        <div class="float-input">
        <?= crearDesplegable('Linea', $lisLinea, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?>
            <span><i class="fa fa-user"></i></span>
        </div>
        </fieldset>
        <fieldset>
            <legend>Número</legend> 
        <div class="float-input">
        <?= crearDesplegable('Numero', $lisNumero, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?>
            <span><i class="fa fa-user"></i></span>
        </div>
        </fieldset>
    </div>
    <div class="submit-area">
        <fieldset>
            <legend>Observaciones</legend> 
            <textarea name="Observaciones"></textarea>
        </fieldset>
    </div>
    <input type="submit" id="submit_contact" class="main-button" value="Añadir" />
</form>
