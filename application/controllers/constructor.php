<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Constructor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('constructor_model');
    }

    public function index() {
        echo '<pre>';
        print_r($this->constructor_model->obtenerCampos('cuota'));
        echo '</pre>';
    }

    public function constructor() {
        if ($this->input->post()) {
            if (! is_null($this->input->post('hermano'))) {
                $campos['hermano'] = implode(', ', $this->input->post('hermano'));
            }
            if (! is_null($this->input->post('cuota'))) {
                 $campos['cuota'] = implode(', ', $this->input->post('cuota'));
            }
            if (! is_null($this->input->post('remesa'))) {
                 $campos['remesa'] = implode(',', $this->input->post('remesa'));
            }
            
            $campos = implode(', ', $campos);

            $parametros = [
                'resultado' => $this->constructor_model->consulta($campos)
            ];

            $this->load->view('constructor/resultados', $parametros);
        } else {
            $parametros = [
                'campos' => [
                    'hermano' => $this->constructor_model->obtenerCampos('hermano'),
                    'cuota' => $this->constructor_model->obtenerCampos('cuota'),
                    'remesa' => $this->constructor_model->obtenerCampos('remesa')
                ]
            ];

            $this->load->view('constructor/constructor', $parametros);
        }
    }

}
