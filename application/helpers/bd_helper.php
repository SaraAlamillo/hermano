<?php

if (!function_exists('obtenerEnumerados')) {

    function obtenerEnumerados($tabla, $campo) {
        $CI =& get_instance();
        $consulta = $CI->db->query("SHOW COLUMNS FROM $tabla LIKE '$campo'");
        $resultado = $consulta->row();
        $valores = substr($resultado->Type, strpos($resultado->Type, '(') + 1, strpos($resultado->Type, ')') - (strpos($resultado->Type, '(') + 1));
        $valores = str_replace("'", "", $valores);
        return explode(',', $valores);
    }

}

