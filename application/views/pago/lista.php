<!DOCTYPE html>
<html>
    <head>
        <title>Listado de pagos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Año</td>
                <td>Descripción</td>
                <td>Primer pago</td>
                <td>Segundo pago</td>
            </tr>
            <?php foreach ($listado as $l): ?>
                <tr>
                    <td><?= $l->anio ?></td>
                    <td><?= $l->descripcion ?></td>
                    <?php if (empty($l->plazo1)): ?>
                    <td>NO PAGADO</td>
                    <?php else: ?>
                    <td><?= $l->plazo1 ?></td>
                    <?php endif; ?>
                    <?php if (empty($l->plazo2)): ?>
                    <td>NO PAGADO</td>
                    <?php else: ?>
                    <td><?= $l->plazo2 ?></td>
                    <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
