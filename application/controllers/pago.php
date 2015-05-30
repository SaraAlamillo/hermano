<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pago extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('pago_model');
    }
    
    public function lista($idHermano) {
        $parametros = [
            'listado' => $this->pago_model->lista(['hermano.idHermano = ' => $idHermano]),
            "mensaje" => $this->session->flashdata("mensaje")
        ];
        
        $this->load->view('pago/lista', $parametros);
    }
    
    public function nuevo(){
        
    }
    
    public function cambio($idHermano, $idRemesa, $idCuota){
        
    }
    
    public function elimina($idHermano, $idRemesa, $idCuota){
        
    }
}