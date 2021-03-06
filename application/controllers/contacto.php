<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once __DIR__ . '/main.php';

class Contacto extends Main {

    public function __construct() {
        parent::__construct();
        $this->load->model('contacto_model');
    }

    public function index() {
        $this->lista();
    }

    public function lista() {
        $parametros = [
            'listado' => $this->contacto_model->listarTodo(),
            "mensaje" => $this->session->flashdata("mensaje")
        ];

        $this->vista($this->load->view('contacto/lista', $parametros, TRUE), 'contacto');
    }

    public function cambio($idContacto) {
        if ($this->input->post()) {
            $this->load->helper('datos');
            
            $this->contacto_model->cambio($idContacto, quitaDatoVacio($this->input->post()));
            $this->session->set_flashdata("mensaje", 'Se han realizado las cambios correctamente');
            redirect(site_url("contacto"));
        } else {
            $this->load->model('provincia_model');

            $parametros = [
                'lisTratamiento' => $this->contacto_model->listarTratamiento(),
                'lisTipoVia' => $this->contacto_model->listarTipoVia(),
                'lisTipo' => $this->contacto_model->listaTipo(),
                'lisProvincia' => $this->provincia_model->listar(),
                'contacto' => $this->contacto_model->listarUno($idContacto)
            ];

            $this->load->helper('form');

            $this->vista($this->load->view('contacto/cambio', $parametros, TRUE), 'contacto');
        }
    }

    public function nuevo() {
        if ($this->input->post()) {
            $this->load->helper('datos');
            
            $this->contacto_model->alta(quitaDatoVacio($this->input->post()));
            $this->session->set_flashdata("mensaje", 'Se ha añadido la vivienda correctamente');
            redirect(site_url("contacto"));
        } else {
            $this->load->model('provincia_model');

            $parametros = [
                'lisTratamiento' => $this->contacto_model->listarTratamiento(),
                'lisTipoVia' => $this->contacto_model->listarTipoVia(),
                'lisTipo' => $this->contacto_model->listaTipo(),
                'lisProvincia' => $this->provincia_model->listar()
            ];

            $this->load->helper('form');

            $this->vista($this->load->view('contacto/nueva', $parametros, TRUE), 'contacto');
        }
    }

    public function detalle($idContacto) {
        $this->load->model('provincia_model');

        $parametros = [
            'contacto' => $this->contacto_model->listarUno($idContacto)
        ];

        $parametros['contacto']->tipo = $this->contacto_model->nombreTipo($parametros['contacto']->tipo);
        $parametros['contacto']->provincia = $this->provincia_model->getNombre($parametros['contacto']->provincia);

        $this->vista($this->load->view('contacto/detalle', $parametros, TRUE), 'contacto');
    }

    public function eliminar($idContacto) {
        if ($this->input->post()) {
            if ($this->input->post('eliminar') == 'Si') {
                $this->contacto_model->eliminar($idContacto);
                $this->session->set_flashdata("mensaje", 'Se ha eliminado el contacto correctamente');
                redirect(site_url("contacto"));
            } else {
                redirect(site_url("contacto"));
            }
        } else {
            $parametros = [
                'datos' => $this->contacto_model->listarUno($idContacto)
            ];
            $this->vista($this->load->view('confirmar_eliminacion', $parametros, TRUE), 'contacto');
        }
    }

}
