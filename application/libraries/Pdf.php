<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once('pdf/fpdf.php');

class Pdf extends FPDF {

    function Header() {
        $this->Image(base_url() . 'assets/layouts/layout/img/cabecera.png', 30, 1, 150);
        $this->SetFont('Arial', 'B', 12);
        // Salto de línea
        $this->Ln(30);
    }

    function Footer() {
        $this->SetY(-10);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

}
