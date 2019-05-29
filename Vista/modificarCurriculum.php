<?php
    //include('../Controlador/Curriculum/crudCurriculum.php');
    session_start();
    include('../Modelo/ConexionBD.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modificac&oacute;n de curriculum</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
  	 <link href="../css/EstiloRegistroEmpresa.css" rel="stylesheet"> 
     <script>
        function msj() {
        alert("Has modificado tu curriculum!");
        }
    </script>
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Modifica tu curriculum.</a>
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
  $ps = "SELECT * FROM tbl_curriculum WHERE fk_id_candidato='$idCandidato'";
  global $conexion;
  $rs = mysqli_query($conexion,$ps);
  while($row = mysqli_fetch_array($rs)){
?>

<div class="container">

<form action="../Controlador/Curriculum/crudCurriculum.php" method="POST">

   <table class="table table-bordered" >
          <thead>
            <tr class="bg-primary">
              <th colspan="5">Modifica tu infomación</th>
            </tr>
          </thead>
          <tbody class="">
             <tr class="">
            <th colspan="2" >Modifica tu curriculum</th>
            </tr>
            <tr class="bg-info">
            <th colspan="2" >Datos</th>
            </tr>
             <tr>
              <td>Puesto:</td>
              <td><input type="text" name="txtPuesto" class="form-control" value="<?php echo $row['cur_cargo'];?>"></td>
            </tr>
            <tr>
              <td>Estudios:</td>
              <td><input type="text" name="txtEstudios" class="form-control" value="<?php echo $row['cur_estudios'];?>"></td>
            </tr>
            <tr>
            <tr>
              <td>Conocimientos:</td>
              <td><input type="text" name="txtConocimientos" class="form-control" value="<?php echo $row['cur_conocimiento'];?>"></td>
            </tr>         
            <tr class="bg-warning">
            <th colspan="2">Descripci&oacute;n</th>
            </tr>

            <tr>
               <td colspan="2"><textarea class="form-control" aria-label="With textarea" name="txtDescripcion"><?php echo $row['cur_descripcion'];?></textarea></td>
            </tr>
            </tbody>
          </table>
  
  <?php }?>



</div>

<div class="container">
  <button type="submit" name="btnActualizar" onclick="msj()" class="btn btn-success btn-lg btn-block" >Actualizar Curriculum</button>

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