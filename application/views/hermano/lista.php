<!DOCTYPE html>
<html>
    <head>
        <title>Listado de hermanos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php if (!is_null($mensaje)): ?>
            <p><?= $mensaje ?></p>
        <?php endif; ?>
        <?= anchor(site_url('hermano/nuevo'), 'Añadir un hermano') ?>
        <table border="1">
            <tr>
                <td>Nombre</td>
                <td>Primer apellido</td>
                <td>Segundo apellido</td>
                <td>Vivienda</td>
                <td>Familia</td>
                <td>Acciones</td>
            </tr>
            <?php foreach ($listado as $l): ?>
                <tr>
                    <td><?= $l->nombre ?></td>
                    <td><?= $l->apellido1 ?></td>
                    <td><?= $l->apellido2 ?></td>
                    <td>
                        <ul>
                            <li>Barriada: <?= $l->vivienda->Barriada ?></li>
                            <li>Número: <?= $l->vivienda->Numero ?></li>
                            <li>Línea: <?= $l->vivienda->Linea ?></li>
                        </ul>
                    </td>
                    <td><?= $l->familia ?></td>
                    <td>
                        <?= anchor(site_url('pago/lista/' . $l->idHermano), 'Ver pagos') ?>
                        <?= anchor(site_url('hermano/detalle/' . $l->idHermano), 'Ver detalles') ?>
                        <?= anchor(site_url('hermano/cambio/' . $l->idHermano), 'Modificar') ?>
                        <?= anchor(site_url('hermano/elimina/' . $l->idHermano), 'Eliminar') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
