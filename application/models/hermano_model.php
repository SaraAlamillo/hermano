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
