<!DOCTYPE html>
<html>
    <head>
        <title>Constructor de consultas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="" method="POST">
            <?php foreach ($campos as $clave => $valor): ?>
                <fieldset>
                    <legend>Tabla de <?= $clave ?></legend>
                    <?php foreach ($valor as $v): ?>
                        <input type="checkbox" name="<?= $clave ?>[]" value="<?= $clave . '.' . $v ?>" /> <?= $v ?> <br />
                    <?php endforeach; ?>
                </fieldset>
            <?php endforeach; ?>
            <input type="submit" value="Ejecutar consulta" />
        </form>
    </body>
</html>
