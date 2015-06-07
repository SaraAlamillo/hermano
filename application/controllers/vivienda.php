<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once __DIR__ . '/main.php';

class Vivienda extends Main {

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

        $this->vista($this->load->view('vivienda/lista', $parametros, TRUE), 'vivienda');
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

            $this->vista($this->load->view('vivienda/cambio', $parametros, TRUE), 'vivienda');
        }
    }

    public function nueva() {
        if ($this->input->post()) {
            $this->vivienda_model->alta($this->input->post());
            $this->session->set_flashdata("mensaje", 'Se ha añadido la vivienda correctamente');
            redirect(site_url("vivienda"));
        } else {
            $this->load->helper('form');

            $parametros = [
                'lisBarriada' => $this->vivienda_model->listarBarriada(),
                'lisLinea' => $this->vivienda_model->listarLinea(),
                'lisNumero' => $this->vivienda_model->listarNumero()
            ];

            $this->vista($this->load->view('vivienda/nueva', $parametros, TRUE), 'vivienda');
        }
    }

}
