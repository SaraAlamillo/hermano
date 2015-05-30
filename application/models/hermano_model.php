<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Modelo para el módulo de hermanos
 *
 * @author Sara Alamillo Arroyo
 */
class Hermano_model extends CI_Model {

    public function lista($criterios = NULL) {
        if (!is_null($criterios)) {
            $this->db->where($criterios);
        }
        $consulta = $this->db->get('hermano');
        return $consulta->result();
    }

    public function listaUno($idHermano) {
        $this->db->where('idHermano', $idHermano);
        $consulta = $this->db->get('hermano');
        return $consulta->row();
    }

    public function agrega($datos) {
        $this->db->insert('hermano', $datos);
    }

    public function cambia($idHermano, $datos) {
        $this->db->update('hermano', $datos, ['idHermano' => $idHermano]);
    }

    public function elimina($idHermano) {
        $this->load->model('pago_model');
        $pagos = $this->pago_model->lista(['hermano.idHermano = ' => $idHermano]);

        foreach ($pagos as $p) {
            $this->db->where('idHermano', $idHermano);
            $this->db->where('idRemesa', $p->idRemesa);
            $this->db->delete('pago');
            $this->db->where('idCuota', $p->idCuota);
            $this->db->delete('cuota');
        }
            $this->db->where('idHermano', $idHermano);
            $this->db->delete('hermano');
        
		$this->db->select_max('idHermano');
		$consulta = $this->db->get('hermano');
		$consulta = $consulta->row();
		$idMax = $consulta->XX;
		
		for ($i = $idHermano ; $i < $idMax ; $i++) {
			$this->db->update('hermano', ['idHermano' => $i], ['idHermano' => ($i + 1)]);
		}
		
		$this->db->query->('ALTER TABLE hermano AUTO_INCREMENT = ' + $idMax);
        
    }

    public function listarTipoPago() {
        $this->load->helper('bd');
        return obtenerEnumerados('hermano', 'tipo');
    }

    public function listarTratamiento() {
        $this->load->helper('bd');
        return obtenerEnumerados('hermano', 'tratamiento');
    }

    public function listarTipoVia() {
        $this->load->helper('bd');
        return obtenerEnumerados('hermano', 'tipo_via');
    }

    public function listarFamilia() {
        $this->load->helper('bd');
        return obtenerEnumerados('hermano', 'familia');
    }

}
