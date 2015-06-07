<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once __DIR__ . '/main.php';

class Hermano extends Main {

    public function __construct() {
        parent::__construct();
        $this->load->model('hermano_model');
    }

    public function index() {
        $this->lista();
    }

    public function lista() {
        $parametros = [
            'listado' => $this->hermano_model->lista(),
            "mensaje" => $this->session->flashdata("mensaje")
        ];

        $this->vista($this->load->view('hermano/lista', $parametros, TRUE), 'hermano');
    }

    public function detalle($idHermano) {
        $this->load->model('vivienda_model');

        $parametros = [
            'hermano' => $this->hermano_model->listaUno($idHermano)
        ];

        $parametros['hermano']->vivienda = $this->vivienda_model->listarUno($parametros['hermano']->vivienda);

        $this->vista($this->load->view('hermano/detalle', $parametros, TRUE), 'hermano');
    }

    public function cambio($idHermano) {
        if ($this->input->post()) {
            $this->load->helper('datos');
            
            $this->hermano_model->cambia($idHermano, quitaDatoVacio($this->input->post()));
            $this->session->set_flashdata("mensaje", 'Se han realizado las cambios correctamente');
            redirect(site_url("hermano"));
        } else {
            $this->load->model('vivienda_model');
            $this->load->model('provincia_model');

            $viviendas = $this->vivienda_model->listarTodo();
            $parametros['viviendas'] = [];

            foreach ($viviendas as $v) {
                $aux = [
                    'id' => $v->idVivienda,
                    'nombre' => 'Barriada: ' . $v->Barriada . ' - Línea: ' . $v->Linea . ' - Número: ' . $v->Numero
                ];
                array_push($parametros['viviendas'], $aux);
            }

            $parametros['hermano'] = $this->hermano_model->listaUno($idHermano);
            $parametros['hermano']->provincia = $this->provincia_model->getNombre($parametros['hermano']->provincia);
            $parametros['lisTipoPago'] = $this->hermano_model->listarTipoPago();
            $parametros['lisProvincia'] = $this->provincia_model->listar();
            $parametros['lisTratamiento'] = $this->hermano_model->listarTratamiento();
            $parametros['lisTipoVia'] = $this->hermano_model->listarTipoVia();
            $parametros['lisFamilia'] = $this->hermano_model->listarFamilia();

            $this->load->helper('form');

            $this->vista($this->load->view('hermano/cambio', $parametros, TRUE), 'hermano');
        }
    }

    public function nuevo() {
        if ($this->input->post()) {
            $this->load->helper('datos');
            
            $this->hermano_model->agrega(quitaDatoVacio($this->input->post()));
            $this->session->set_flashdata("mensaje", 'Se ha añadido el hermano correctamente');
            redirect(site_url("hermano"));
        } else {
            $this->load->model('vivienda_model');
            $this->load->model('provincia_model');

            $parametros = [
                'lisTratamiento' => $this->hermano_model->listarTratamiento(),
                'lisTipoVia' => $this->hermano_model->listarTipoVia(),
                'lisTipoPago' => $this->hermano_model->listarTipoPago(),
                'lisProvincia' => $this->provincia_model->listar(),
                'lisFamilia' => $this->hermano_model->listarFamilia()
            ];

            $viviendas = $this->vivienda_model->listarTodo();
            $parametros['viviendas'] = [];

            foreach ($viviendas as $v) {
                $aux = [
                    'id' => $v->idVivienda,
                    'nombre' => 'Barriada: ' . $v->Barriada . ' - Línea: ' . $v->Linea . ' - Número: ' . $v->Numero
                ];
                array_push($parametros['viviendas'], $aux);
            }

            $this->load->helper('form');

            $this->vista($this->load->view('hermano/nueva', $parametros, TRUE), 'hermano');
        }
    }

    public function elimina($idHermano) {
        if ($this->input->post()) {
            if ($this->input->post('eliminar') == 'Si') {
                echo $this->hermano_model->elimina($idHermano);
                $this->session->set_flashdata("mensaje", 'Se ha eliminado el hermano correctamente');
                redirect(site_url("hermano"));
            } else {
                redirect(site_url("hermano"));
            }
        } else {
            $parametros = [
                'datos' => $this->hermano_model->listaUno($idHermano)
            ];
            $this->vista($this->load->view('confirmar_eliminacion', $parametros, TRUE), 'hermano');
        }
    }

    public function medallas() {
        if ($this->input->post()) {
            $this->load->library('sorteo');
            $this->sorteo->generar($this->input->post('hermanos'));
        } else {
            $parametros = [
                'listado' => $this->hermano_model->lista(['medalla = ' => 0])
            ];

            $this->vista($this->load->view('hermano/sorteo', $parametros, TRUE), 'medalla');
        }
    }

}
