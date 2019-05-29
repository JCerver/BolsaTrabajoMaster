<?php 
include("../../Modelo/GestorAdministradorBD.php");
  if(isset($_POST['btnEliminarEmpresa'])){
  	//echo "si entro";
		$id = $_POST['codEliminarEmpresa'];
	//	echo "$id";

    $rs = deleteEmpresa($id);

    if(!$rs){
        echo "Ocurrio Un Error";
    } else {
       //echo"empresa Eliminada Correctamente";
     header("Location:../../Vista/AdminEmpresa.php");
    }
	}



if(isset($_POST['btnEliminarCandidato'])){
  //	echo "si entro";
		$id = $_POST['codEliminarCandidato'];
	//	echo "$id";

    $rs = deleteCandidato($id);

    if(!$rs){
        echo "Ocurrio Un Error";
    } else {
       //echo"empresa Eliminada Correctamente";
     header("Location:../../Vista/AdminCandidato.php");
    }
	}


	if(isset($_POST['btnEliminarCurso'])){
//  	echo "si entro";
		$id = $_POST['codEliminarCurso'];
//		echo "$id";

    $rs = deleteCurso($id);

    if(!$rs){
      //  echo "Ocurrio Un Error";
    } else {
       //echo"empresa Eliminada Correctamente";
     header("Location:../../Vista/AdminCursos.php");
    }
	}



	if(isset($_POST['btnEliminarVacante'])){
  	//echo "si entro";
		$id = $_POST['codEliminarVacante'];
//		echo "$id";

    $rs = deleteVacante($id);

    if(!$rs){
        echo "Ocurrio Un Error";
    } else {
       //echo"empresa Eliminada Correctamente";
     header("Location:../../Vista/AdminVacantes.php");
    }
	}


 ?>