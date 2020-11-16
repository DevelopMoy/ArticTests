<?php
require('pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
   $this->Image('img/LogoPrincipal.png',110,0,70,70);
    // Arial bold 15
    $this->SetFont('Arial','B',35);
    // Movernos a la derecha
    $this->Cell(80);
	// Título
	$this->Ln(60);
	$this->SetX(125);
	$this->Cell(30,10,'Certificacion en JAVA EE',0,1,'C');
	$this->SetFont('Arial','',25);
	$this->Ln(10);
	$this->SetX(125);		
	$this->Cell(30,10,'ArticDevCo oficialmente certifica que:',0,1,'C');
	$this->SetFont('Arial','B',35);
	$this->SetTextColor(6,57,113);
	$this->Ln(10);
	$this->SetX(125);	
	$this->Cell(30,10,'Pancho Perez',0,1,'C');
	$this->SetFont('Arial','',15);
	$this->SetTextColor(0,0,0);
	$this->Ln(10);
	$this->SetX(27);	
	$this->Write(7,'Ha contestado satisfactoriamente el examen de Certificacion en JAVA EE, con ello demuestra las                                        competencias en el desarrollo con este lenguaje para sus futuros proyectos ');
    // Salto de línea
	$this->Ln(40);
	$this->Image('img/firma-MAR.png',27,160,80,50);
	$this->Image('img/firma-JAT.png',170,160,80,50);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('LANDSCAPE', 'letter');
$pdf->SetFont('Times','',12);

$pdf->Output();
?>