<!DOCTYPE html>
<html>
    <head>
        <title>Listado de viviendas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php if (!is_null($mensaje)): ?>
            <p><?= $mensaje ?></p>
        <?php endif; ?>
        <?= anchor(site_url('vivienda/nueva'), 'Añadir una vivienda') ?>
        <table border="1">
            <tr>
                <td>Barriada</td>
                <td>Linea</td>
                <td>Numero</td>
                <td>Observaciones</td>
                <td>Acciones</td>
            </tr>
            <?php foreach ($listado as $l): ?>
                <tr>
                    <td><?= $l->Barriada ?></td>
                    <td><?= $l->Linea ?></td>
                    <td><?= $l->Numero ?></td>
                    <td><?= $l->Observaciones ?></td>
                    <td><?= anchor('vivienda/cambio/' . $l->idVivienda, 'Modificar') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
