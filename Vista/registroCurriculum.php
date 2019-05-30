<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Creaci&oacute;n de curriculum</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
  	 <link href="../css/EstiloRegistroEmpresa.css" rel="stylesheet">


            
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="registroCurriculum.php">Ingresa tus mejores cualidades.</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-1">
      <div class="nav navbar-nav navbar-right">
        <a class="btn btn-danger" href="Home/HomeCandidato.php" role="button">Regresar</a>
      </div>
   </div>
  </div>
</nav> 



<div class="container">

<form action="../Controlador/Curriculum/crudCurriculum.php" method="POST">

   <table class="table table-bordered" >
          <thead>
            <tr class="bg-primary">
              <th colspan="5">Registra ahora tu curriculum </th>
            </tr>
          </thead>
          <tbody class="">
             <tr class="">
            <th colspan="2" >Publica tu curriculum</th>
            </tr>
            <tr class="bg-info">
            <th colspan="2" >Datos</th>
            </tr>
             <tr>
              <td>Puesto:</td>
              <td><input type="text" name="txtPuesto" class="form-control" value=""></td>
            </tr>
            <tr>
              <td>Estudios:</td>
              <td><input type="text" name="txtEstudios" class="form-control" value=""></td>
            </tr>
            <tr>
            <tr>
              <td>Conocimientos:</td>
              <td><input type="text" name="txtConocimientos" class="form-control"></td>
            </tr>         
            <tr class="bg-warning">
            <th colspan="2">Descripci&oacute;n</th>
            </tr>

            <tr>
               <td colspan="2"><textarea class="form-control" aria-label="With textarea" name="txtDescripcion"></textarea></td>
            </tr>
          
            <tr>
               <td><input type="hidden" name="txtIdCandidato" class="form-control" value="<?php echo "{$_SESSION['candidatoID']};"  ?>"></td>
            </tr>
            
             </tbody>
</table>
  




</div>

<div class="container">
 <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" name="aceptar">
      <label class="form-check-label" for="gridCheck">
        Al hacer clic en publicar, aceptas las Condiciones Legales y la Privacy policy. de CompuTrabajo
      </label>
    </div>

     <button type="submit" name="btnRegistrarCurriculum" class="btn btn-success btn-lg btn-block" >Publicar Curriculum</button>

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