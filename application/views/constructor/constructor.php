<!DOCTYPE html>
<html>
    <head>
        <title>Constructor de consultas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="" method="POST">
            <fieldset>
                <legend>Tabla de hermanos</legend>
                <?php foreach ($campos['hermano'] as $c): ?>
                <input type="checkbox" name="hermano[]" value="<?= 'hermano.' . $c ?>" /> <?= $c ?> <br />
                <?php endforeach; ?>
            </fieldset>
            <fieldset>
                <legend>Tabla de cuotas</legend>
                <?php foreach ($campos['cuota'] as $c): ?>
                <input type="checkbox" name="cuota[]" value="<?= 'cuota.' . $c ?>" /> <?= $c ?> <br />
                <?php endforeach; ?>
            </fieldset>
            <fieldset>
                <legend>Tabla de remesas</legend>
                <?php foreach ($campos['remesa'] as $c): ?>
                <input type="checkbox" name="remesa[]" value="<?= 'remesa.' . $c ?>" /> <?= $c ?> <br />
                <?php endforeach; ?>
            </fieldset>
            <input type="submit" value="Ejecutar consulta" />
        </form>
    </body>
</html>
