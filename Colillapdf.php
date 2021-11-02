<?php
require_once 'app/models/fpdf.php';
//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,$_GET['id']);
//$pdf->Output();



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(50,10,'Colilla de pago',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}






// Creación del objeto de la clase heredada
$pdf = new PDF('P', 'mm', array(160,160));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);


//Titulos y horas
$pdf->Cell(52,10,utf8_decode('Hora Ordinaria Diurna'),1,0,'C');
$pdf->Cell(10,10,utf8_decode($_GET['HoraOrdinariaDiurna']),1,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['ValorHoraOrdinariaDiurna'].' $'),1,0,'C');
$pdf->Cell(35,10,utf8_decode('Total Devengado:'),0,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['TotalDevengado']),0,1,'C');


$deduccion = $_GET['Deducciones'] / 2;


$pdf->Cell(52,10,utf8_decode('Hora Ordinaria Nocturna'),1,0,'C');
$pdf->Cell(10,10,utf8_decode($_GET['HoraOrdinariaNocturna']),1,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['ValorHoraOrdinariaNocturna'].' $'),1,0,'C');
$pdf->Cell(35,10,utf8_decode('                  Salud:'),0,0,'C');
$pdf->Cell(25,10,utf8_decode($deduccion),0,1,'C');



$pdf->Cell(52,10,utf8_decode('Hora Ext Ordinaria Diurna'),1,0,'C');
$pdf->Cell(10,10,utf8_decode($_GET['HoraExtraOrdinariaDiurna']),1,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['ValorHoraExtraOrdinariaDiurna'].' $'),1,0,'C');
$pdf->Cell(35,10,utf8_decode('               Pension:'),0,0,'C');
$pdf->Cell(25,10,utf8_decode($deduccion),0,1,'C');


$pdf->Cell(52,10,utf8_decode('Hora Ext Ordinaria Nocturna'),1,0,'C');
$pdf->Cell(10,10,utf8_decode($_GET['HoraExtraOrdinariaNocturna']),1,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['ValorHoraExtraOrdinariaNocturna'].' $'),1,0,'C');
$pdf->Cell(35,10,utf8_decode('Total Deducciones:'),0,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['Deducciones']),0,1,'C');



$pdf->Cell(52,10,utf8_decode('Hora Festiva Diurna'),1,0,'C');
$pdf->Cell(10,10,utf8_decode($_GET['HoraFestivaDiurna']),1,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['ValorHoraFestivaDiurna'].' $'),1,0,'C');
$pdf->Cell(40,10,utf8_decode('Auxilio de transporte:'),0,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['AuxilioDeTransporte']),0,1,'L');


$pdf->Cell(52,10,utf8_decode('Hora Festiva Nocturna'),1,0,'C');
$pdf->Cell(10,10,utf8_decode($_GET['HoraFestivaNocturna']),1,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['ValorHoraFestivaNocturna'].' $'),1,0,'C');
$pdf->Cell(35,10,utf8_decode('                      Neto:'),0,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['Neto']),0,1,'C');


$pdf->Cell(52,10,utf8_decode('Hora Ext Festiva Diurna'),1,0,'C');
$pdf->Cell(10,10,utf8_decode($_GET['HoraExtraFestivaDiurna']),1,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['ValorHoraExtraFestivaDiurna'].' $'),1,1,'C');


$pdf->Cell(52,10,utf8_decode('Hora Ext Festiva Nocturna'),1,0,'C');
$pdf->Cell(10,10,utf8_decode($_GET['HoraExtraFestivaNocturna']),1,0,'C');
$pdf->Cell(25,10,utf8_decode($_GET['ValorHoraExtraFestivaNocturna'].' $'),1,1,'C');



$pdf->Output();
