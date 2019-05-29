<?php
include("../Modelo/ConexionBD.php");
session_start();
$idE = $_SESSION["usuarioID"];

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
                <a class="navbar-brand" href="#">Manten Actualizada La Informaci&oacute;n De Tu Empresa</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-1">
                <div class="nav navbar-nav navbar-right">
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
    <?php


    $ps = "SELECT * FROM tbl_empresa WHERE id_empresa='$idE'";
    $rs = mysqli_query($conexion, $ps);
    while ($row = mysqli_fetch_array($rs)) {
        ?>
        <div class="container">

            <form action="../Controlador/Empresa/actualizaEmpresa.php" method="POST">

                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-primary">
                            <th colspan="5">Actualiza ahora tu empresa en la plataforma </th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="">
                            <th colspan="2"></th>
                        </tr>
                        <tr class="bg-info">
                            <th colspan="2">Datos de acceso</th>
                        </tr>
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="txtUsername" class="form-control" value="<?php echo $row['emp_username'];?>"></td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td><input type="text" name="txtCorreo" class="form-control" value="<?php echo $row['emp_email'];?>"></td>
                        </tr>

                        <tr class="bg-success">
                            <th colspan="2">Datos de la empresa</th>
                        </tr>

                        <tr>
                            <td>Nombre comercial de la empresa</td>
                            <td><input type="text" name="txtNombreEmpresa" class="form-control" value="<?php echo $row['emp_nombre'];?>"></td>
                        </tr>
                        <tr>
                            <td>RFC de la empresa</td>
                            <td><input type="text" name="txtRFC" class="form-control" value="<?php echo $row['emp_rfc'];?>"></td>
                        </tr>
                        <tr>
                            <td>Ciudad:</td>
                            <td><input type="text" name="txtCiudad" class="form-control" value="<?php echo $row['emp_ciudad'];?>"></td>
                        </tr>
                        <tr>
                            <td>Direcci&oacute;n </td>
                            <td><input type="text" name="txtDireccion" class="form-control" value="<?php echo $row['emp_direccion'];?>"></td>
                        </tr>
                        <tr>
                            <td>Telefono</td>
                            <td><input type="text" name="txtTelefono" class="form-control" value="<?php echo $row['emp_telefono'];?>"></td>
                        </tr>
                        <tr>
                            <td>Giro de la empresa</td>
                            <td><select class="form-control" name="selectGiro" value="<?php echo $row['emp_giroEmpresarial'];?>">
                                    <option>Fabricaci&oacute;n</option>
                                    <option>Servicios profesionales</option>
                                    <option>Educaci&oacute;n</option>
                                    <option>Inform&aacute;tica</option>
                                    <option>Ganader&iacute;a</option>
                                    <option>Panader&iacute;a</option>
                                </select></td>

                        </tr>

                        <tr class="bg-warning">
                            <th colspan="2">Descripci&oacute;n de la empresa</th>
                        </tr>

                        <tr>
                            <td colspan="2"><textarea class="form-control" aria-label="With textarea" name="txtDescripcion"><?php echo $row['emp_descripcion'];?></textarea></td>
                        </tr>



                    </tbody>
                <?php } ?>
            </table>





    </div>

    <div class="container">
        <div class="form-check">
            
        </div>

        <button type="submit" name="btnActualizaEmpresa" class="btn btn-success btn-lg btn-block">Actualizar Cuenta</button>

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