<!DOCTYPE html>
<html>
    <head>
        <title>Registro de pagos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <fieldset>
            <legend>Hermano</legend>
            <?= crearDesplegable('hermano', $hermanos, $seleccionado['hermano'], ['nombre' => '', 'id' => '']) ?>
        </fieldset>
        <fieldset>
            <legend>Remesa</legend>
            <?= crearDesplegable('anio', $anios, $seleccionado['anio'], NULL, ['desc' => 'anio', 'valor' => 'anio'], TRUE) ?>
            <?= crearDesplegable('descripcion', $descripciones, $seleccionado['descripcion'], NULL, ['desc' => 'descripcion', 'valor' => 'idRemesa'], TRUE) ?>
        </fieldset>
        <fieldset>
            <legend>Plazos</legend>
            <input type="text" name="plazo1" value="<?=$seleccionado['plazo1'] ?>" />
            <input type="text" name="plazo2" value="<?=$seleccionado['plazo2'] ?>" />
        </fieldset>
        <input type="submit" value="Registrar" />
    </body>
</html>
