<!DOCTYPE html>
<html>
    <head>
        <title>Modificar una vivienda</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= anchor(site_url('vivienda'), 'Volver al listado') ?>
        <form action="" method="POST">
            Barriada: <input type="text" name="Barriada" /><br />
            Línea: <input type="text" name="Linea" /><br />
            Número: <input type="text" name="Numero" /><br />
            Observaciones : <textarea name="Observaciones"></textarea><br />
            <input type="submit" value="Añadir" />
        </form>
    </body>
</html>
