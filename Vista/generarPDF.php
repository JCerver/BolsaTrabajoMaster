<?php 

include '../Librerias/fpdf.php';

$puesto= $_POST['txtPuesto'];
$horario= $_POST['txtHorario'];
$requisitos= $_POST['txtRequisitos'];
$descripcion= $_POST['txtDescripcion'];
$salario= $_POST['txtSalario'];

$nombreEmpresa= $_POST['txtNombreEmpresa'];
$direccion= $_POST['txtDireccion'];
$giro= $_POST['txtGiro'];
$descripcionEmpresa= $_POST['txtDescripcionEmp'];
$telefono= $_POST['txtTelefono'];
$email= $_POST['txtEmail'];


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',11);
//largo,ancho,texto,bordes,salto de linea, L, R o C (posicion)
$pdf->SetX(50);
$pdf->Cell(100,10,'Datos de la vacante',0,1,'C');
$pdf->SetY(30);
$pdf->Cell(30,10,'Puesto ',1,0,'L');
$pdf->Cell(30,10,$puesto,0,1,'L');
$pdf->Cell(30,10,'Horario ',1,0,'L');
$pdf->Cell(30,10,$horario,0,1,'L');
$pdf->Cell(30,10,'salario $',1,0,'L');
$pdf->Cell(30,10,$salario,0,1,'L');
$pdf->Cell(30,10,'Requisitos ',1,0,'L');
$pdf->Cell(30,10,$requisitos,0,1,'L');
$pdf->Cell(30,10,'Descripcion ',1,0,'L');
$pdf->Cell(30,10,$descripcion,0,1,'L');

$pdf->SetXY(50,100);
$pdf->Cell(100,10,'Datos de la empresa',0,1,'C');
$pdf->SetY(120);
$pdf->Cell(30,10,'Nombre ',1,0,'L');
$pdf->Cell(30,10,$nombreEmpresa,0,1,'L'); 
$pdf->Cell(30,10,'Direccion ',1,0,'L');
$pdf->Cell(30,10,$direccion,0,1,'L');
$pdf->Cell(30,10,'Giro ',1,0,'L');
$pdf->Cell(30,10,$giro,0,1,'L');
$pdf->Cell(30,10,'Telefono ',1,0,'L');
$pdf->Cell(30,10,$telefono,0,1,'L');
$pdf->Cell(30,10,'E-mail ',1,0,'L');
$pdf->Cell(30,10,$email,0,1,'L');
$pdf->Cell(30,10,'Descripcion ',1,0,'L');
$pdf->Cell(30,10,$descripcion,0,1,'L');

$pdf->Output();
 
 ?>