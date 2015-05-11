<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contacto extends CI_Controller {

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

        $this->load->view('contacto/lista', $parametros);
    }

    public function cambio($idContacto) {
        if ($this->input->post()) {
           $this->vivienda_model->cambio($idContacto, $this->input->post());
            $this->session->set_flashdata("mensaje", 'Se han realizado las cambios correctamente');
            redirect(site_url("contacto"));
        } else {
            $parametros = [
                'contacto' => $this->contacto_model->listarUno($idContacto)
            ];

            $this->load->view('contacto/cambio', $parametros);
        }
    }
    
    public function nueva() {
        if ($this->input->post()) {
           $this->contacto_model->alta($this->input->post());
            $this->session->set_flashdata("mensaje", 'Se ha añadido la vivienda correctamente');
            redirect(site_url("contacto"));
        } else {
            $this->load->view('contacto/nueva');
        }
    }
    
    public function detalle($idContacto) {
        $parametros = [
            'contacto' => $this->contacto_model->listarUno($idContacto)
        ];

        $this->load->view('contacto/detalle', $parametros);
    }
    
    public function eliminar($idContacto) {
        
    }

}