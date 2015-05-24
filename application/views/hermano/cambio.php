<!DOCTYPE html>
<html>
    <head>
        <title>Modificar un hermano</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= anchor(site_url('hermano'), 'Volver al listado') ?>
        <form action="" method="POST">
            <p>Vivienda: <?= crearDesplegable('vivienda', $viviendas, $hermano->vivienda) ?></p>
            <p>Tratamiento: <?=  crearDesplegable('tratamiento', $lisTratamiento, $hermano->tratamiento, NULL, ['desc' => 'nombre', 'valor' => 'id']) ?></p>
            <p>Nombre: <input type="text" name="nombre" value="<?=$hermano->nombre?>" /></p>
            <p>Primer apellido: <input type="text" name="apellido1" value="<?=$hermano->apellido1?>" /></p>
            <p>Segundo apellido: <input type="text" name="apellido2" value="<?=$hermano->apellido2?>" /></p>
            <p>DNI: <input type="text" name="dni" value="<?=$hermano->dni?>" /></p>
            <p>Tipo de vía: <?=  crearDesplegable('tipo_via', $lisTipoVia, $hermano->tipo_via, NULL, ['desc' => 'nombre', 'valor' => 'id']) ?></p>
            <p>Dirección: <input type="text" name="direccion" value="<?=$hermano->direccion?>" /></p>
            <p>Número: <input type="text" name="numero" value="<?=$hermano->numero?>" /></p>
            <p>Piso: <input type="text" name="piso" value="<?=$hermano->piso?>" /></p>
            <p>Puerta: <input type="text" name="puerta" value="<?=$hermano->puerta?>" /></p>
            <p>Código postal: <input type="text" name="codigo_postal" value="<?=$hermano->codigo_postal?>" /></p>
            <p>Población: <input type="text" name="poblacion" value="<?=$hermano->poblacion?>" /></p>
            <p>Móvil: <input type="text" name="movil" value="<?=$hermano->movil?>" /></p>
            <p>Fijo: <input type="text" name="fijo" value="<?=$hermano->fijo?>" /></p>
            <p>Email: <input type="text" name="email" value="<?=$hermano->email?>" /></p>
            <p>Twitter: <input type="text" name="twitter" value="<?=$hermano->twitter?>" /></p>
            <p>Facebook: <input type="text" name="facebook" value="<?=$hermano->facebook?>" /></p>
            <p>Instagram: <input type="text" name="instagram" value="<?=$hermano->instagram?>" /></p>
            <p>Provincia: <?=  crearDesplegable('provincia', $lisProvincia, $hermano->provincia, NULL, ['desc' => 'nombre', 'valor' => 'idProvincia'], TRUE) ?></p>
            <p>Tipo de pago: <?= crearDesplegable('tipo', $lisTipoPago, $hermano->tipo, NULL, ['desc' => 'nombre', 'valor' => 'id']) ?></p>
            <p>Cuenta corriente: <input type="text" name="cuenta_corriente" value="<?=$hermano->cuenta_corriente?>" /></p>
            <p>Familia: <?= crearDesplegable('familia', $lisFamilia, $hermano->familia, NULL, ['desc' => 'nombre', 'valor' => 'id']) ?></p>
            <p>Medalla: <?= crearListaRadio('medalla', [['nombre' => 'Si', 'id' => '1'], ['nombre' => 'No', 'id' => '0']], $hermano->medalla) ?></p>
            <input type="submit" value="Modificar" />
        </form>
    </body>
</html>
