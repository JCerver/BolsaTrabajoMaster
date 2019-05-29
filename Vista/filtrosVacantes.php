<?php 
    include ("../Modelo/GestorVacanteBD.php");
   // include ("../../Modelo/ConexionBD.php");
   $xpalabra = $_POST['xpalabra'];
   $xempresa = $_POST['xempresa'];
   $rangoSueldo = $_POST['rangoSueldo'];
   $giroEmpresa = $_POST['giroEmpresa'];



    if(isset($_POST['quitarFiltro'])){
        header ("Location: Home/HomeCandidato.php");
    }
  
   // echo $rangoSueldo;
    //echo $giroEmpresa;
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/EstiloHome.css" rel="stylesheet">           
</head>
<body>

    <div class=""> 
        <header>
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            
                            <li><a href=#>Candidatos</a></li>
                            <li><a href=#>Empresas</a></li>
                            <li><a href=#>Salarios</a></li>
                            <li><a href="../Cursos.php">Cursos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioCan"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="a.html">Mi perfil de candidato</a></li>
                                     <li><a href="a.html">Editar curriculum</a></li>
                                    <li><a href="a.html">Configuraci&oacute;n</a></li>
                                    <li class="divider"></li>
                                    <li><a href="../../Controlador/ControladorSesion.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesi&oacute;n</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>

    </div>

    <form action="FiltrosVacantes.php" method="POST">
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
  
      <select class="form-control">
      <option>Selecciona Rango</option>
      <option>$0 - $5,000</option>
      <option>$5,001 - $10,000</option>
      <option>Más de $10,000</option>
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
  
      <select class="form-control">
      <option>Fabricación</option>
      <option>Servicios profesionales</option>
      <option>Educación</option>
      <option>Informática</option>
      <option>Ganadería</option>
      <option>Panadería</option>
      </select>
  </div>


</div>



  </div>
  <div class="panel-footer">
 
    <button type="submit" class="btn btn-danger" name="filtrar">Filtrar</button>
    <button type="submit" class="btn btn-danger" name="quitarFiltro">Quitar Filtro(s)</button>
    </div>
    </form>

</div>


             </div>   

             <div class="col-md-8">

        <?php 
       
        if(empty($_POST['xpalabra'])){
            
            if($rangoSueldo !=0){
                if(empty($_POST['xempresa']) && ($giroEmpresa == 0)){
                    /* Filtro Sueldo*/
                    if($rangoSueldo == 1){
                    $resultado=getVacantePorSueldo1();
                    }else if($rangoSueldo == 2){
                    $resultado=getVacantePorSueldo2();
                    }else if($rangoSueldo == 3){
                    $resultado=getVacantePorSueldo3();
                    }
                    /* Filtro Sueldo*/
                }
                else if((empty($_POST['xempresa'])) && ($giroEmpresa != 0)){
                        /* Filtro Sueldo-giro*/
                        if($rangoSueldo == 1){
                            $resultado=getVacantePorSueldoGiro1($giroEmpresa);
                            }else if($rangoSueldo == 2){
                            $resultado=getVacantePorSueldoGiro2($giroEmpresa);
                            }else if($rangoSueldo == 3){
                            $resultado=getVacantePorSueldoGiro3($giroEmpresa);
                            } 
                            /* Filtro Sueldo-giro*/
                }
                    else if($giroEmpresa == 0){
                        /* Filtro Sueldo-Empresa*/

                        if($rangoSueldo == 1){
                            $resultado=getVacantePorSueldoEmpresa1($xempresa);
                            }else if($rangoSueldo == 2){
                            $resultado=getVacantePorSueldoEmpresa2($xempresa);
                            }else if($rangoSueldo == 3){
                            $resultado=getVacantePorSueldoEmpresa3($xempresa);
                            }
                        /* Filtro Sueldo-Empresa*/
                    }
                
            }else{
                if(empty($_POST['xempresa'])){
                    if($giroEmpresa != 0){
                        /* Filtro Giro*/
                        $resultado= getVacantePorGiro($giroEmpresa);
                    }else{
                        /* Sin Filtro*/
                        echo "<h1>No has seleccionado ningún filtro</h1>";
                        $resultado= getAllVacantes();
                        
                    }
                }else{
                    if($giroEmpresa == 0){
                        /* Filtro Giro*/
                        $resultado= getVacantePorEmpresa($xempresa);
                        
                    }else{
                        /* Filtro Giro-Empresa*/
                    }
                }

            }
        }else{
            if(($rangoSueldo == 0) && (empty($_POST['xempresa'])) && ($giroEmpresa == 0)){
                /* Filtro NombreVacante*/
                $resultado= getVacantePorNombre( $xpalabra);
            }else if(($rangoSueldo == 0) && (empty($_POST['xempresa']))){
                /* Filtro NombreVacante-Giro*/
            }else if(($rangoSueldo == 0) && ($giroEmpresa == 0)){
                /* Filtro NombreVacante-NombreEmpresa*/
                $resultado=getVacantePorVacanteEmpresa($xpalabra,$xempresa);
            }else if((empty($_POST['xempresa']) && ($giroEmpresa == 0))){
                /* Filtro NombreVacante-Sueldo*/
            }else if($rangoSueldo==0){
                /* Filtro NombreVacante-NombreEmpresa-Giro*/
            }else if(empty($_POST['xempresa'])){
                /* Filtro NombreVacante-Sueldo-Giro*/
            }else if($giroEmpresa==0){
                /* Filtro NombreVacante-Sueldo-NombreEmpresa*/
             //   echo "aaa";
                if($rangoSueldo == 1){
                    $resultado=getVacantePorVacanteSueldoEmpresa1($xpalabra,$xempresa);
                    }else if($rangoSueldo == 2){
                        $resultado=getVacantePorVacanteSueldoEmpresa2($xpalabra,$xempresa);
                    }else if($rangoSueldo == 3){
                        $resultado=getVacantePorVacanteSueldoEmpresa3($xpalabra,$xempresa);
                    }
                
            }
        }
    
        //$row=$resultado->fetch_assoc();
        //$resultado = $conexion->query($consulta)
        //$resultado = mysqli_query($conexion, $sql);
        //$result = $con->query("UPDATE students ...");
        //if ($resultado = $conexion->query($s)) {
          if(mysqli_num_rows($resultado)==0){
              echo "<h1>No hay resultados para tu busqueda";
          }
            while ($row=$resultado->fetch_assoc()) {
         ?>
       

             <div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title"><?php echo "{$row["vac_nombre"]}"; ?></h2>
  </div>
  <div class="panel-body">
   <p><?php echo "{$row["emp_nombre"]}"." - "."{$row["emp_ciudad"]}"; ?> </p> 
    <p><b><i>Requisitos:</i></b> <?php echo "{$row["vac_requisitos"]}"; ?> </p>
     <p><b><i>Descripci&oacute;n:</i></b> <?php echo "{$row["vac_descripcion"]}"; ?> </p>

      <form action="informacionVacante.php" method="POST">
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
