<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

date_default_timezone_set('America/Lima');

require '../tools/fpdf/fpdf.php';
require '../tools/Util.php';
require '../models/SolicitudHabilidad.php';
require '../models/Asociado.php';

$constancia = new SolicitudHabilidad();
$constancia->setIdSolicitud(filter_input(INPUT_GET, 'idSolicitud'));
$constancia->obtenerDatos();

$asociado = new Asociado();
$asociado->setIdAsociado($constancia->getIdAsociado());
$asociado->obtenerDatos();

$util = new Util();

define('FPDF_FONTPATH', '../tools/fpdf/font/');


$pdf = new FPDF('P', 'mm', "A4");
$pdf->SetMargins(8,8,8);
$pdf->SetAutoPageBreak(true, 8);
$pdf->AddPage();

$pdf->Image("fondo_certificado.jpg", 0, 0, 210, 291);

$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(00, 00, 0);

$h = 6;
$pdf->SetY(40);
$pdf->SetX(150);
$pdf->Cell(60, $h, "Nro " . $util->zerofill($constancia->getIdSolicitud(), 3) ."-". date("Y"), 0, 1, 'C');
$pdf->ln(6);

$pdf->SetFont('Arial', 'B', 14);
$pdf->SetX(60);
$pdf->Cell(140, $h, "CONSTANCIA DE HABILIDAD", 0, 1, 'C');
$pdf->ln(6);

$pdf->SetX(60);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(140, $h, utf8_decode("La que suscribe, Decana del Concejo Directivo Regional XI - Ancash - del Colegio de Trabajadores Sociales del Perú"), 0, 'J', 0);
$pdf->ln(6);

$pdf->SetFont('Arial', 'B', 14);
$pdf->SetX(80);
$pdf->Cell(140, $h, "DA CONSTANCIA", 0, 1, 'L');
$pdf->ln(6);


$pdf->SetFont('Arial', '', 14);
$pdf->SetX(60);
$pdf->Cell(140, $h, "Que la Licenciada en Trabajo Social:", 0, 1, 'L');
$pdf->ln(6);
$pdf->SetX(60);
$pdf->Cell(140, $h, utf8_decode($asociado->getApellido() . " " . $asociado->getNombre()), 0, 1, 'L');
$pdf->ln(6);
$pdf->SetX(60);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(140, $h, utf8_decode("Está inscrita en el Registro: CTSP N° ". $asociado->getCtsp() ." como miembro de la Orden, cumple, con  la  Ley,  el  Estatuto,  Reglamento  y Código de Ética, del Colegio de Trabajadores Sociales del Perú."), 0, 'J', 0);
$pdf->ln(6);


$pdf->SetFont('Arial', 'B', 14);
$pdf->SetX(80);
$pdf->Cell(140, $h, "POR TANTO", 0, 1, 'l');
$pdf->ln(6);

$pdf->SetFont('Arial', '', 14);
$pdf->SetX(60);
$pdf->Cell(140, $h, utf8_decode("Se encuentra HÁBIL, para el ejercicio Legal de la Profesión"), 0, 1, 'L');
$pdf->ln(6);

$pdf->SetFont('Arial', '', 14);
$pdf->SetX(60);
$pdf->Cell(140, $h, utf8_decode("Valido hasta " . $util->SumaDias($constancia->getFechaSolicitud(), 180)), 0, 1, 'L');
$pdf->ln(6);

$pdf->SetFont('Arial', '', 14);
$pdf->SetX(60);
$pdf->MultiCell(140, $h, utf8_decode("Se expide la presente constancia para los fines que Considere conveniente la interesada."), 0, 'J', 0);
$pdf->ln(6);

$pdf->SetFont('Arial', 'B', 14);
$pdf->SetX(80);
$pdf->Cell(140, $h, utf8_decode("Chimbote, " . $util->fechaCastellano($constancia->getFechaSolicitud())), 0, 1, 'l');
$pdf->ln(6);


$pdf->Output();
