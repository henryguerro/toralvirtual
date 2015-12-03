<?php

namespace Toral\Pdf;

use Illuminate\Database\Eloquent\Model;

use \Elibyy\TCPDF\TCPdf;

class Pdf extends TCPDF
{

    //Page header
    public function Header() {

        /*Color de texto y las lineas */
        $this->SetTextColor(0,0,0);
        $this->SetDrawColor(0,0,0);
        /* definimos variables con titulo y subtitulo */
        //$titulo=;
        $fecha=date('d-m-Y');
        /* posicionamos el punto de insercion 2mm. debajo del borde del papel */
        $this->SetY(10);
        // Logo
        $image_file = K_PATH_IMAGES.'LOGO-BANDERA.jpg';
        $this->Image($image_file, 7,5,25, '', 'JPG', '', 'top-left', false, 300, '', false, false, 0, false, false, false);
        /* Titulo,  con fuente que se establezca por el método opcion SetHeaderFont */
        $this->MultiCell(0, 0,$this->encabezado, 0, 'C', 0, 0, '', '', true, 0, false, true, 0, 'M');
        // Logo Derecho
        $this->Image($image_file, 180, 5, 25, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Ln(20);
        $this->SetFont('helvetica', 'N', 8);
        $this->Cell(0, 0,$fecha,0,1,'R');
        //$this->Ln(1);
        $this->SetFont('helvetica', 'B', 11);
        $this->Cell(0, 0,$this->nombreReporte,0,1,'C');
        /*Linea debajo del encabezado */
        $this->Line(5,37,210,37);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
