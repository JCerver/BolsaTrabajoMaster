<?php 
  include ("../Modelo/GestorCursoBD.php");

  include ("../Modelo/ConexionBD.php");

   // echo "$filtro";
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link href="../css/EstiloCursos.css" rel="stylesheet">

            
</head>
<body>

    <div class=""> 
        <header>
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            
                            <!--<li><a href=#>Candidatos</a></li>
                            <li><a href=#>Empresas</a></li>-->
                            <li><a href="Home/HomeCandidato.php">Vacantes</a></li>
                            <li><a href="Cursos.php">Cursos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioCan"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="modificarCandidato.php">Mi perfil de candidato</a></li>
                                     <li><a href="modificarCurriculum.php">Editar curriculum</a></li>
                                    <!--<li><a href="#">Configuraci&oacute;n</a></li>-->
                                    <li class="divider"></li>
                                    <li><a href="../Controlador/ControladorSesion.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesi&oacute;n</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>

    </div>


  <div class="container-fluid">

          <div class="row">

            <div class="col-md-2">

<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Filtros</h2>
  </div>
  <div class="panel-body">
   <p><span class="glyphicon glyphicon-log-in"></span>  Palabra clave</p>
   <input type="text" name="txtNombreEmpresa" class="form-control" placeholder="Ej: Cocina">
  
<br>

  </div>
  <div class="panel-footer">  <button type="button" class="btn btn-danger">Filtrar</button></div>


</div>


             </div>   

             <div class="col-md-8">

        <?php 

$filtro="";
    
    if(isset($_POST['btnFiltroMarketing'])){
        $filtro="Comunicación y marketing";
    } else if(isset($_POST['btnFiltroFinanzas'])){
        $filtro="Finanzas";
    } else if(isset($_POST['btnFiltroIngenieria'])){
         $filtro="Ingeniería";
    } else if(isset($_POST['btnFiltroSalud'])){
        $filtro="Salud";
    } else if(isset($_POST['btnFiltroInformatica'])){
        $filtro="Informática";
    } else if(isset($_POST['btnFiltroImagen'])){
        $filtro="Imagen y sonido";
    } else if(isset($_POST['btnFiltroIdiomas'])){
        $filtro="Idiomas";
    } else if(isset($_POST['btnFiltroEdu'])){
        $filtro="Educación";
 
    } else{
        echo "error";  
    } 

     

$ps= "select * from tbl_curso where cur_categoria='$filtro';";


         $rs= mysqli_query($conexion,$ps);
         

         //$filas= $resultado->rowCount();
         //if ($filas>0) {
          
        
         while ($row=mysqli_fetch_array($rs)) {
         ?>
       

           <div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title"><?php echo "{$row["cur_nombre"]}"; ?></h2>
  </div>
  <div class="panel-body">
    <p><b><i>Empresa que imparte el curso:</i></b> <?php echo "{$row["cur_empresa"]}"; ?> </p>
   <p><b><i>Recomendado para :</i></b> <?php echo "{$row["cur_personas"]}"; ?> </p> 
    
     <p><b><i>Tipo de curso:</i></b> <?php echo "{$row["cur_tipo"]}"; ?> </p>

     <p><b><i>Costo $</i></b> <?php echo "{$row["cur_costo"]}"; ?> </p>

      <form action="informacionCurso.php" method="POST">
      <input type="hidden" name="idCurso" value="<?php echo "{$row["id_curso"]}"; ?>">
     <button type="submit" class="btn btn-primary">M&aacute;s informaci&oacute;n</button>
     </form>
     
  </div>
  <div class="panel-footer"> <?php echo "{$row["cur_categoria"]}"; ?> </div>


</div>


<?php  }

 //}
         ?>

        </div>

          <div class="col-md-2">

             </div>  

        </div>
        

    </div>





 




        <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
