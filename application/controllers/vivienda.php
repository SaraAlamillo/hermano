<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vivienda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('vivienda_model');
    }

    public function index() {
        $this->lista();
    }

    public function lista() {
        $parametros = [
            'listado' => $this->vivienda_model->listarTodo(),
            "mensaje" => $this->session->flashdata("mensaje")
        ];

        $this->load->view('vivienda/lista', $parametros);
    }

    public function cambio($idVivienda) {
        if ($this->input->post()) {
           $this->vivienda_model->cambio($idVivienda, $this->input->post('Observaciones'));
            $this->session->set_flashdata("mensaje", 'Se han realizado las cambios correctamente');
            redirect(site_url("vivienda"));
        } else {
            $parametros = [
                'vivienda' => $this->vivienda_model->listarUno($idVivienda)
            ];

            $this->load->view('vivienda/cambio', $parametros);
        }
    }
    
    public function nueva() {
        if ($this->input->post()) {
           $this->vivienda_model->alta($this->input->post());
            $this->session->set_flashdata("mensaje", 'Se ha añadido la vivienda correctamente');
            redirect(site_url("vivienda"));
        } else {
            $this->load->view('vivienda/nueva');
        }
    }

}
