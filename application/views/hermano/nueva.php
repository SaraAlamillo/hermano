<?= anchor(site_url('contacto'), 'Volver al listado') ?>
<form action="" method="POST" id="contact-form">
    <div class="text-fields">
        <fieldset>
            <legend>Vivienda</legend> 
            <div class="float-input">
                <?= crearDesplegable('vivienda', $viviendas, '', ['nombre' => '', 'id' => '']) ?>
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Tratamiento</legend> 
            <div class="float-input">
                <?= crearDesplegable('tratamiento', $lisTratamiento, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?>
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Nombre</legend> 
            <div class="float-input">
                <input type="text" name="nombre" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Primer apellido</legend> 
            <div class="float-input">
                <input type="text" name="apellido1" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Segundo apellido</legend> 
            <div class="float-input">
                <input type="text" name="apellido2" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>DNI</legend> 
            <div class="float-input">
                <input type="text" name="dni" /></p>
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Tipo de vía</legend> 
            <div class="float-input">
                <?= crearDesplegable('tipo_via', $lisTipoVia, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?>
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Dirección</legend> 
            <div class="float-input">
                <input type="text" name="direccion" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Número</legend> 
            <div class="float-input">
                <input type="text" name="numero" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Piso</legend> 
            <div class="float-input">
                <input type="text" name="piso" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Puerta</legend> 
            <div class="float-input">
                <input type="text" name="puerta" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Código postal</legend> 
            <div class="float-input">
                <input type="text" name="codigo_postal" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Población</legend> 
            <div class="float-input">
                <input type="text" name="poblacion" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Móvil</legend> 
            <div class="float-input">
                <input type="text" name="movil" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Fijo</legend> 
            <div class="float-input">
                <input type="text" name="fijo" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Email</legend> 
            <div class="float-input">
                <input type="text" name="email" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Twitter</legend> 
            <div class="float-input">
                <input type="text" name="twitter" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Facebook</legend> 
            <div class="float-input">
                <input type="text" name="facebook" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Instagram</legend> 
            <div class="float-input">
                <input type="text" name="instagram" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Provincia</legend> 
            <div class="float-input">
                <?= crearDesplegable('provincia', $lisProvincia, '', ['nombre' => '', 'idProvincia' => ''], ['desc' => 'nombre', 'valor' => 'idProvincia'], TRUE) ?>
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Tipo de pago</legend> 
            <div class="float-input">
                <?= crearDesplegable('tipo', $lisTipoPago, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?>
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Cuenta corriente</legend> 
            <div class="float-input">
                <input type="text" name="cuenta_corriente" />
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Familia</legend> 
            <div class="float-input">
                <?= crearDesplegable('familia', $lisFamilia, '', ['nombre' => '', 'id' => ''], ['desc' => 'nombre', 'valor' => 'id']) ?>
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Medalla</legend> 
            <div class="float-input">
                <?= crearListaRadio('medalla', [['nombre' => 'Si', 'id' => '1'], ['nombre' => 'No', 'id' => '0']]) ?>
                <span><i class="fa fa-user"></i></span>
            </div>
        </fieldset>
    </div>
    <input type="submit" value="Añadir" />
</form>
