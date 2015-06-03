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
            <p>Cuota 1 <input type="text" name="cuota1" value="<?=$seleccionado['cuota1'] ?>" /></p>
            <p>Cuota 2 <input type="text" name="cuota2" value="<?=$seleccionado['cuota2'] ?>" /></p>
        </fieldset>
        <input type="submit" value="Registrar" />
    </body>
</html>
