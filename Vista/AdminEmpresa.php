<?php
session_start();
include('../Modelo/ConexionBD.php');

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

 <div class=""> 
      <header>
        <nav class="navbar navbar-default navbar-inverse">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar-1">
              <ul class="nav navbar-nav">
                
                <li><a href=#>Empresa</a></li>
                            <li><a href=#>Candidato</a></li>
                            <li><a href=#>Curso</a></li>
                            <li><a href=#>Vacantes publicadas</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
              
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioAdmin"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="a.html">Mi perfil de administrador</a></li>
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


<div class="container">
<!--<form action="../Controlador/Vacante/crudVacante.php" method="post">-->
<table class="table table-bordered">
            <tr class="bg-info">
            <th>ID</th><th>Nombre</th><th>RFC</th><th>Telefono</th><th>Giro</th><th>E-mail</th><th>Username</th><th colspan="3">Accion</th>
            </tr>
<?php
 $ps = "SELECT * FROM tbl_empresa";
 $rs = mysqli_query($conexion,$ps);
 while($row = mysqli_fetch_array($rs)){
?>

   
            <tr>
                <td><?php echo $row['id_empresa'] ?></td>  
                <td><?php echo $row['emp_nombre'] ?></td>
                <td><?php echo $row['emp_rfc'] ?></td>
                <td><?php echo $row['emp_telefono'] ?></td>
                <td><?php echo $row['emp_giroEmpresarial'] ?></td>
                <td><?php echo $row['emp_email'] ?></td>
                 <td><?php echo $row['emp_username'] ?></td>
                <td>
                <form action="../Controlador/Administrador/crudAdministrador.php" method="post">
                <input type="hidden" name="codEliminarEmpresa" value="<?php echo $row['id_empresa'];?>">
                <button type="submit" name="btnEliminarEmpresa" class="btn btn-danger">Eliminar</button>
                </form>
                <!--
                <a href="../Controlador/Curso/eliminarCurso.php?id=<?php //echo $row['id_curso'];?>">
                <button type="button" name="btnEliminar" class="btn btn-danger">Eliminar</button>
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