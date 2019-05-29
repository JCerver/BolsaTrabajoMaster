<?php  
include("../../Modelo/gestorEmpresaBD.php");


$username=$_POST["txtUsername"];
$correo=$_POST["txtCorreo"];
$pass=$_POST["txtPass"];
$nombre=$_POST["txtNombreEmpresa"];
$rfc=$_POST["txtRFC"];
$ciudad=$_POST["txtCiudad"];
$dir=$_POST["txtDireccion"];
$telefono=$_POST["txtTelefono"];
$giro=$_POST["selectGiro"];
$descripcion=$_POST["txtDescripcion"];
$ciudad=$_POST["txtCiudad"];
$usr_tipo='Empresa';


$resultado = addEmpresa($nombre,$rfc,$dir,$ciudad,$telefono,$giro,$descripcion,$correo,$username,$pass,$usr_tipo);

if ($resultado) {
	//echo "insertado correctamente";
	header("location:../../index.php");

}else{
	echo "Ocurrio un error";
}

?>