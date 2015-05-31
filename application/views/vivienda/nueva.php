<!DOCTYPE html>
<html>
    <head>
        <title>Crear una vivienda</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= anchor(site_url('vivienda'), 'Volver al listado') ?>
        <form action="" method="POST">
            Barriada: <?= crearDesplegable('Barriada', $lisBarriada, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?><br />
            Línea: <?= crearDesplegable('Linea', $lisLinea, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?><br />
            Número: <?= crearDesplegable('Numero', $lisNumero, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?><br />
            Observaciones : <textarea name="Observaciones"></textarea><br />
            <input type="submit" value="Añadir" />
        </form>
    </body>
</html>
