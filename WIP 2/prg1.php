<?php
require('../fpdf/fpdf.php');
$pdf = new FPDF();
$pdf ->AddPage();
$pdf ->SetFont('Arial','B',16);
$pdf ->Cell(40,10,'Hello World!',1,1,'C');
$pdf ->Ln();
$pdf ->Cell(60,10,'Powered by FPDF.',1,1,'C');
$pdf ->Output();
?>