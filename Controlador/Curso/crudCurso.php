<?php

include("../../Modelo/gestorCursoBD.php");
//session_start();
$nombreE = $_SESSION["usuarioEmp"];
    $idE = $_SESSION["usuarioID"];

    if(isset($_POST['btnRegistrarCurso'])){
$idE = $_SESSION["usuarioID"];
$nombre = $_POST['txtNombreC'];
$empresa=$_POST["txtEmpresa"];
$tipo=$_POST["txtTipo"];
$dir=$_POST["txtDireccion"];
$duracion=$_POST["txtDuracion"];
$horario=$_POST["txtHorario"];
$descripcion=$_POST["txtDescripcion"];
$costo=$_POST["txtCosto"];
$orientado=$_POST["txtOrientado"];
$fechaInicio=$_POST["txtFechaInicio"];
$fechaFinal=$_POST["txtFechaFinal"];
$categoria=$_POST["txtCategoria"];
$ubicacion=$_POST["txtUbicacion"];





/*
echo "$idE";
echo "$nombre";
echo "$empresa";
echo "$tipo";
echo "$fechaInicio";
echo "$fechaFinal";
echo "$dir";
echo "$duracion";
echo "$horario";
echo "$descripcion";
echo "$costo";
echo "$orientado";
echo "$categoria";

*/


$resultado = addCurso($idE,$nombre,$fechaInicio,$fechaFinal,$duracion,$dir,$descripcion,$tipo,$costo,$orientado,$empresa,$categoria,$horario,$ubicacion);



if ($resultado) {
	//echo "Curso Insertado Correctamente";
	header("Location: ../../Vista/Home/HomeEmpresa.php");

}else{
	echo "Ocurrio un error";
} 
	}
	
	
	if(isset($_POST['btnModificar'])){
		//echo "Se oprimio el boton";
		$id = $_POST['txtIdMod'];
        $idE = $_SESSION["usuarioID"];
        $nombre = $_POST['txtNombreC'];
        $empresa=$_POST["txtEmpresa"];
        $tipo=$_POST["txtTipo"];
        $fechaInicio=$_POST["txtFechaInicio"];
        $fechaFinal=$_POST["txtFechaFinal"];
        $dir=$_POST["txtDireccion"];
        $duracion=$_POST["txtDuracion"];
        $horario=$_POST["txtHorario"];
        $descripcion=$_POST["txtDescripcion"];
        $costo=$_POST["txtCosto"];
        $orientado=$_POST["txtOrientado"];
        $categoria=$_POST["txtCategoria"];
        $ubicacion=$_POST["txtUbicacion"];


        $rs = updateCurso($idE, $nombre, $empresa,$tipo,$fechaInicio,$fechaFinal,$dir,$duracion,$horario,$descripcion,$costo,$orientado,$categoria,$ubicacion,$id);

        if(!$rs){
            echo "Ocurrio Un Error";
        } else {
            //echo "<div>Curso Actualizado Correctamente</div>";
            header("Location: ../../Vista/consultaCursos.php");
        }
    }
    
    if(isset($_POST['btnEliminar'])){
		$id = $_POST['codEliminar'];

    $rs = deleteCurso($id);

    if(!$rs){
        echo "Ocurrio Un Error";
    } else {
       //echo"Vacante Eliminada Correctamente";
       header("Location: ../../Vista/consultaCursos.php");
    }
	}

?>