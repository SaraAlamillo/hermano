<?= anchor(site_url('contacto'), 'Volver al listado') ?>
<form action="" method="POST">
    <p>Empresa: <input type="text" name="nombre_empresa" value="<?= $contacto->nombre_empresa ?>" /></p>
    <p>Tratamiento: <?= crearDesplegable('tratamiento', $lisTratamiento, $contacto->tratamiento, NULL, ['desc' => 'nombre', 'valor' => 'id']) ?></p>
    <p>Nombre: <input type="text" name="nombre" value="<?= $contacto->nombre ?>" /></p>
    <p>Primer apellido: <input type="text" name="apellido1" value="<?= $contacto->apellido1 ?>" /></p>
    <p>Segundo apellido: <input type="text" name="apellido2" value="<?= $contacto->apellido2 ?>" /></p>
    <p>CIF: <input type="text" name="cif" value="<?= $contacto->cif ?>" /></p>
    <p>Tipo de vía: <?= crearDesplegable('tipo_via', $lisTipoVia, $contacto->tipo_via, NULL, ['desc' => 'nombre', 'valor' => 'id']) ?></p>
    <p>Dirección: <input type="text" name="direccion" value="<?= $contacto->direccion ?>" /></p>
    <p>Número: <input type="text" name="numero" value="<?= $contacto->numero ?>" /></p>
    <p>Piso: <input type="text" name="piso" value="<?= $contacto->piso ?>" /></p>
    <p>Puerta: <input type="text" name="puerta" value="<?= $contacto->puerta ?>" /></p>
    <p>Código postal: <input type="text" name="codigo_postal" value="<?= $contacto->codigo_postal ?>" /></p>
    <p>Población: <input type="text" name="poblacion" value="<?= $contacto->poblacion ?>" /></p>
    <p>Móvil: <input type="text" name="movil" value="<?= $contacto->movil ?>" /></p>
    <p>Fijo: <input type="text" name="fijo" value="<?= $contacto->fijo ?>" /></p>
    <p>Email: <input type="text" name="email" value="<?= $contacto->email ?>" /></p>
    <p>Twitter: <input type="text" name="twitter" value="<?= $contacto->twitter ?>" /></p>
    <p>Facebook: <input type="text" name="facebook" value="<?= $contacto->facebook ?>" /></p>
    <p>Instagram: <input type="text" name="instagram" value="<?= $contacto->instagram ?>" /></p>
    <p>Tipo: <?= crearDesplegable('tipo', $lisTipo, $contacto->tipo, NULL, ['desc' => 'tipo', 'valor' => 'idTipo_Contacto'], TRUE) ?></p>
    <p>Provincia: <?= crearDesplegable('provincia', $lisProvincia, $contacto->provincia, NULL, ['desc' => 'nombre', 'valor' => 'idProvincia'], TRUE) ?></p>
    <input type="submit" value="Modificar" />
</form>
