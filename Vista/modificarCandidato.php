<?php
    //include('../Controlador/Curriculum/crudCurriculum.php');
    session_start();
    include('../Modelo/ConexionBD.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mi perfil</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
  	 <link href="../css/EstiloRegistroEmpresa.css" rel="stylesheet"> 
     <script>
        function msj() {
        alert("Has modificado tus datos!");
        }
    </script>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Modifica tu información.</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-1">
      <div class="nav navbar-nav navbar-right">
        <a class="btn btn-danger" href="Home/HomeCandidato.php" role="button">Regresar</a>
      </div>
   </div>
  </div>
</nav> 

<?php
  $idCandidato = $_SESSION['candidatoID'];
  $ps = "SELECT * FROM tbl_candidato WHERE id_candidato='$idCandidato'";
  global $conexion;
  $rs = mysqli_query($conexion,$ps);
  while($row = mysqli_fetch_array($rs)){
?>

<div class="container">

<form action="../Controlador/Candidato/crudCandidato.php" method="POST">

   <table class="table table-bordered" >
          <thead>
            <tr class="bg-primary">
              <th colspan="5">Modifica tu infomación</th>
            </tr>
          </thead>
          <tbody class="">
             
            <tr class="bg-info">
            <th colspan="2" >Tus Datos</th>
            </tr>
             <tr>
              <td>Nombre:</td>
              <td><input type="text" name="txtNombre" class="form-control" value="<?php echo $row['can_nombre'];?>"></td>
            </tr>
            <tr>
              <td>Apellido:</td>
              <td><input type="text" name="txtApellido" class="form-control" value="<?php echo $row['can_apellido'];?>"></td>
            </tr>
            <tr>
            <tr>
              <td>Nacimiento:</td>
              <td><input type="text" name="txtNacimiento" class="form-control" value="<?php echo $row['can_nacimiento'];?>"></td>
            </tr>         
            <tr>
              <td>Estado civil:</td>
              <td><input type="text" name="txtCivil" class="form-control" value="<?php echo $row['can_estado_civil'];?>"></td>
            </tr>         
            <tr>
              <td>Teléfono:</td>
              <td><input type="text" name="txtTelefono" class="form-control" value="<?php echo $row['can_telefono'];?>"></td>
            </tr>         
            <tr>
              <td>Género:</td>
              <td><input type="text" name="txtGenero" class="form-control" value="<?php echo $row['can_genero'];?>"></td>
            </tr> 
            <tr>
              <td>Dirección:</td>
              <td><input type="text" name="txtDireccion" class="form-control" value="<?php echo $row['can_direccion'];?>"></td>
            </tr> 
            <tr>
              <td>Email:</td>
              <td><input type="text" name="txtEmail" class="form-control" value="<?php echo $row['can_email'];?>"></td>
            </tr> 
            <tr>
              <td>Username:</td>
              <td><input type="text" name="txtUsername" class="form-control" value="<?php echo $row['can_username'];?>"></td>
            </tr> 
            </tbody>
          </table>
  
  <?php }?>



</div>

<div class="container">
  <button type="submit" name="btnActualizar" onclick="msj()" class="btn btn-success btn-lg btn-block" >Actualizar Información</button>

</form>
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