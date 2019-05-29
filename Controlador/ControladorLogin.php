
<?php
include '../Modelo/ConexionBD.php';

global $conexion;

//comvierte cualquier simbolo de html
$login = htmlentities(addslashes($_POST["uname"]));
$password = htmlentities(addslashes($_POST["psw"]));
$descrifrado= md5($password);

//estamos utilizando marcadores que son login y password
$queryCandidato="SELECT * FROM tbl_candidato where can_username='$login' AND can_contrasena='$password';";

$queryAdmin="SELECT * FROM tbl_admin where admin_username='$login' AND admin_contrasena='$password';";

$queryEmpresa="SELECT * FROM tbl_empresa where emp_username='$login' AND emp_contrasena='$descrifrado';";


$resultadoCandidato=$conexion->query($queryCandidato);  
$rowCandidato = $resultadoCandidato->FETCH_ASSOC();
$encontrado_candidato=$resultadoCandidato->num_rows;

$resultadoEmpresa=$conexion->query($queryEmpresa);  
$rowEmpresa = $resultadoEmpresa->FETCH_ASSOC();
//Variable para contar si hay o no registros en la consulta
$encontrado_Empresa=$resultadoEmpresa->num_rows;

$resultadoAdmin=$conexion->query($queryAdmin);  
$rowAdmin = $resultadoAdmin->FETCH_ASSOC();
//Variable para contar si hay o no registros en la consulta
$encontrado_Admin=$resultadoAdmin->num_rows;



if($encontrado_candidato!=0){
session_start();
    $_SESSION["candidatoID"]=$rowCandidato["id_candidato"];
	$_SESSION["usuarioCan"]=$rowCandidato["can_username"];
	$_SESSION["tipo"]=$rowCandidato["usr_tipo"];
	$_SESSION["estado_curri"]=$rowCandidato["estado_curriculum"];
	if($_SESSION["estado_curri"]==='0'){
		header("location:../Vista/registroCurriculum.php");
	}else{
		header("location:../Vista/Home/HomeCandidato.php");
	}

//echo "Usted es candidato y su usuario es "."{$_SESSION["usuarioCan"]}";

//echo "{$_SESSION["tipo"]}";


}elseif ($encontrado_Empresa!=0) {
session_start();
	$_SESSION["usuarioEmp"]=$rowEmpresa["emp_username"];
	$_SESSION["usuarioID"]=$rowEmpresa["id_empresa"];
	$_SESSION["tipo"]=$rowEmpresa["usr_tipo"];
header("location:../Vista/Home/HomeEmpresa.php");
//echo "Usted es empresa y su usuario es "."{$_SESSION["usuarioEmp"]}";

//echo "{$_SESSION["tipo"]}";

}elseif ($encontrado_Admin!=0) {
session_start();
//$_SESSION["usuario"]=$login;
	$_SESSION["usuarioAdmin"]=$rowAdmin["admin_username"];
	$_SESSION["tipo"]=$rowAdmin["usr_tipo"];
header("location:../Vista/Home/HomeAdministrador.php");
//echo "Usted es administrador y su usuario es "."{$_SESSION["usuarioAdmin"]}";

//echo "{$_SESSION["tipo"]}";

}


else{
 
 header("location:../index.php?var1=error");
}

?>

