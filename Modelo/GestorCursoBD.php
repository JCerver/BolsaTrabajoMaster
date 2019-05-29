<?php 
session_start();
include ("ConexionBD.php");

 if(isset($_SESSION["usuarioEmp"]) && isset($_SESSION["usuarioID"])){
    $nombreE = $_SESSION["usuarioEmp"];
    $idE = $_SESSION["usuarioID"];
    }
    

/*
    function addCurso($id_empresa, $cur_nombre,$cur_empresa,$cur_tipo,$cur_fecha,$cur_direccion,$cur_duracion,$cur_horario,$cur_descripcion){

        $ps = "insert into tbl_curso(fk_id_empresa,cur_nombre,cur_empresa,cur_tipo,cur_fecha,cur_direccion,cur_duracion,cur_horario,cur_descripcion) values('$id_empresa','$cur_nombre','$cur_empresa','$cur_tipo','$cur_fecha','$cur_direccion','$cur_duracion','$cur_horario','$cur_descripcion');";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no 
}*/


function addCurso($id_empresa,$cur_nombre,$cur_fechaInicio,$cur_fechaFinal,$cur_duracion,$cur_direccion,$cur_descripcion,$cur_tipo,$cur_costo,$cur_personas,$cur_empresa,$cur_categoria,$cur_horario,$cur_ubicacion){
    $query = "call insertarCurso('$id_empresa','$cur_nombre','$cur_fechaInicio','$cur_fechaFinal','$cur_duracion','$cur_direccion','$cur_descripcion','$cur_tipo','$cur_costo','$cur_personas','$cur_empresa','$cur_categoria','$cur_horario','$cur_ubicacion');";
    global $conexion; /*Está fuera de este método */
    $resultado =  $conexion->query($query);
    return $resultado; /*Devuelve solo si se ejecuto bien o no */
}


function getAllCursos(){ 

    $query = "call getAllCursos();";
    global $conexion; /*Esta fuera de este método */
    $resulSetVacantes =  $conexion->query($query);
    return $resulSetVacantes;

    /*
    Tal vez aqui se deberia de obtener 
    los valores del resulset y enviarlos 
    como un arreglo bidimensional */
} 

    function updateCurso($id_empresa, $cur_nombre,$cur_empresa,$cur_tipo,$cur_fechaInicio,$cur_fechaFinal,$cur_direccion,$cur_duracion,$cur_horario,$cur_descripcion,$cur_costo,$cur_personas,$cur_categoria,$cur_ubicacion,$id){
        $ps = "UPDATE tbl_curso SET fk_id_empresa='$id_empresa',cur_nombre='$cur_nombre',cur_empresa='$cur_empresa',cur_tipo='$cur_tipo',cur_fechaInicio='$cur_fechaInicio',cur_fechaFinal='$cur_fechaFinal',cur_direccion='$cur_direccion',cur_duracion='$cur_duracion',cur_horario='$cur_horario',cur_descripcion='$cur_descripcion',cur_costo='$cur_costo',cur_personas='$cur_personas',cur_categoria='$cur_categoria',cur_ubicacion='$cur_ubicacion' WHERE id_curso='$id';";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }

    function deleteCurso($id){
        $ps = "DELETE FROM tbl_curso WHERE id_curso = '$id'";
        global $conexion;
        $rs = mysqli_query($conexion, $ps);
        return $rs; /*Devuelve solo si se ejecuto bien o no */
    }

    function getCursoPorID($clave){ 

    $query = "call getCursosPorID($clave);";
    global $conexion; /*Esta fuera de este método */
    $resulSetVacantes =  $conexion->query($query);
    return $resulSetVacantes;

    /*
    Tal vez aqui se deberia de obtener 
    los valores del resulset y enviarlos 
    como un arreglo bidimensional */
} 


   function getCursosPorCategoria($categoria){ 

    $query = "call getCursosPorCategoria($categoria);";
    global $conexion; /*Esta fuera de este método */
    $resulSetCurso =  $conexion->query($query);
    return $resulSetCurso;

    /*
    Tal vez aqui se deberia de obtener 
    los valores del resulset y enviarlos 
    como un arreglo bidimensional */
} 


 ?>