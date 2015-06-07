<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once __DIR__ . '/main.php';

class Pago extends Main {

    public function __construct() {
        parent::__construct();
        $this->load->model('pago_model');
    }

    public function lista($idHermano) {
        $parametros = [
            'listado' => $this->pago_model->lista(['hermano.idHermano = ' => $idHermano])
        ];

        $this->vista($this->load->view('pago/lista', $parametros, TRUE), 'hermano');
    }

    public function registra($hermano = NULL, $anio = NULL, $descripcion = NULL) {
    echo '<pre>';
print_r($this->pago_model->plazos($hermano, $descripcion));
echo '</pre>';
        /*if ($this->input->post()) {
            
        } else {
            $this->load->model('hermano_model');
            $hermanos = [];

            foreach ($this->hermano_model->lista() as $h) {
                array_push(
					$hermanos, 
					[
						'id' => $h->idHermano, 
						'nombre' => $h->nombre . ' ' . $h->apellido1 . ' ' . $h->apellido2
					]
				);
            }

            $this->load->model('remesa_model');

            $parametros = [
                'hermanos' => $hermanos,
                'anios' => $this->remesa_model->anios(),
				'descripciones' => $this->remesa_model->descripciones(is_null($anio) ? date('Y') : $anio),
                'seleccionado' => [
                    'hermano' => $hermano,
                    'anio' => $anio,
                    'descripcion' => $descripcion
                ]
            ];


            if (!is_null($hermano) and ! is_null($descripcion)) {
                $this->load->model('pago_model');
                $plazos = $this->pago_model->plazos($hermano, $descripcion);

                $parametros['seleccionado']['cuota1'] = $plazos->cuota1;
                $parametros['seleccionado']['cuota2'] = $plazos->cuota2;
            } else {
                 $parametros['seleccionado']['cuota1'] = date('d/m/Y');
                 $parametros['seleccionado']['cuota2'] = date('d/m/Y');
            }


            $this->load->helper('form');

            $this->vista($this->load->view('pago/registro', $parametros, TRUE), 'registro');
        }*/
    }

}
