<?php  
include("../../Modelo/gestorVacanteBD.php");

$id_empresa=$_POST["txtEmpresaID"];
$puesto=$_POST["txtPuesto"];
$salario=$_POST["txtSalario"];
$horario=$_POST["txtHorario"];
$requisitos=$_POST["txtRequisitos"];
$descripcion=$_POST["txtDescripcion"];
$fecha=$_POST["txtFecha"];

/*
echo "$id_empresa";
echo "$puesto";
echo "$salario";
echo "$horario";
echo "$requisitos";
echo "$descripcion";
echo "$fecha";*/

$resultado = addVacante($id_empresa, $puesto,$salario,$horario,$requisitos,$descripcion,$fecha);

if ($resultado) {
	echo "insertado correctamente";
	//header("location:../../Home/HomeEmpresa.php");

}else{
	echo "Ocurrio un error";
}
?>