<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once __DIR__ . '/main.php';

class Remesa extends Main {

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

        $this->vista($this->load->view('remesa/lista', $parametros, TRUE), 'remesa');
    }

    public function insertar() {
        if ($this->input->post()) {
            $this->remesa_model->alta($this->input->post());
            $this->session->set_flashdata("mensaje", 'Se ha añadido la remesa correctamente');
            redirect(site_url("remesa"));
        } else {
            $this->vista($this->load->view('remesa/nueva', NULL, TRUE), 'remesa');
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
            $this->vista($this->load->view('remesa/cambio', $parametros, TRUE), 'remesa');
        }
    }

    public function elimina($idRemesa) {
        if ($this->remesa_model->tieneCuotas($idRemesa)) {
            $this->session->set_flashdata("mensaje", 'No se puede eliminar una remesa con cuotas asociadas');
            redirect(site_url("remesa"));
        } else {
            if ($this->input->post()) {
                if ($this->input->post('eliminar') == 'Si') {
                    $this->remesa_model->elimina($idRemesa);
                    $this->session->set_flashdata("mensaje", 'Se ha eliminado la remesa correctamente');
                    redirect(site_url("remesa"));
                } else {
                    redirect(site_url("remesa"));
                }
            } else {
                $parametros = [
                    'datos' => $this->remesa_model->listaUno($idRemesa)
                ];
                $this->vista($this->load->view('confirmar_eliminacion', $parametros, TRUE), 'remesa');
            }
        }
    }

}
