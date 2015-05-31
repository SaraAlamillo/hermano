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
            'listado' => $this->pago_model->lista(['hermano.idHermano = ' => $idHermano])
        ];

        $this->load->view('pago/lista', $parametros);
    }

    public function registra($hermano = NULL, $anio = NULL, $descripcion = NULL) {
        if ($this->input->post()) {
            
        } else {
            $this->load->model('hermano_model');
            $hermanos = [];

            foreach ($this->hermano_model->lista() as $h) {
                array_push($hermanos, ['id' => $h->idHermano, 'nombre' => $h->nombre . ' ' . $h->apellido1 . ' ' . $h->apellido2]);
            }

            $this->load->model('remesa_model');

            $parametros = [
                'hermanos' => $hermanos,
                'anios' => $this->remesa_model->anios(),
                'seleccionado' => [
                    'hermano' => $hermano,
                    'anio' => $anio,
                    'descripcion' => $descripcion
                ]
            ];

            $parametros['descripciones'] = $this->remesa_model->descripciones(is_null($anio) ? $parametros['anios'][0]->anio : $anio);


            if (!is_null($hermano) and ! is_null($descripcion)) {
                $this->load->model('pago_model');
                $plazos = $this->pago_model->plazos($hermano, $descripcion);

                $parametros['seleccionado']['plazo1'] = $plazos->plazo1;
                $parametros['seleccionado']['plazo2'] = $plazos->plazo2;
            } else {
                 $parametros['seleccionado']['plazo1'] = date('d/m/Y');
                 $parametros['seleccionado']['plazo2'] = date('d/m/Y');
            }


            $this->load->helper('form');

            $this->load->view('pago/registro', $parametros);
        }
    }

}
