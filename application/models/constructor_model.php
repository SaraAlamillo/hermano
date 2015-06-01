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
    
    public function consulta($campos) {
        $this->db->distinct();
        $this->db->select($campos);
        $this->db->from('remesa');
        $this->db->join('pago', 'remesa.idRemesa = pago.idRemesa', 'full');
        $this->db->join('hermano', 'hermano.idHermano = pago.idHermano', 'full');
        $consulta = $this->db->get();
        
        return $consulta->result();
    }

}
