
<?php 
    include ("../Modelo/GestorVacanteBD.php");
    include ("../Modelo/GestorPostulado.php");

$idVacante = $_POST['idVacante'];
$resultado= getVacantePorID($idVacante);


$row=$resultado->fetch_assoc();

 ?>

 <!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link href="../css/EstiloHome.css" rel="stylesheet">
<script>
        function msjPostulado() {
        alert("Te has postulado!");
        }
    </script>
    <style>
        .show { display: block; }
        .hidden {display: none; }
    </style>
            
</head>
<body>

    <div class=""> 
        <header>
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            
                             <li><a href="Home/HomeCandidato.php">Vacantes</a></li>
                            <li><a href="../Cursos.php">Cursos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioCan"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="modificarCandidato.php">Mi perfil de candidato</a></li>
                                    <li><a href="modificarCurriculum.php">Editar curriculum</a></li>
                                    <li><a href="#">Configuraci&oacute;n</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../Controlador/ControladorSesion.php">
                                    <span class="glyphicon glyphicon-log-in"></span> Cerrar sesi&oacute;n</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>

    </div>


       

             <div class="col-md-8"  >

     

             <div class="panel panel-Info">
  <div class="panel-heading">
   <h2 class="panel-title"><?php echo "{$row["vac_nombre"]}"; ?></h2>
  </div>
  <div class="panel-body">
  <p><b><i>Puesto:</i></b> <?php echo "{$row["vac_puesto"]}"; ?> </p><br>
  <p><b><i>Horario:</i></b> <?php echo "{$row["vac_horario"]}"; ?> </p><br>
    <p><b><i>Requisitos:</i></b> <?php echo "{$row["vac_requisitos"]}"; ?> </p><br>
     <p><b><i>Descripción:</i></b> <?php echo "{$row["vac_descripcion"]}"; ?> </p><br>
     <p><b><i>Salario: $ </i></b> <?php echo "{$row["vac_salario"]}"; ?> </p><br>

      <?php
                $idCandidato = $_SESSION["candidatoID"];
                //echo $idCandidato;
                //echo $idVacante;
                
                $var = validarPost($idVacante,$idCandidato);
                if($var>0){
                    $estadoPostulado = "hidden";
                    $estadoPostulado2 = "show";
                }else{
                    $estadoPostulado = "show";
                    $estadoPostulado2 = "hidden";
                }
                
                ?>
                <div class="<?php echo $estadoPostulado;?>">
                    <form action="../Controlador/Postulado/crudPostulado.php" method="post">
                        <input type="hidden"  name="txtIdVacante" value="<?php echo $_POST['idVacante'];?>">
                        <button type="submit" name="btnPostular" onclick="msjPostulado()" class="btn btn-primary">Postularme</button>
                    </form>
                </div>
                <div class="<?php echo $estadoPostulado2;?>">
                    <h4>Ya aplicaste para esta vacante.</h4>
                </div>



     
     <br><br>
      <iframe src=" <?php echo "{$row["vac_ubicacion"]}"; ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
       
     </iframe>
  </div>
  <div class="panel-footer"> Fecha de publicación: <?php echo "{$row["vac_fechaPublicado"]}"; ?> </div>


</div>



        </div>
        

    <div class="container-fluid">

          <div class="row">

            <div class="col-md-4">

<div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Informaci&oacute;n de la empresa</h2>
  </div>
  <div class="panel-body">
  
 <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-briefcase"></span> Nombre de la empresa</h2>
  </div>
  <div class="panel-body">
          <?php echo "{$row["emp_nombre"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-map-marker"></span> Direcci&oacute;n</h2>
  </div>
  <div class="panel-body">
            <?php echo "{$row["emp_direccion"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-record"></span> Giro</h2>
  </div>
  <div class="panel-body">
    <?php echo "{$row["emp_giroEmpresarial"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span> Descripción</h2>
  </div>
  <div class="panel-body">
    <?php echo "{$row["emp_descripcion"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-earphone"></span> Teléfono</h2>
  </div>
  <div class="panel-body">
     <?php echo "{$row["emp_telefono"]}"; ?>
  </div>


</div>


   <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-envelope"></span> E-mail</h2>
  </div>
  <div class="panel-body">
    <?php echo "{$row["emp_email"]}"; ?>
  </div>


</div>

  </div>
    <div class="panel-footer">  

  <form action="generarPDF.php" method="POST">

    <input type="hidden" name="txtPuesto" value="<?php echo "{$row["vac_nombre"]}"; ?>">
    <input type="hidden" name="txtHorario" value="<?php echo "{$row["vac_horario"]}"; ?>">
    <input type="hidden" name="txtRequisitos" value="<?php echo "{$row["vac_requisitos"]}"; ?>">
    <input type="hidden" name="txtDescripcion" value="<?php echo "{$row["vac_descripcion"]}"; ?>">
    <input type="hidden" name="txtSalario" value="<?php echo "{$row["vac_salario"]}"; ?>">

    <input type="hidden" name="txtNombreEmpresa" value="<?php echo "{$row["emp_nombre"]}"; ?>">
    <input type="hidden" name="txtDireccion" value="<?php echo "{$row["emp_direccion"]}"; ?>">
    <input type="hidden" name="txtGiro" value="<?php echo "{$row["emp_giroEmpresarial"]}"; ?>">
    <input type="hidden" name="txtDescripcionEmp" value="<?php echo "{$row["emp_descripcion"]}"; ?>">
    <input type="hidden" name="txtTelefono" value="<?php echo "{$row["emp_telefono"]}"; ?>">
    <input type="hidden" name="txtEmail" value="<?php echo "{$row["emp_email"]}"; ?>">



     <button type="submit" class="btn btn-primary">Imprimir informaci&oacute;n</button></div>

</form>

    </div>

</div>





    
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>


