<?php 
    include ("../../Modelo/GestorVacanteBD.php");
   // include ("../../Modelo/ConexionBD.php");
    
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/EstiloHome.css" rel="stylesheet">           
</head>
<body>

    <div class=""> 
        <header>
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbar-1">
                           <ul class="nav navbar-nav">
                            <li><a href="HomeCandidato.php">Vacantes</a></li>
                            <li><a href="../Cursos.php">Cursos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioCan"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                   <li><a href="../modificarCandidato.php">Mi perfil de candidato</a></li>
                                    <li><a href="../modificarCurriculum.php">Editar curriculum</a></li>
                                  
                                    <li class="divider"></li>
                                    <li><a href="../../Controlador/ControladorSesion.php"><span
                                                class="glyphicon glyphicon-log-in"></span> Cerrar sesi&oacute;n</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>

    </div>


   <form action="../FiltrosVacantes.php" method="POST">
    <div class="container-fluid">
    
          <div class="row">

            <div class="col-md-3">

<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Filtros</h2>
  </div>
  <div class="panel-body">
   


   <div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-home"></span> Por Vacante</h2>
  </div>
  <div class="panel-body">
  <p><span class="glyphicon glyphicon-log-in"></span>  Por nombre vacante</p>
   <input type="text" class="form-control" placeholder="Ej:Desarrollador" name="xpalabra">
   
<br>

<p><span class="glyphicon glyphicon-log-in"></span>  Por sueldo</p>
  
      <select class="form-control" name ="rangoSueldo">
      <option value = 0>Selecciona Rango</option>
      <option value = 1>$0 - $5,000</option>
      <option value = 2>$5,001 - $10,000</option>
      <option value = 3>Más de $10,000</option>
      
      </select>

  </div>
</div>

<br>


   <div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title"><span class="glyphicon glyphicon-briefcase"></span> Por Empresa</h2>
  </div>
  <div class="panel-body">
  <p><span class="glyphicon glyphicon-log-in"></span>  Por nombre Empresa</p>
   <input type="text" class="form-control" placeholder="Ej:Microsoft" name="xempresa">
  
<br>

<p><span class="glyphicon glyphicon-log-in"></span>  Por giro</p>
  
      <select class="form-control" name="giroEmpresa">
      <option value = 0>Selecciona Giro</option>
      <option >Fabricación</option>
      <option >Servicios profesionales</option>
      <option >Educación</option>
      <option >Informática</option>
      <option >Ganadería</option>
      <option >Panadería</option>
      </select>
  </div>


</div>



  </div>
  <div class="panel-footer">
  
 
    <button type="submit" class="btn btn-danger" name="filtrar">Filtrar</button></div>
    </form>

</div>


             </div>   

             <div class="col-md-8">


        <?php 
         $resultado= getAllVacantes();
        //$row=$resultado->fetch_assoc();

          while ($row=$resultado->fetch_assoc()) {
         ?>
       

             <div class="panel panel-primary">
  <div class="panel-heading">
    <!--Aqui estaba vacante vac_nombre-->
    <h2 class="panel-title"><?php echo "{$row["vac_nombre"]}"; ?></h2>
  </div>
  <div class="panel-body">
   <p><?php echo "{$row["emp_nombre"]}"." - "."{$row["emp_ciudad"]}"; ?> </p> 
    <p><b><i>Requisitos:</i></b> <?php echo "{$row["vac_requisitos"]}"; ?> </p>
     <p><b><i>Descripci&oacute;n:</i></b> <?php echo "{$row["vac_descripcion"]}"; ?> </p>

      <form action="../informacionVacante.php" method="POST">
      <input type="hidden" name="idVacante" value="<?php echo "{$row["id_vacante"]}"; ?>">
     <button type="submit" class="btn btn-primary">M&aacute;s informaci&oacute;n</button>
     </form>
      
  </div>
  <div class="panel-footer"> <?php echo "{$row["vac_fechaPublicado"]}"; ?> </div>


</div>


<?php  }
         ?>

        </div>

          <div class="col-md-2">

             </div>  

        </div>
        

    </div>





    
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
