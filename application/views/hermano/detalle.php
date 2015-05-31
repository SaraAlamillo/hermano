<!DOCTYPE html>
<html>
    <head>
        <title>Detalle de un hermano</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= anchor(site_url('hermano'), 'Volver al listado') ?>
        <p>Vivienda: </p>
        <ul>
            <li>Barriada: <?= $hermano->vivienda->Barriada ?></li>
            <li>Número: <?= $hermano->vivienda->Numero ?></li>
            <li>Línea: <?= $hermano->vivienda->Linea ?></li>
        </ul>
        <p>Tratamiento: <?= $hermano->tratamiento ?></p>
        <p>Nombre: <?= $hermano->nombre ?></p>
        <p>Primer apellido: <?= $hermano->apellido1 ?></p>
        <p>Segundo apellido: <?= $hermano->apellido2 ?></p>
        <p>DNI: <?= $hermano->dni ?></p>
        <p>Tipo de vía: <?= $hermano->tipo_via ?></p>
        <p>Dirección: <?= $hermano->direccion ?></p>
        <p>Número: <?= $hermano->numero ?></p>
        <p>Piso: <?= $hermano->piso ?></p>
        <p>Puerta: <?= $hermano->puerta ?></p>
        <p>Código postal: <?= $hermano->codigo_postal ?></p>
        <p>Población: <?= $hermano->poblacion ?></p>
        <p>Móvil: <?= $hermano->movil ?></p>
        <p>Fijo: <?= $hermano->fijo ?></p>
        <p>Email: <?= $hermano->email ?></p>
        <p>Twitter: <?= $hermano->twitter ?></p>
        <p>Facebook: <?= $hermano->facebook ?></p>
        <p>Instagram: <?= $hermano->instagram ?></p>
        <p>Tipo: <?= $hermano->tipo ?></p>
        <p>Cuenta corriente: <?= $hermano->cuenta_corriente ?></p>
        <p>Familia: <?= $hermano->familia ?></p>
        <p>Provincia: <?= $hermano->provincia ?></p>
        <p>Medalla: <?= $hermano->medalla ?></p>
        <?= anchor(site_url('hermano/cambio/' . $hermano->idHermano), 'Modificar') ?>
        <?= anchor(site_url('hermano/elimina/' . $hermano->idHermano), 'Eliminar') ?>
    </body>
</html>
