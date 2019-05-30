<?php
include("../../Modelo/gestorVacanteBD.php");
//session_start();
$idEmresa = $_SESSION["usuarioID"];
$idVacante = $_SESSION['idVacante'];

    if(isset($_POST['btnRegistraVacante'])){
$id_empresa=$_SESSION["usuarioID"];
$nombre = $_POST['txtNombreEmpresa'];
$puesto=$_POST["txtPuesto"];
$salario=$_POST["txtSalario"];
$horario=$_POST["txtHorario"];
$requisitos=$_POST["txtRequisitos"];
$descripcion=$_POST["txtDescripcion"];
$fecha=$_POST["txtFecha"];
$ubicacion=$_POST["txtUbicacion"];

/*
echo "$id_empresa";
echo "$nombre";
echo "$puesto";
echo "$salario";
echo "$horario";
echo "$requisitos";
echo "$descripcion";
echo "$fecha";
*/

$resultado = addVacante($id_empresa,$nombre, $puesto,$salario,$horario,$ubicacion,$requisitos,$descripcion,$fecha);

if ($resultado) {
	//echo "Vacante insertada correctamente";
	header("Location: ../../Vista/Home/HomeEmpresa.php");

}else{
	echo "Ocurrio un error";
}
	}
	
	
	if(isset($_POST['btnModificar'])){
		//echo "Se oprimio el boton";
		$id = $_POST['txtIdMod'];
		$id_empresa=$_SESSION["usuarioID"];
$nombre = $_POST['txtNombreEmpresa'];
$puesto=$_POST["txtPuesto"];
$salario=$_POST["txtSalario"];
$horario=$_POST["txtHorario"];
$requisitos=$_POST["txtRequisitos"];
$descripcion=$_POST["txtDescripcion"];
$fecha=$_POST["txtFecha"];
$ubicacion=$_POST["txtUbicacion"];

        $rs = updateVacante($id_empresa, $nombre, $puesto,$salario,$horario,$ubicacion,$requisitos,$descripcion,$fecha,$id);

        if(!$rs){
            echo "Ocurrio Un Error";
        } else {
            //echo "<div>Vacante Actualizada Correctamente</div>";
            header("Location: ../../Vista/consultaVacantes.php");
        }
	}

	if(isset($_POST['btnEliminar'])){
		$id = $_POST['codEliminar'];

    $rs = deleteVacante($id);

    if(!$rs){
        echo "Ocurrio Un Error";
    } else {
       //echo"Vacante Eliminada Correctamente";
       header("Location: ../../Vista/consultaVacantes.php");
    }
	}

?>