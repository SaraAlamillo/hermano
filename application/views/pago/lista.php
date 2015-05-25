<!DOCTYPE html>
<html>
    <head>
        <title>Listado de pagos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php if (!is_null($mensaje)): ?>
            <p><?= $mensaje ?></p>
        <?php endif; ?>
        <?= anchor(site_url('pago/nuevo'), 'Añadir una cuota') ?>
        <table border="1">
            <tr>
                <td>Año</td>
                <td>Descripción</td>
                <td>Primer pago</td>
                <td>Segundo pago</td>
                <td>Acciones</td>
            </tr>
            <?php foreach ($listado as $l): ?>
                <tr>
                    <td><?= $l->anio ?></td>
                    <td><?= $l->descripcion ?></td>
                    <td><?= $l->plazo1 ?></td>
                    <td><?= $l->plazo2 ?></td>
                    <td>
                        <?= anchor(site_url('pago/cambio/' . $l->idHermano . '/' . $l->idRemesa . '/' . $l->idCuota), 'Modificar') ?>
                        <?= anchor(site_url('pago/elimina/' . $l->idHermano . '/' . $l->idRemesa . '/' . $l->idCuota), 'Eliminar') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
