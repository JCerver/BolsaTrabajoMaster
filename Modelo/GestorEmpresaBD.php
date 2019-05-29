<?php 
include ("ConexionBD.php");

function addEmpresa($emp_nombre, $emp_rfc,$emp_direccion,$emp_ciudad,$emp_telefono,$emp_giro,$emp_descripcion,$emp_email,$emp_username,$emp_contrasena,$usr_tipo){
    $cifrado= md5($emp_contrasena);
    $query = "call insertarEmpresa('$emp_nombre','$emp_rfc','$emp_direccion','$emp_ciudad','$emp_telefono','$emp_giro','$emp_descripcion','$emp_email','$emp_username','$cifrado','$usr_tipo');";
    global $conexion; /*Está fuera de este método */
    $resultado =  $conexion->query($query);
    return $resultado; /*Devuelve solo si se ejecuto bien o no */
}

function getEmpresa($id){
	$query="select *from tbl_empresa where id_empresa='$id';";
	global $conexion;
	 $rsCandidato =  $conexion->query($query);
    return $rsCandidato;
}

function updateEmpresa($emp_username,$emp_email,$emp_nombre, $emp_rfc, $emp_direccion,$emp_ciudad,$emp_telefono,$emp_giroEmpresarial,$emp_descripcion,$usr_tipo,$id){
    $ps = "UPDATE tbl_empresa SET emp_username='$emp_username',emp_email='$emp_email',emp_nombre='$emp_nombre',emp_rfc='$emp_rfc',emp_direccion='$emp_direccion',emp_ciudad='$emp_ciudad',emp_telefono='$emp_telefono',emp_giroEmpresarial='$emp_giroEmpresarial',emp_descripcion='$emp_descripcion',usr_tipo='$usr_tipo' WHERE id_empresa='$id';";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
}



 

 ?>
