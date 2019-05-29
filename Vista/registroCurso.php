<?php
    session_start();
    $nombreE = $_SESSION["usuarioEmp"];
    $idE = $_SESSION["usuarioID"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Creaci&oacute;n de curso</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
  	 <link href="../css/EstiloRegistroEmpresa.css" rel="stylesheet">


            
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Capacita a tus futuros empleados a traves de diversos cursos</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-1">
<div class="nav navbar-nav navbar-right">
               <a class="btn btn-danger" href="Home/HomeEmpresa.php" role="button">Regresar</a>
              </div>
  
   </div>
  </div>
</nav> 



<div class="container">

<form action="../Controlador/Curso/crudCurso.php" method="POST">

   <table class="table table-bordered" >
          <thead>
            <tr class="bg-primary">
              <th colspan="5">Registra ahora tu curso en la plataforma </th>
            </tr>
          </thead>
          <tbody class="">
             <tr class="">
            <th colspan="2" >Publica un curso de acuerdo a tus necesidades para capacitar a un alto 
            nivel a usuarios postulados para dicho puesto</th>
            </tr>
            <tr class="bg-info">
            <th colspan="2" >Datos Del Curso</th>
            </tr>
             <tr>
              <td>Nombre Del Curso:</td>
              <td><input type="text" name="txtNombreC" class="form-control" value=""></td>
            </tr>

            <tr>
              <td>Categoria del curso: </td>
              <td><select class="form-control" name="txtCategoria">
                  <option>Ingenier&iacute;a</option>
                  <option>Finanzas</option>
                  <option>Comunicaci&oacute;n y marketing</option>
                  <option>Salud</option>
                  <option>Inform&aacute;tica</option>
                  <option>Imagen y sonido</option>
                  <option>Idiomas</option>
                  <option>Educaci&oacute;n</option>
                </select></td>

            </tr>

            <tr>
              <td>Empresa:</td>
              <td><input type="text" name="txtEmpresa" class="form-control"></td>
            </tr>

            <tr>
              <td>Direcci&oacute;n:</td>
              <td><input type="text" name="txtDireccion" class="form-control"></td>
            </tr>
            <tr>
              <td>Duraci&oacute;n:</td>
              <td><input type="text" name="txtDuracion" class="form-control"></td>
            </tr>


            <tr>
              <td>Tipo de curso: </td>
              <td><select class="form-control" name="txtTipo">
                  <option>Online</option>
                  <option>Presencial</option>
                </select></td>

            </tr>

            <tr>
              <td>Costo:</td>
              <td> <input type="text" name="txtCosto" class="form-control"> </td>
            </tr>

            <tr>
              <td>Publico orientado:</td>
              <td><input type="text" name="txtOrientado" class="form-control"></td>
            </tr>

            
            <tr>
              <td>Horario: </td>
              <td><input type="text" name="txtHorario" class="form-control"></td>
            </tr>

             <tr>
              <td>Fecha de inicio del curso:</td>
              <td>
                <input  name="txtFechaInicio" type="date" class="form-control" value="2017-06-01">
            </tr>
            <tr>
              <td>Fecha final del curso: </td>
              <td><input  name="txtFechaFinal" type="date" class="form-control" value="2017-06-01"></td>
            </tr>

               <tr>
              <td>Ubicacion del curso: </td>
              <td><input type="text" name="txtUbicacion" class="form-control"></td>
            </tr>

          
            <tr class="bg-warning">
            <th colspan="2">Descripci&oacute;n Del Curso</th>
            </tr>

            <tr>
               <td colspan="2"><textarea class="form-control" aria-label="With textarea" name="txtDescripcion" rows="8"></textarea></td>
            </tr>
          
            <tr>
               <td><input type="hidden" name="txtIdEmpresa" class="form-control" value="<?php echo $idE; ?>"></td>
            </tr>
            
             </tbody>
</table>
  




</div>

<div class="container">
 

     <button type="submit" name="btnRegistrarCurso" class="btn btn-success btn-lg btn-block" >Publicar Curso</button>

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