<!DOCTYPE html>
<html>
    <head>
        <title>Sorteo de medallas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="" method="POST">
            <?php foreach ($listado as $l): ?>
                <input type="checkbox" name="hermanos[]" value="<?= $l->nombre . ' ' . $l->apellido1 . ' ' . $l->apellido2 ?>" checked="checked" /><?= $l->nombre . ' ' . $l->apellido1 . ' ' . $l->apellido2 ?> <br />
            <?php endforeach; ?>
            <input type="submit" value="Generar sorteo" />
        </form>
    </body>
</html>
