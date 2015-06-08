<form action="" method="POST">
    <?php foreach ($listado as $l): ?>
        <input type="checkbox" name="hermanos[]" value="<?= $l->idHermano . '. ' . $l->nombre . ' ' . $l->apellido1 . ' ' . $l->apellido2 ?>" checked="checked" /><?= $l->idHermano . '. ' . $l->nombre . ' ' . $l->apellido1 . ' ' . $l->apellido2 ?> <br />
    <?php endforeach; ?>
    <input type="submit" value="Generar sorteo" />
</form>
