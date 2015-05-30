<!DOCTYPE html>
<html>
    <head>
        <title>Menú principal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<ul>
			<li><?= anchor(site_url('vivienda'), 'Viviendas') ?></li>
			<li><?= anchor(site_url('hermano'), 'Hermanos') ?></li>
			<li><?= anchor(site_url('remesa'), 'Remesas') ?></li>
			<li><?= anchor('#', 'Constructor de consultas') ?></li>
			<li><?= anchor('#', 'Registro de pago') ?></li>
			<li><?= anchor(site_url('contacto'), 'Agenda de contactos') ?></li>
			<li><?= anchor(site_url('hermano/medallas'), 'Sorteo de medallas') ?></li>
		</ul>
    </body>
</html>