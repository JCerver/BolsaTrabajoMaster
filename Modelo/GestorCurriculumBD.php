<?php 
include ("ConexionBD.php");

function addCurriculum($idCandidato,$cur_cargo,$cur_estudios,$cur_conocimiento,$cur_descripcion){

    $query="insert tbl_curriculum(fk_id_candidato,cur_cargo,cur_estudios,cur_conocimiento,cur_descripcion) 
        values($idCandidato,'$cur_cargo','$cur_estudios','$cur_conocimiento','$cur_descripcion');";
    global $conexion; /*Está fuera de este método */
    $resultado =  $conexion->query($query);
    $query2="update tbl_candidato SET estado_curriculum = '1' WHERE id_candidato='$idCandidato';";
    global $conexion; /*Está fuera de este método */
    $resultado2 =  $conexion->query($query2);
    return $resultado && $resultado2; /*Devuelve solo si se ejecuto bien o no */
}

function updateCurriculum($id_candidato, $puesto, $estudios,$conocimientos,$descripcion){
    $query="update tbl_curriculum set cur_cargo='$puesto',cur_estudios='$estudios',cur_conocimiento='$conocimientos',cur_descripcion='$descripcion'";
    global $conexion;
    $rs = mysqli_query($conexion,$query);
    return $rs;
}

function getCurriculums(){
	$query="select *from tbl_curriculum;";
	global $conexion;
	$rsCurriculum =  $conexion->query($query);
    return $rsCurriculum;
}
?>

