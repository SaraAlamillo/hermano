<!DOCTYPE html>
<html>
    <head>
        <title>Modificar una vivienda</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= anchor(site_url('vivienda'), 'Volver al listado') ?>
        <form action="" method="POST">
            Barriada: <input type="text" value="<?= $vivienda->Barriada ?>" readonly="readonly" /><br />
            Línea: <input type="text" value="<?= $vivienda->Linea ?>" readonly="readonly" /><br />
            Número: <input type="text" value="<?= $vivienda->Numero ?>" readonly="readonly" /><br />
            Observaciones : <textarea name="Observaciones"><?= $vivienda->Observaciones ?></textarea><br />
            <input type="hidden" value="<?= $vivienda->idVivienda ?>" name="idVivienda" />
            <input type="submit" value="Modificar" />
        </form>
    </body>
</html>
