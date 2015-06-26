<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    require_once APPPATH."/third_party/fpdf/fpdf.php";
 
    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdf extends FPDF {
        public function __construct() {
            parent::__construct();
        }
        // El encabezado del PDF
        public function Header(){
            $this->Image('img/pool.jpg',12,10,24);
            $this->SetFont('Arial','B',13);
            $this->Cell(30);
            $this->Cell(120,10,'SnackPool',0,0,'C');
            $this->Ln('8');
            $this->SetFont('Arial','B',8);
            $this->Cell(30);
            $this->Cell(120,10,'Bar & Snack',0,0,'C');
            $this->Ln(30);
       }
       // El pie del pdf
       public function Footer(){
           $this->SetY(-15);
           $this->SetFont('Arial','I',8);
           $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
      }
    }
?>;