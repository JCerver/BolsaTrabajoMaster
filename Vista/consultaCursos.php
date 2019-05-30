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
      <a class="navbar-brand" href="consultaCursos.php">Cursos Registrados Actualmente</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-1">
<div class="nav navbar-nav navbar-right">
            <a class="btn btn-success" href="registroCurso.php" role="button">Registrar Curso</a>
            <a class="btn btn-danger" href="Home/HomeEmpresa.php" role="button">Regresar</a>
              </div>
  
   </div>
  </div>
</nav> 

<!--
        <div class="container">
 
            <div class="row">
                <div class="col-md-1">
                    
                </div>
            
                <div class="col-md-10">
                    
                   <form action="#" style="background-color:#f1f1f1" method="POST">
  <div class="imgcontainer" >
    <img src="../imagenes/userI.png" alt="Avatar" class="avatar"> 
  </div>

  <div class="form-row" style="background-color:#f1f1f1">

<div class="form-group col-md-6">
    <label for="nombre"><b>Nombre</b></label>
    <input type="text" placeholder="Ingrese un nombre" name="nombre" required>
</div>

<div class="form-group col-md-6">
    <label for="apellido"><b>Apellidos</b></label>
    <input type="text" placeholder="Ingrese apellidos" name="apellido" required>
</div>


<div class="form-group col-md-6">
    <label for="telefono"><b>Telefono</b></label>
    <input type="text" placeholder="Ingrese un telefono valido" name="telefono" required>
</div>

<div class="form-group col-md-6">
    <label for="email"><b>e-mail</b></label>
    <input type="text" placeholder="Ingrese un correo valido" name="email" required>
</div>



  	 <div class="form-group col-md-6">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Ingrese un username" name="uname" required>
     </div>

     <div class="form-group col-md-6">
     <label for="psw"><b>Contraseña:</b></label>
    <input type="password" placeholder="Ingrese una contraseña segura" name="psw" required>
</div>


    <button type="submit">Crear cuenta</button>

 <div class="container-fluid" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='../login.php'">Cancelar</button>
  </div>
  </div>

 
</form>

</div>
                
  <div class="col-md-1">
                    
  </div>
                
  </div>
  </div>   

-->

<div class="container">
<!--<form action="../Controlador/Vacante/crudVacante.php" method="post">-->
<table class="table table-bordered">
            <tr class="bg-info">
            <th>Nombre Curso</th><th>Empresa</th><th>Fecha Inicio</th><th>Tipo</th><th>Direccion</th><th>Horario</th><th colspan="3">Accion</th>
            </tr>
<?php
 $ps = "SELECT * FROM tbl_curso";
 $rs = mysqli_query($conexion,$ps);
 while($row = mysqli_fetch_array($rs)){
?>

   
            <tr>
                <td><?php echo $row['cur_nombre'] ?></td>  
                <td><?php echo $row['cur_empresa'] ?></td>
                <td><?php echo $row['cur_fechaInicio'] ?></td>
                <td><?php echo $row['cur_tipo'] ?></td>
                <td><?php echo $row['cur_direccion'] ?></td>
                <td><?php echo $row['cur_horario'] ?></td>
                <td>
                <form action="modificaCurso.php" method="post">
                <input type="hidden" name="codModificar" value="<?php echo $row['id_curso'];?>">
                <button type="submit" name="btnModificar" class="btn btn-success">Modificar</button>
                </form>
                <!--
                <a href="modificaCurso.php?id=<?php //echo $row['id_curso'];?>">
                <button type="button" class="btn btn-success" >Modificar</button>
                </a>
                -->
                </td>
                <td>
                <form action="../Controlador/Curso/crudCurso.php" method="post">
                <input type="hidden" name="codEliminar" value="<?php echo $row['id_curso'];?>">
                <button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>
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