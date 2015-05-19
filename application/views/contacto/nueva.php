<!DOCTYPE html>
<html>
    <head>
        <title>Crear un contacto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= anchor(site_url('contacto'), 'Volver al listado') ?>
        <form action="" method="POST">
            <p>Empresa: <input type="text" name="nombre_empresa" /></p>
            <p>Tratamiento: <?=  crearDesplegable('tratamiento', $lisTratamiento, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?></p>
            <p>Nombre: <input type="text" name="nombre" /></p>
            <p>Primer apellido: <input type="text" name="apellido1" /></p>
            <p>Segundo apellido: <input type="text" name="apellido2" /></p>
            <p>CIF: <input type="text" name="cif" /></p>
            <p>Tipo de vía: <?=  crearDesplegable('tipo_via', $lisTipoVia, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?></p>
            <p>Dirección: <input type="text" name="direccion" /></p>
            <p>Número: <input type="text" name="numero" /></p>
            <p>Piso: <input type="text" name="piso" /></p>
            <p>Puerta: <input type="text" name="puerta" /></p>
            <p>Código postal: <input type="text" name="codigo_postal" /></p>
            <p>Población: <input type="text" name="poblacion" /></p>
            <p>Móvil: <input type="text" name="movil" /></p>
            <p>Fijo: <input type="text" name="fijo" /></p>
            <p>Email: <input type="text" name="email" /></p>
            <p>Twitter: <input type="text" name="twitter" /></p>
            <p>Facebook: <input type="text" name="facebook" /></p>
            <p>Instagram: <input type="text" name="instagram" /></p>
            <p>Tipo: <?=  crearDesplegable('tipo', $lisTipo, '', ['tipo' => '', 'idTipo_Contacto' => ''], ['desc' => 'tipo', 'valor' => 'idTipo_Contacto'], TRUE) ?></p>
            <p>Provincia: <?=  crearDesplegable('tipo', $lisProvincia, '', ['nombre' => '', 'idProvincia' => ''], ['desc' => 'nombre', 'valor' => 'idProvincia'], TRUE) ?></p>
            <input type="submit" value="Añadir" />
        </form>
    </body>
</html>
