<?= anchor(site_url('remesa'), 'Volver al listado') ?>
<form action="" method="POST">
    <p>Año: <input type="text" name="anio" value="<?= $remesa->anio ?>" /></p>
    <p>Descripción: <textarea name="descripcion"><?= $remesa->descripcion ?></textarea></p>
    <input type="submit" value="Modificar" />
</form>
