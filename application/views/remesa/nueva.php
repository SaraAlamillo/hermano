<?= anchor(site_url('remesa'), 'Volver al listado') ?>
<form action="" method="POST" id="contact-form">
    <div class="text-fields">
            <div class="float-input">
                <input type="text" name="anio" placeholder="Año" />
                <span><i class="fa fa-user"></i></span>
        </fieldset>
    </div>
    <div class="submit-area">
            <textarea name="descripcion">Descripción</textarea>
    </div>
    <input type="submit" value="Añadir" />
</form>
