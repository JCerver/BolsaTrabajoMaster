<?php
session_start();
include('../Modelo/ConexionBD.php');
$id = $_SESSION["usuarioID"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Creaci&oacute;n de cuenta empresa</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
  	 <link href="../css/EstiloRegistroEmpresa.css" rel="stylesheet">


            
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Vacantes Registradas Actualmente</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-1">
<div class="nav navbar-nav navbar-right">
            <a class="btn btn-success" href="registroVacante.php" role="button">Registrar Vacante</a>
            <a class="btn btn-danger" href="Home/HomeEmpresa.php" role="button">Regresar</a>
              </div>
  
   </div>
  </div>
</nav> 


<div class="container">
<!--<form action="../Controlador/Vacante/crudVacante.php" method="post">-->
<table class="table table-bordered" >
            <tr class="bg-info">
            <th>Nombre Empresa</th><th>Nombre vacante</th><th>Salario</th><th>Horario</th><th>Descripcion</th><th>Fecha</th><th colspan="3">Accion</th>
            </tr>
<?php
 $ps = "SELECT * FROM tbl_vacante WHERE fk_id_empresa='$id'";
 $rs = mysqli_query($conexion,$ps);
 while($row = mysqli_fetch_array($rs)){
     $_SESSION['idVacante'] = $row['id_vacante'];
     $idVacante = $_SESSION['idVacante'];
?>
            <tr>
                <td><?php echo $row['vac_nombre'] ?></td>
                <td><?php echo $row['vac_puesto'] ?></td>
                <td><?php echo $row['vac_salario'] ?></td>
                <td><?php echo $row['vac_horario'] ?></td>
                <td><?php echo $row['vac_descripcion'] ?></td>
                <td><?php echo $row['vac_fechaPublicado'] ?></td>
                <td>
                <form action="modificaVacante.php" method="post">
                <input type="hidden" name="codModificar" value="<?php echo $row['id_vacante'];?>">
                <button type="submit" name="btnModificar" class="btn btn-success">Modificar</button>
                </form>
                <!--
                <a href="modificaVacante.php?id=<?php //echo $row['id_vacante'];?>">
                <button type="button" class="btn btn-success" >Modificar</button>
                </a>
                -->
                </td>
                <td>
                <form action="../Controlador/Vacante/crudVacante.php" method="post">
                <input type="hidden" name="codEliminar" value="<?php echo $row['id_vacante'];?>">
                <button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>
                </form>
                <!--
                <a href="../Controlador/Vacante/eliminarVacante.php?id=<?php //echo $row['id_vacante'];?>">
                <button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>
                </a>
                -->
                </td>
            </tr>
            <?php } ?>
    </table>

    <!--</form>-->

</div>




  <br>
  <br>
  <br>
        
<div class="footer">
  <p>Copyright Â© 2018 - Jose Cervera - Derechos reservados.</p>
</div>



<script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>