<?= anchor(site_url('contacto'), 'Volver al listado') ?>
<form action="" method="POST">
    <p>Vivienda: <?= crearDesplegable('vivienda', $viviendas, '', ['nombre' => '', 'id' => '']) ?></p>
    <p>Tratamiento: <?= crearDesplegable('tratamiento', $lisTratamiento, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?></p>
    <p>Nombre: <input type="text" name="nombre" /></p>
    <p>Primer apellido: <input type="text" name="apellido1" /></p>
    <p>Segundo apellido: <input type="text" name="apellido2" /></p>
    <p>DNI: <input type="text" name="dni" /></p>
    <p>Tipo de vía: <?= crearDesplegable('tipo_via', $lisTipoVia, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?></p>
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
    <p>Provincia: <?= crearDesplegable('provincia', $lisProvincia, '', ['nombre' => '', 'idProvincia' => ''], ['desc' => 'nombre', 'valor' => 'idProvincia'], TRUE) ?></p>
    <p>Tipo de pago: <?= crearDesplegable('tipo', $lisTipoPago, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?></p>
    <p>Cuenta corriente: <input type="text" name="cuenta_corriente" /></p>
    <p>Familia: <?= crearDesplegable('familia', $lisFamilia, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?></p>
    <p>Medalla: <?= crearListaRadio('medalla', [['nombre' => 'Si', 'id' => '1'], ['nombre' => 'No', 'id' => '0']]) ?></p>
    <input type="submit" value="Añadir" />
</form>
