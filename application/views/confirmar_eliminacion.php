<!DOCTYPE html>
<html>
    <head>
        <title>¿Eliminar registro?</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	<p>¿Está seguro que quiere eliminar el siguiente registro?</p>
        <form action="" method="POST">
			<table border="1">
				<?php foreach ($datos as $clave => $valor): ?>
				<tr>
				<td><?= $clave ?></td>
				<td><?= $valor ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
            <input type="submit" name="eliminar" value="Si" />
            <input type="submit" name="eliminar" value="No" />
        </form>
    </body>
</html>