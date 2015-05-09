<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Modelo para el módulo de viviendas
 *
 * @author Sara Alamillo Arroyo
 */
class Vivienda_model extends CI_Model {

    function alta($datos) {
        $this->db->insert('vivienda', $datos);
    }

    function cambio($idVivienda, $observaciones) {
        $this->db->update('vivienda', ['Observaciones' => $observaciones], ['idVivienda' => $idVivienda]);
    }

    function listar() {
        return $this->db->get('vivienda');
    }

}
