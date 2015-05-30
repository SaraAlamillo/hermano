<!DOCTYPE html>
<html>
    <head>
        <title>Listado de remesas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php if (!is_null($mensaje)): ?>
            <p><?= $mensaje ?></p>
        <?php endif; ?>
        <?= anchor(site_url('remesa/insertar'), 'Añadir una remesa') ?>
        <table border="1">
            <tr>
                <td>Año</td>
                <td>Descripción</td>
            </tr>
            <?php foreach ($listado as $l): ?>
                <tr>
                    <td><?= $l->anio ?></td>
                    <td><?= $l->descripcion ?></td>
                    <td>
                        <?= anchor(site_url('remesa/cambiar/' . $l->idRemesa), 'Modificar') ?>
                        <?= anchor(site_url('remesa/elimina/' . $l->idRemesa), 'Eliminar') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
