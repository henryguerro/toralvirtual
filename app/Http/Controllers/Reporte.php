<?php

namespace Toral\Http\Controllers;


use Elibyy\TCPDF\TCPDFHelper;
use Toral\Pdf\Pdf;
use Illuminate\Http\Request;

use Toral\Http\Requests;
use Toral\Http\Controllers\Controller;

class Reporte extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       return  view('reportes.instalacion');
    }

    public function createPdf()
    {


        $pdf_settings = \Config::get('laravel-tcpdf');
// set document information
        $pdf = new TCPDFHelper('L','mm','ANSI_A', true, 'UTF-8', false);

        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        $pdf->AddPage();
        $pdf->MultiCell(0, 0,"Coordinación Electoral\nParlamentarias 2015", 0, 'C', 0, 0, '', '', true, 0, false, true, 0, 'M');
        $pdf->Ln(20);
        $pdf->SetFont('helvetica', 'N', 8);
        $pdf->Cell(0, 0,date('d-m-Y'),0,1,'R');
        //$this->Ln(1);
        $pdf->SetFont('helvetica', 'B', 11);
        $pdf->Cell(0, 0,'Presencia y reportes en los Centros de Votación',0,1,'C');
        /*Linea debajo del encabezado */
        $pdf->Line(5,40,250,40);
        $pdf->Ln(5);
        $pdf->writeHTML(view('reportes.instalacion')->render());

        $filename = 'prueba.pdf';
        $pdf->output($filename, 'I');
        //return Response::download($filename);
    }

    private function consultarMunicipios()
    {
        return "http://laravel.io/forum/03-19-2014-laravel-mysql-joins";
    }
}
