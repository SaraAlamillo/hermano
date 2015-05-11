<!DOCTYPE html>
<html>
    <head>
        <title>Detalle de un contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= anchor(site_url('contacto'), 'Volver al listado') ?>
        <p>Empresa: <?= $contacto->nombre_empresa ?></p>
        <p>Tratamiento: <?= $contacto->tratamiento ?></p>
        <p>Nombre: <?= $contacto->nombre ?></p>
        <p>Primer apellido: <?= $contacto->apellido1 ?></p>
        <p>Segundo apellido: <?= $contacto->apellido2 ?></p>
        <p>CIF: <?= $contacto->cif ?></p>
        <p>Tipo de vía: <?= $contacto->tipo_via ?></p>
        <p>Dirección: <?= $contacto->direccion ?></p>
        <p>Número: <?= $contacto->numero ?></p>
        <p>Piso: <?= $contacto->piso ?></p>
        <p>Puerta: <?= $contacto->puerta ?></p>
        <p>Código postal: <?= $contacto->codigo_postal ?></p>
        <p>Población: <?= $contacto->poblacion ?></p>
        <p>Móvil: <?= $contacto->movil ?></p>
        <p>Fijo: <?= $contacto->fijo ?></p>
        <p>Email: <?= $contacto->email ?></p>
        <p>Twitter: <?= $contacto->twitter ?></p>
        <p>Facebook: <?= $contacto->facebook ?></p>
        <p>Instagram: <?= $contacto->instagram ?></p>
        <p>Tipo: <?= $contacto->tipo ?></p>
        <p>Provincia: <?= $contacto->provincia ?></p>
        <?= anchor(site_url('contacto/cambio/' . $contacto->idContacto), 'Modificar') ?>
        <?= anchor(site_url('contacto/eliminar/' . $contacto->idContacto), 'Eliminar') ?>
    </body>
</html>
