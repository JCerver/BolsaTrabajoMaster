<?php
include("../../Modelo/GestorPostulado.php");

    session_start();
	
	
	if(isset($_POST['btnPostular'])){
        //echo "Se oprimio el boton";
        $idVacante=$_POST["txtIdVacante"];
        $idCandidato=$_SESSION["candidatoID"];
        echo $idVacante;
        echo $idCandidato;
        $rs = addPostulado($idVacante,$idCandidato);

        if(!$rs){
            echo "Ocurrio Un Error";
        } else {
            //echo "<div>Vacante Actualizada Correctamente</div>";
            header("Location: ../../Vista/Home/HomeCandidato.php");
        }
	}
?>