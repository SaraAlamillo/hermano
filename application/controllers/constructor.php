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
}