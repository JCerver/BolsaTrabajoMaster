<?php
include("../../Modelo/gestorEmpresaBD.php");
session_start();
$idE = $_SESSION["usuarioID"];

if (isset($_POST['btnActualizaEmpresa'])) {
    //echo "Se oprimio el boton";
    $username = $_POST["txtUsername"];
    $correo = $_POST["txtCorreo"];
    //$pass=$_POST["txtPass"];
    $nombre = $_POST["txtNombreEmpresa"];
    $rfc = $_POST["txtRFC"];
    $ciudad = $_POST["txtCiudad"];
    $dir = $_POST["txtDireccion"];
    $telefono = $_POST["txtTelefono"];
    $giro = $_POST["selectGiro"];
    $descripcion = $_POST["txtDescripcion"];
    $ciudad = $_POST["txtCiudad"];
    $usr_tipo = 'Empresa';

    $rs = updateEmpresa($username,$correo,$nombre, $rfc, $dir, $ciudad, $telefono, $giro, $descripcion, $usr_tipo,$idE);

        if(!$rs){
            echo "Ocurrio Un Error";
        } else {
            //echo "<div>Curso Actualizado Correctamente</div>";
            header("Location: ../../Vista/Home/HomeEmpresa.php");
        }
}