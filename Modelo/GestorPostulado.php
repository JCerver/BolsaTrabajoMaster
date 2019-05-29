<?php 
include ("ConexionBD.php");


    function addPostulado($id_vacante,$id_candidato){

        $query="insert tbl_postulados(fk_id_vacante,fk_id_candidato) 
            values('$id_vacante','$id_candidato');";
        global $conexion; /*Está fuera de este método */
        $resultado =  $conexion->query($query);
        return $resultado; /*Devuelve solo si se ejecuto bien o no */
    }

    function validarPost($idVacante,$idCandidato){
        include("ConexionBD.php");
        $consulta = "select * from tbl_postulados where fk_id_vacante='$idVacante' and fk_id_candidato='$idCandidato';";
        //echo $consulta;
        if ($sentencia = mysqli_prepare($conexion, $consulta)) {

            /* ejecutar la consulta */
            mysqli_stmt_execute($sentencia);

            /* almacenar el resultado */
            mysqli_stmt_store_result($sentencia);

            //printf("Número de filas: %d.\n", mysqli_stmt_num_rows($sentencia));
            
            if(mysqli_stmt_num_rows($sentencia)>0){

                return 1;
            }else{
                return 0;
            }
            /* cerrar la sentencia */
            mysqli_stmt_close($sentencia);
        }
    }

function getCandidatos(){
	$query="select *from tbl_candidato;";
	global $conexion;
	$rsCandidato =  $conexion->query($query);
    return $rsCandidato;
}
?>

