<?php

if (!function_exists('crearDesplegable')) {

    function crearDesplegable(
    $nombre, $datos, $valorPorDefecto = NULL, $nullValue = NULL, $camposDatos = ['desc' => 'nombre', 'valor' => 'id'], $objeto = FALSE) {
        $html = "<select name='$nombre'>\n";
        if (is_array($nullValue)) {
            if ($nullValue[$camposDatos['valor']] == $valorPorDefecto) {
                $html .= "<option value='{$nullValue[$camposDatos['valor']]}' selected='selected'>{$nullValue[$camposDatos['desc']]}</option>\n";
            } else {
                $html .= "<option value='{$nullValue[$camposDatos['valor']]}'>{$nullValue[$camposDatos['desc']]}</option>\n";
            }
        }
        if ($objeto) {
            foreach ($datos as $d) {
                if ($d->$camposDatos['valor'] == $valorPorDefecto) {
                    $html .= "<option value='{$d->$camposDatos['valor']}' selected='selected'>{$d->$camposDatos['desc']}</option>\n";
                } else {
                    $html .= "<option value='{$d->$camposDatos['valor']}'>{$d->$camposDatos['desc']}</option>\n";
                }
            }
        } else {
            foreach ($datos as $d) {
                if ($d[$camposDatos['valor']] == $valorPorDefecto) {
                    $html .= "<option value='{$d[$camposDatos['valor']]}' selected='selected'>{$d[$camposDatos['desc']]}</option>\n";
                } else {
                    $html .= "<option value='{$d[$camposDatos['valor']]}'>{$d[$camposDatos['desc']]}</option>\n";
                }
            }
        }
        $html .= "</select>\n";
        return $html;
    }

}

