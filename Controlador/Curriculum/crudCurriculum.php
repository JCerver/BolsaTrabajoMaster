<?php
include("../../Modelo/GestorCurriculumBD.php");
session_start();
$idCandidato = $_SESSION["candidatoID"];

    if(isset($_POST['btnRegistrarCurriculum'])){
        $id_candidato=$_SESSION["candidatoID"];
        $puesto=$_POST["txtPuesto"];
        $estudios=$_POST["txtEstudios"];
        $conocimientos=$_POST["txtConocimientos"];
        $descripcion=$_POST["txtDescripcion"];

        $resultado = addCurriculum($id_candidato, $puesto, $estudios,$conocimientos,$descripcion);

        if ($resultado) {
            //echo "Curriculum insertada correctamente";
            header("location: ../../Vista/Home/HomeCandidato.php");

        }else{
            echo "Ocurrio un error";
        }
    }
    
    
    if(isset($_POST['btnActualizar'])){
        //echo "Se oprimio el boton";
        $id_candidato=$_SESSION["candidatoID"];
        $puesto=$_POST["txtPuesto"];
        $estudios=$_POST["txtEstudios"];
        $conocimientos=$_POST["txtConocimientos"];
        $descripcion=$_POST["txtDescripcion"];

        $rs = updateCurriculum($id_candidato, $puesto, $estudios,$conocimientos,$descripcion);

        if(!$rs){
            echo "Ocurrio Un Error";
        } else {
            //echo "<div>Vacante Actualizada Correctamente</div>";
            header("Location: ../../Vista/modificarCurriculum.php");
        }
    }
?>