<!DOCTYPE html>
<html>
    <head>
        <title>Crear una remesa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= anchor(site_url('remesa'), 'Volver al listado') ?>
        <form action="" method="POST">
            <p>Año: <input type="text" name="anio" /></p>
            <p>Descripción:  <textarea name="descripcion"></textarea></p>
            <input type="submit" value="Añadir" />
        </form>
    </body>
</html>
