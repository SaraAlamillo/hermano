<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Remesa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('remesa_model');
    }

    public function index() {
        $this->lista();
    }

    public function lista() {
        $parametros = [
            'listado' => $this->remesa_model->listar(),
            "mensaje" => $this->session->flashdata("mensaje")
        ];

        $this->load->view('remesa/lista', $parametros);
    }

    public function insertar() {
        if ($this->input->post()) {
            $this->remesa_model->alta($this->input->post());
            $this->session->set_flashdata("mensaje", 'Se ha añadido la remesa correctamente');
            redirect(site_url("remesa"));
        } else {
            $this->load->view('remesa/nueva');
        }
    }

    public function cambiar($id) {
        if ($this->input->post()) {
            $this->remesa_model->cambio($this->input->post(), $id);
            $this->session->set_flashdata("mensaje", 'Se han realizado las cambios correctamente');
            redirect(site_url("remesa"));
        } else {
            $parametros = [
                'remesa' => $this->remesa_model->listaUno($id)
            ];
            $this->load->view('remesa/cambio', $parametros);
        }
    }
}
    