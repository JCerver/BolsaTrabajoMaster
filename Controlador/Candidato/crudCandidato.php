<?php
include("../../Modelo/GestorCandidatoBD.php");
session_start();
    if (isset($_POST['btnEnviar'])) {
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $telefono=$_POST["telefono"];
        $correo=$_POST["email"];
        $username=$_POST["uname"];
        $pass=$_POST["psw"];
        $usr_tipo='Candidato';
        $est_curriculum='0';

        $resultado = addCandidato($nombre,$apellidos,$telefono,$correo,$username,$pass,$usr_tipo,$est_curriculum);

        if ($resultado) {
            //echo "insertado correctamente";
            header("location:../../index.php");
        }else{
            echo "Ocurrio un error";
        }
    }
    
    
    if(isset($_POST['btnActualizar'])){
        //echo "Se oprimio el boton";
        $id_candidato=$_SESSION["candidatoID"];
        $nombre=$_POST["txtNombre"];
        $apellido=$_POST["txtApellido"];
        $nacimiento=$_POST["txtNacimiento"];
        $estado_civil=$_POST["txtCivil"];
        $telefono=$_POST["txtTelefono"];
        $genero=$_POST["txtGenero"];
        $direccion=$_POST["txtDireccion"];
        $email=$_POST["txtEmail"];
        $username=$_POST["txtUsername"];

        

        $rs = updateCandidato($id_candidato, $nombre,$apellido,$nacimiento,$estado_civil,$telefono,$genero,
        $direccion,$email,$username);

        if(!$rs){
            echo "Ocurrio Un Error";
        } else {
            //echo "<div>Vacante Actualizada Correctamente</div>";
            header("Location: ../../Vista/modificarCandidato.php");
        }
    }
?> 