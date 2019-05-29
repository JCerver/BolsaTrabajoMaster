<?php 
    session_start();
    include('../Modelo/ConexionBD.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Publicaci&oacute;n de nueva vacante</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
  	 <link href="../css/EstiloRegistroEmpresa.css" rel="stylesheet">


            
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Incrementa tu equipo a traves de una oferta de trabajo</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-1">
<div class="nav navbar-nav navbar-right">
               <a class="btn btn-danger" href="#" role="button">Regresar</a>
              </div>
  
   </div>
  </div>
</nav> 

<?php

if(isset($_POST['btnModificar'])){
  $id = $_POST['codModificar'];
    //$id = $_GET['id'];
    $ps = "SELECT * FROM tbl_vacante WHERE id_vacante='$id'";
$rs = mysqli_query($conexion,$ps);
while($row = mysqli_fetch_array($rs)){
?>


<div class="container">

<form action="../Controlador/Vacante/crudVacante.php" method="POST">

   <table class="table table-bordered" >
          <thead>
            <tr class="bg-primary">
              <th colspan="5">Registra la informaci&oacute;n de la vacante </th>
            </tr>
          </thead>
          <tbody class="">
             <tr class="">
            <th colspan="2" >Recuerda ser lo mas claro posible en la informaci&oacute;n proporcionada de la vacante para recibir la mayor cantidad de candidatos posibles para tu oferta de trabajo</th>
            </tr>
          
          
            <tr class="bg-success">
            <th colspan="2" >Informaci&oacute;n</th>
            </tr>

            <tr>
              <td>Nombre comercial de la empresa</td>
              <td><input type="text" name="txtNombreEmpresa" class="form-control" value="<?php echo "{$_SESSION['usuarioEmp']}";  ?>"></td>
            </tr>
            <tr>
              <td>Puesto</td>
              <td><input type="text" name="txtPuesto" class="form-control" value="<?php echo $row['vac_puesto'];?>"></td>
            </tr>
             <tr>
              <td>Salario:</td>
              <td><input type="text" name="txtSalario" class="form-control" value="<?php echo $row['vac_salario'];?>"></td>
            </tr>
            <tr>
              <td>Horario</td>
              <td><input type="text" name="txtHorario" class="form-control" value="<?php echo $row['vac_horario'];?>"></td>
            </tr>
            <tr>
              <td>Ubicacion de la vacante</td>
              <td><input type="text" name="txtUbicacion" class="form-control" value="<?php echo $row['vac_ubicacion'];?>"></td>
            </tr>
          
           
      
          
            <tr class="bg-warning">
            <th colspan="2">Descripci&oacute;n del puesto</th>
            </tr>

            <tr>
               <td colspan="2"><textarea class="form-control" aria-label="With textarea" name="txtDescripcion" rows="8"><?php echo $row['vac_descripcion'];?></textarea></td>
            </tr>

            <tr class="bg-warning">
            <th colspan="2">Requisitos</th>
            </tr>

            <tr>
               <td colspan="2"><textarea class="form-control" aria-label="With textarea" name="txtRequisitos" rows="8"><?php echo $row['vac_requisitos'];?></textarea></td>
            </tr>

              <tr>
              <td>Fecha de publicaci&oacute;n</td>
              <td><input type="text" name="txtFecha" class="form-control" value="<?php echo $row['vac_fechaPublicado'];?>" ></td>
            </tr>
            <tr>
              <input type="text" name="txtIdMod" class="form-control" value="<?php echo $id;?>" >
            </tr>
          
            
           
              
            
             </tbody>
<?php } }?>

</table>
  




</div>

<div class="container">
   <input type="hidden" name="txtEmpresaID" class="form-control" value="<?php echo "{$_SESSION['usuarioID']}"; ?>"></td>
     <button type="submit" name = "btnModificar" class="btn btn-success btn-lg btn-block">Actualizar oferta</button>

</form>
  </div>


  <br>
  <br>
  <br>
        
<div class="footer">
  <p>Copyright  2019 - Jose Cervera - Derechos reservados.</p>
</div>



<script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>