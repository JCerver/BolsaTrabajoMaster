<?php ?>

<!DOCTYPE html>
<html>
<head>
    <title>Creaci&oacute;n de cuenta</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../css/bootstrap.min.css" rel="stylesheet">
  	 <link href="../css/EstiloRegistroCandidato.css" rel="stylesheet">


            
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Creaci&oacute;n de cuenta</a>
    </div>

    <ul id="barra" class="nav navbar-nav navbar-right">
 
    </ul>
  </div>
</nav> 
        <div class="container">
 
            <div class="row">
                <div class="col-md-1">
                    
                </div>
            
                <div class="col-md-10">
                    
                   <form action="../Controlador/Candidato/crudCandidato.php" style="background-color:#f1f1f1" method="POST">
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
    <input type="text" placeholder="Ingrese apellidos" name="apellidos" required>
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


    <button type="submit" name="btnEnviar">Crear cuenta</button>

 <div class="container-fluid" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" onclick="location.href='../index.php'">Cancelar</button>
  </div>
  </div>

 
</form>

</div>
                
  <div class="col-md-1">
                    
  </div>
                
  </div>
  </div>
  <br>
  <br>
  <br>
        
<div class="footer">
  <p>Copyright Â© 2018 - Derechos reservados.</p>
</div>



<script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>