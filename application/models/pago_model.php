<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Modelo para el módulo de pagos
 *
 * @author Sara Alamillo Arroyo
 */
class Pago_model extends CI_Model {
    public function lista(){
        $this->db->select('remesa.*, cuota.*, hermano.idHermano, hermano.nombre, hermano.apellido1, hermano.apellido2');
        $this->db->from('remesa');
        $this->db->join('pago', 'remesa.idRemesa = pago.idRemesa');
        $this->db->join('cuota', 'pago.idCuota = cuota.idCuota');
        $this->db->join('hermano', 'hermano.idHermano = pago.idHermano');
        $consulta = $this->db->get();
        return $consulta->result();
    }
    public function listaUno(){       
    }
    public function agrega($datos){
        $this->db->insert('pago', $datos);
    }
    public function cambia(){
        
    }
    public function elimina(){
        
    }
}
