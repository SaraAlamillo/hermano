<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// Incluimos el archivo fpdf
require_once APPPATH . "/third_party/fpdf/fpdf.php";

//Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
class Sorteo extends FPDF {

    private $participantes;

    public function __construct($participantes) {
        parent::__construct();
        $this->AddFont('JustAnotherHand', '');
        $this->participantes = $participantes;
    }

    function Footer() {
        
    }

    function Header() {
        
    }

    public function generar() {
        
    }

}
