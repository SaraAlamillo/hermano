<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Remesa_model extends CI_Model {

    public function alta($datos) {
        $this->db->insert('remesa', $datos);
    }

    public function cambio($datos, $id) {
        $this->db->update('remesa', $datos, ['idRemesa' => $id]);
    }

    public function listar() {
        $consulta = $this->db->get('remesa');
        return $consulta->result();
    }

    public function listaUno($id) {
        $this->db->where('idRemesa', $id);
        $consulta = $this->db->get('remesa');
        return $consulta->row();
    }
	
	public function tieneCuotas($idRemesa) {
		$this->db->where('idRemesa', $idRemesa);
		$this->db->from('pago');
		$this->db->join('cuota', 'pago.idCuota = cuota.idCuota');
		
		if ($this->db->count_all_results() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function elimina($idRemesa) {
		$this->db->delete('remesa', ['idRemesa' => $idRemesa]);
	}

}
