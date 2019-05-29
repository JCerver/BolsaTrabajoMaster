



<!DOCTYPE html>
<html lang ="es">

    
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <title>Login</title>
        
        <link href="./css/bootstrap.min.css" rel="stylesheet">
         <link href="./css/EstilosLogin.css" rel="stylesheet">
     
        
    </head>
    

    <body>

      
         <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Talent Human</a>
    </div>

    <ul id="barras" class="nav navbar-nav navbar-right">
      <li><a href="./Vista/registroEmpresa.php"><span class="glyphicon glyphicon-briefcase"></span> Publica tu oferta</a></li>
      <li><a href="./Vista/registroCandidato.php"><span class="glyphicon glyphicon-user"></span> Sube tu curriculum</a></li>
    </ul>
  </div>
</nav> 
        <div class="container">
  <!--
  <div class="jumbotron">
      <div class="row">
          
          <div class="col-sm-4">
               <img src="imagenes/logo.png" class="img-rounded" alt="Cinque Terre"> 
          </div>
          <div class="col-sm-8">
    <h1>Bienvenido a Talent Human</h1>      
    <p>El mejor sitio para buscar empleo</p>
    </div>
          </div>
  </div>
-->
            <div class="row">
                <div class="col-sm-4">
                    
                </div>
            
                <div class="col-sm-4">
                    
                   <form action="./Controlador/ControladorLogin.php" style="background-color:#f1f1f1" method="POST">
  <div class="imgcontainer" >
    <img src="imagenes/user.png" alt="Avatar" class="avatar">
  </div>

  <div class="container-fluid" style="background-color:#f1f1f1">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container-fluid" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form> 
                    
                    
                     
        
                    
                
     
                    </div>
                
                <div class="col-sm-4">
                    
                </div>
                
                </div>
            </div>
            <br><br><br>

            <?php
if(isset($_GET["var1"]) && $_GET["var1"]="error"){
/*
echo '<script>
  alert("Usuario registrado exitosamente");
</script>' ;
*/
?>
<div class="container-fluid">

  <div class="row">
  <div class="col-sm-4">
</div>
</div>

<div class="row" style="width: 30%; margin-left: 35%;">
  <div class="col-sm-12">
<div class="alert alert-danger">
  <button class="close" data-dismiss="alert"><span>&times;</span></button>
 Ups! Al parecer no hay conicidencias de las credenciales ingresadas en la base de datos
</div>
</div>
</div>


<div class="row">
  <div class="col-sm-4">
</div>
</div>

</div>

<?php
}
?>


        
<div class="footer">
  <p>Copyright © 2018 - TALENT HUMAN COMPANY - Derechos reservados.
      Sitio web <a href="#">http://www.talenthuman.com.mx</a> </p>
</div>
        
  <script src="./js/jquery.js"></script>
               <script src="./js/bootstrap.min.js"></script>
    </body>
</html>     