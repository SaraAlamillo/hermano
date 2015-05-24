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
                    <td><?= $l->vivienda ?></td>
                    <td><?= $l->familia ?></td>
                    <td>
                        <?= anchor(site_url('hermano/detalle/' . $l->idHermano), 'Ver') ?>
                        <?= anchor(site_url('hermano/cambio/' . $l->idHermano), 'Modificar') ?>
                        <?= anchor(site_url('hermano/eliminar/' . $l->idHermano), 'Eliminar') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
