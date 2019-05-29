<?php 

include '../Librerias/fpdf.php';

$puesto= $_POST['txtPuesto'];
$horario= $_POST['txtHorario'];
$requisitos= $_POST['txtRequisitos'];
$descripcion= $_POST['txtDescripcion'];
$salario= $_POST['txtSalario'];

$nombreEmpresa= $_POST['txtHorario'];
$horario= $_POST['txtHorario'];
$giro= $_POST['txtGiro'];
$descripcionEmpresa= $_POST['txtDescripcionEmp'];
$telefono= $_POST['txtTelefono'];
$email= $_POST['txtEmail'];


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
//largo,ancho,texto,bordes,salto de linea, L, R o C (posicion)
$pdf->Cell(100,10,'Datos de la vacante',0,1,'C');
$pdf->Cell(30,10,'Puesto ',1,0,'L');
$pdf->Cell(30,10,$puesto,1,0,'L');
$pdf->Output();
 
 ?>