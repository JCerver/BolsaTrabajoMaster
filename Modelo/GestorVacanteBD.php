<?php 
session_start();
include ("ConexionBD.php");

if(isset($_SESSION["usuarioID"])){
    $idEmresa = $_SESSION["usuarioID"];
    $idVacante = $_SESSION['idVacante'];
}

    function addVacante($id_empresa, $vac_nombre,$vac_puesto,$vac_salario,$vac_horario,$vac_ubicacion,$vac_requisitos,$vac_descripcion,$vac_fechaPublicado){

        $ps = "insert into tbl_vacante(fk_id_empresa,vac_nombre,vac_puesto,vac_salario,vac_horario,vac_ubicacion,vac_requisitos,vac_descripcion,vac_fechaPublicado) values('$id_empresa','$vac_nombre','$vac_puesto','$vac_salario','$vac_horario','$vac_ubicacion','$vac_requisitos','$vac_descripcion','$vac_fechaPublicado');";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
}


function getAllVacantes(){ 

    $query = "call getAllVacantes();";
    //$query = "select * from tbl_vacante";
    global $conexion; /*Esta fuera de este método */
    $resulSetVacantes =  $conexion->query($query);
    return $resulSetVacantes;

    /*
    Tal vez aqui se deberia de obtener 
    los valores del resulset y enviarlos 
    como un arreglo bidimensional */
} 

    function updateVacante($id_empresa, $vac_nombre,$vac_puesto,$vac_salario,$vac_horario,$vac_ubicacion,$vac_requisitos,$vac_descripcion,$vac_fechaPublicado,$id){
        $ps = "UPDATE tbl_vacante SET fk_id_empresa='$id_empresa',vac_nombre='$vac_nombre',vac_puesto='$vac_puesto',vac_salario='$vac_salario',vac_horario='$vac_horario',vac_ubicacion='$vac_ubicacion',vac_requisitos='$vac_requisitos',vac_descripcion='$vac_descripcion',vac_fechaPublicado='$vac_fechaPublicado' WHERE id_vacante='$id';";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }

    function deleteVacante($id){
        $ps = "DELETE FROM tbl_vacante WHERE id_vacante = '$id'";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }



    
function getVacantePorID($clave){ 

    $query = "call getVacantePorID($clave);";
    global $conexion; /*Esta fuera de este método */
    $resulSetVacantes =  $conexion->query($query);
    return $resulSetVacantes;

    /*
    Tal vez aqui se deberia de obtener 
    los valores del resulset y enviarlos 
    como un arreglo bidimensional */
}


function getVacantePorNombre($xpalabra){ 
$xpal= "%" . "$xpalabra" . "%";
    $query = "call getVacantePorNombre('$xpal');";
    global $conexion; /*Esta fuera de este método */
    $resulSetVacantes =  $conexion->query($query);
    return $resulSetVacantes;

    
} 

function getVacantePorEmpresa($xempresa){ 
$xemp="%" . "$xempresa" . "%";
    $query = "call getVacantePorEmpresa('$xemp');";
    global $conexion; /*Esta fuera de este método */
    $resulSetVacantes =  $conexion->query($query);
    return $resulSetVacantes;

} 

function getVacantePorVacanteEmpresa($xpalabra,$xempresa){ 
    $xp="%" . "$xpalabra" . "%";
    $xe="%" . "$xempresa" . "%";
        $query = "call getVacantePorVacanteEmpresa('$xp','$xe');";
        global $conexion; /*Esta fuera de este método */
        $resulSetVacantes =  $conexion->query($query);
        return $resulSetVacantes;
    
    }
    
    function getVacantePorSueldo1(){ 
            $query = "call getVacantePorSueldo1();";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }
        
    function getVacantePorSueldo2(){ 
            $query = "call getVacantePorSueldo2();";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }

    function getVacantePorSueldo3(){ 
            $query = "call getVacantePorSueldo3();";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }
        
        function getVacantePorSueldoEmpresa1($xempresa){
            $xSueldoE="%" . $xempresa . "%";
            $query = "call getVacantePorSueldoEmpresa1('$xSueldoE');";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }
        function getVacantePorSueldoEmpresa2($xempresa){
            $xSueldoE2="%" . $xempresa . "%";
            $query = "call getVacantePorSueldoEmpresa2('$xSueldoE2');";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }
        function getVacantePorSueldoEmpresa3($xempresa){
            $xSueldoE3="%" . $xempresa . "%";
            $query = "call getVacantePorSueldoEmpresa3('$xSueldoE3');";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }

        function getVacantePorSueldoGiro1($giroEmpresa){   
            $query = "call getVacantePorSueldoGiro1('$giroEmpresa');";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }
        
    function getVacantePorSueldoGiro2($giroEmpresa){
            $query = "call getVacantePorSueldoGiro2('$giroEmpresa);";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }

    function getVacantePorSueldoGiro3($giroEmpresa){ 
            $query = "call getVacantePorSueldoGiro3('$giroEmpresa');";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }
        function getVacantePorGiro($giroEmpresa){ 
            $query = "call getVacantePorGiro('$giroEmpresa');";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }

        function getVacantePorVacanteSueldoEmpresa1($xpalabra,$xempresa){ 
            $xPalabra1="%" . $xpalabra . "%";
            $xEmpresa1="%" . $xempresa . "%";
            $query = "call getVacantePorVacanteSueldoEmpresa1('$xPalabra1','$xEmpresa1');";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }
        function getVacantePorVacanteSueldoEmpresa2($xpalabra,$xempresa){ 
            $xPalabra2="%" . $xpalabra . "%";
            $xEmpresa2="%" . $xempresa . "%";
            $query = "call getVacantePorVacanteSueldoEmpresa2('$xPalabra2','$xEmpresa2');";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        }
        function getVacantePorVacanteSueldoEmpresa3($xpalabra,$xempresa){ 
            $xPalabra3="%" . $xpalabra . "%";
            $xEmpresa3="%" . $xempresa . "%";
            $query = "call getVacantePorVacanteSueldoEmpresa3('$xPalabra3','$xEmpresa3');";
            global $conexion; /*Esta fuera de este método */
            $resulSetVacantes =  $conexion->query($query);
            return $resulSetVacantes;
        
        } 



 ?>
