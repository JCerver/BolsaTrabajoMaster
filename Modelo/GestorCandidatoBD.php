<?php 
include ("ConexionBD.php");


    function addCandidato($can_nombre,$can_apellido,$can_telefono,$can_email,$can_username,$can_contrasena,$usr_tipo,$est_curriculum){

        $query="insert tbl_candidato(can_nombre,can_apellido,can_telefono,can_email,can_username,can_contrasena,usr_tipo,estado_curriculum) 
            values('$can_nombre','$can_apellido','$can_telefono','$can_email','$can_username','$can_contrasena','$usr_tipo',$est_curriculum);";
        global $conexion; /*Está fuera de este método */
        $resultado =  $conexion->query($query);
        return $resultado; /*Devuelve solo si se ejecuto bien o no */
    }

   function updateCandidato($id, $nombre,$apellido,$nacimiento,$estado_civil,$telefono,$genero,
    $direccion,$email,$username){
        $ps = "UPDATE tbl_candidato SET can_nombre='$nombre',can_apellido='$apellido',can_nacimiento='$nacimiento',can_estado_civil='$estado_civil',can_telefono='$telefono',can_genero='$genero',
        can_direccion='$direccion',can_email='$email',can_username='$username' WHERE id_candidato='$id';";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }

function getCandidatos(){
	$query="select *from tbl_candidato;";
	global $conexion;
	$rsCandidato =  $conexion->query($query);
    return $rsCandidato;
}
?>

