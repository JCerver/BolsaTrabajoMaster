<?php
session_start();
include('../Modelo/ConexionBD.php');
$id = $_SESSION["usuarioID"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Candidatos</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
  	 <link href="../css/EstiloRegistroEmpresa.css" rel="stylesheet">


            
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Candidatos Registrados Actualmente</a>
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
  <?php
    if(isset($_POST['btnConsultar'])){
      $id = $_POST['idVacante'];
      $nombreVacante = $_POST['nomVacante'];
  ?>
  <p class="lead">
  Nombre del puesto: <?php echo $nombreVacante;?>
  </p>
  <table class="table table-bordered" >
    <tr class="bg-info">
      <th>Nompre</th><th>Apellido</th><th>Correo</th><th>Teléfono</th><th>Área Profesional</th>
    </tr>
    <?php
    
      $ps = "select 
      tbl_candidato.can_nombre as 'Nombre',
      tbl_candidato.can_apellido as 'Apellido',
      tbl_candidato.can_email as 'Correo',
      tbl_candidato.can_telefono as 'Telefono',
      tbl_curriculum.cur_cargo as 'Puesto'
      from tbl_postulados,tbl_candidato,tbl_curriculum
      where tbl_postulados.fk_id_vacante='$id' AND 
      tbl_postulados.fk_id_candidato=tbl_candidato.id_candidato AND
      tbl_candidato.id_candidato = tbl_curriculum.fk_id_candidato;";
      //echo $ps;
      $rs = mysqli_query($conexion,$ps);
      while($row = mysqli_fetch_array($rs)){
    ?>
            <tr>
                <td><?php echo $row['Nombre'] ?></td>
                <td><?php echo $row['Apellido'] ?></td>
                <td><?php echo $row['Correo'] ?></td>
                <td><?php echo $row['Telefono'] ?></td>
                <td><?php echo $row['Puesto'] ?></td>
            </tr>
            <?php }} ?>
    </table>
</div>
        
<div class="footer">
  <p>Copyright 2019 - Derechos reservados.</p>
</div>

<script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>