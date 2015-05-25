<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hermano extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('hermano_model');
    }

    public function index() {
        $this->lista();
    }

    public function lista() {
        $this->load->model('vivienda_model');
        
        $parametros = [
            'listado' => $this->hermano_model->lista(),
            "mensaje" => $this->session->flashdata("mensaje")
        ];
        
        foreach ($parametros['listado'] as &$l) {
            $l->vivienda = $this->vivienda_model->listarUno($l->vivienda);
        }
        
        $this->load->view('hermano/lista', $parametros);
    }

    public function detalle($idHermano) {
        $this->load->model('vivienda_model');
        
        $parametros = [
            'hermano' => $this->hermano_model->listaUno($idHermano)
        ];
        
        $parametros['hermano']->vivienda = $this->vivienda_model->listarUno($parametros['hermano']->vivienda);
        
        $this->load->view('hermano/detalle', $parametros);
    }

    public function cambio($idHermano) {
        if ($this->input->post()) {
            $this->hermano_model->cambia($idHermano, $this->input->post());
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

            $this->load->view('hermano/cambio', $parametros);
        }
    }

    public function nuevo() {
        if ($this->input->post()) {
            $this->hermano_model->agrega($this->input->post());
            $this->session->set_flashdata("mensaje", 'Se ha añadido la vivienda correctamente');
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
            
            $this->load->view('hermano/nueva', $parametros);
        }
    }

    public function elimina($idHermano) {
        $this->hermano_model->elimina($idHermano);
         redirect(site_url("hermano"));
    }

}