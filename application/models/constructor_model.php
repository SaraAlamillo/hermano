<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Constructor_model extends CI_Model {

    public function obtenerCampos($tabla) {
        $consulta = $this->db->query('SHOW COLUMNS FROM hermano.' . $tabla);
        $campos = [];
        
        foreach ($consulta->result() as $r) {
            array_push($campos, $r->Field);
        }
        
        return $campos;
    }

}
