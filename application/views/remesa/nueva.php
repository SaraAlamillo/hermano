<?= anchor(site_url('remesa'), 'Volver al listado') ?>
<form action="" method="POST" id="contact-form">
    <div class="text-fields">
        <fieldset>
            <legend>Año</legend> 
            <div class="float-input">
                <input type="text" name="anio" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
    </div>
    <div class="submit-area">
        <fieldset>
            <legend>Descripción</legend> 
            <textarea name="descripcion"></textarea>
        </fieldset>
    </div>
    <input type="submit" value="Añadir" />
</form>
