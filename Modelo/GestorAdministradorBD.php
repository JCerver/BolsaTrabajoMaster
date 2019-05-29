<?php 
include ("ConexionBD.php");

 function deleteEmpresa($id){
        $ps = "DELETE FROM tbl_empresa WHERE id_empresa = $id";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }

    function deleteCandidato($id){
        $ps = "DELETE FROM tbl_candidato WHERE id_candidato = $id";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }

     function deleteCurso($id){
        $ps = "DELETE FROM tbl_curso WHERE id_curso = $id";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }


     function deleteVacante($id){
        $ps = "DELETE FROM tbl_vacante WHERE id_vacante = $id ";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }


?>