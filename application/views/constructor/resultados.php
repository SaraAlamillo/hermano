<!DOCTYPE html>
<html>
    <head>
        <title>Resultados de la consulta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table border="1">
            <?php foreach ($resultado as $registro): ?>
            <tr>
                <?php foreach ($registro as $campo): ?>
                <td><?= $campo ?></td>
                <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
