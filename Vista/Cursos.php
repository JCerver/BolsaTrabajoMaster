<?php 
      include ("../Modelo/GestorCursoBD.php");


 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link href="../css/EstiloCursos.css" rel="stylesheet">

            
</head>
<body>

    <div class=""> 
        <header>
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            
                             <li><a href="../Vista/Home/HomeCandidato.php">Vacantes</a></li>
                            <li><a href="../Vista/Cursos.php">Cursos</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioCan"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="modificarCandidato.php">Mi perfil de candidato</a></li>
                                    <li><a href="modificarCurriculum.php">Editar curriculum</a></li>
                                  
                                    <li class="divider"></li>
                                    <li><a href="../Controlador/ControladorSesion.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesi&oacute;n</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>

    </div>


    <div class="container-fluid">

<div class="row">



 <div class="col-md-12">

      <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <form  action="cursosPorCategoria.php" method="POST">
    <h2 class="fondo display-4">Encuentra el curso de tu vida</h2>
    <input type="text" placeholder="¿Qu&eacute; curso buscas?" name="txtFiltroCurso">
    <button type="submit" class="btn btn-success btn-lg btn-block" ><span class="glyphicon glyphicon-search"></span> Buscar</button>
  </form>
    <br>
    <p class="fondo lead">Encuentra tu curso en las siguientes categorias</p>
<br><br>
    <div class="row">


      <form  action="cursosPorCategoria.php" method="POST">
      <div class="col-md-3">

        <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Comunicaci&oacute;n y marketing</h2>
  </div>
  <div class="panel-body">
    <p class="colorTexto">La constante evoluci&oacute;n del Marketing y la Comunicaci&oacute;n requiere de profesionales con dominio del marketing online o el visual merchandising en M&eacute;xico.</p>
      </div>

  <div class="panel-footer">  <button type="submit" class="btn btn-info" name="btnFiltroMarketing">Ver m&aacute;s</button></div>
</div>
</div>  


      <div class="col-md-3">
         <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Finanzas</h2>
  </div>
  <div class="panel-body">
    <p class="colorTexto">Cursos gratis sobre Econom&iacute;a, empresas, administraci&oacute;n y finanzas; cursos de trading, inversiones en bolsa, forex y manejos de programas en general.</p>
      </div>

  <div class="panel-footer">  <button type="submit" class="btn btn-info" name="btnFiltroFinanzas">Ver m&aacute;s</button></div>
</div>
      </div>

      <div class="col-md-3">
         <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Ingenier&iacute;a</h2>
  </div>
  <div class="panel-body">
    <p class="colorTexto">Ingenier&iacute;a ofrece buenas salidas profesionales en puestos de direcci&oacute;n, en diseño de sistemas de calidad, log&iacute;stica y gesti&oacute;n de proyectos en M&eacute;xico.</p>
      </div>

  <div class="panel-footer">  <button type="submit" class="btn btn-info" name="btnFiltroIngenieria">Ver m&aacute;s</button></div>
</div>
      </div>

      <div class="col-md-3">
         <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Salud</h2>
  </div>
  <div class="panel-body">
    <p class="colorTexto">A trav&eacute;s de los servicios de EDUCADS se integran esfuerzos de las instituciones del Sector Salud para una oferta amplia y diversa de cursos abiertos a tu disposici&oacute;n</p>
      </div>

  <div class="panel-footer">  <button type="submit" class="btn btn-info" name="btnFiltroSalud">Ver m&aacute;s</button></div>
</div>
      </div>



    </div>


     <div class="row">
      <div class="col-md-3">

        <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Inform&aacute;tica</h2>
  </div>
  <div class="panel-body">
    <p class="colorTexto">Encuentra cursos de bases de datos, sistemas operativos, programaci&oacute;n o apps m&oacute;viles en esta secci&oacute;n formativa de Inform&aacute;tica y Tecnolog&iacute;as en M&eacute;xico.</p>
      </div>

  <div class="panel-footer">  <button type="submit" class="btn btn-info" name="btnFiltroInformatica">Ver m&aacute;s </button></div>
</div>
</div>


      <div class="col-md-3">
         <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Imagen y sonido</h2>
  </div>
  <div class="panel-body">
    <p class="colorTexto">Sonorizaci&oacute;n para Medios Lineales y No Lineales. Obt&eacute;n los conocimientos clave para abordar la mezcla de una producci&oacute;n de audio e imagen impecable</p>
      </div>

  <div class="panel-footer">  <button type="submit" class="btn btn-info" name="btnFiltroImagen">Ver m&aacute;s</button></div>
</div>
      </div>

      <div class="col-md-3">
         <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Idiomas</h2>
  </div>
  <div class="panel-body">
    <p class="colorTexto">Estudia en el mejor centro de idiomas en M&eacute;xico. Aprende ingl&eacute;s y otros idiomas populares con un m&eacute;todo 100% efectivo. ¡Encuentra un curso y reg&iacute;strate hoy!</p>
      </div>

  <div class="panel-footer">  <button type="submit" class="btn btn-info" name="btnFiltroIdiomas">Ver m&aacute;s</button></div>
</div>
      </div>

      <div class="col-md-3">
         <div class="panel panel-info">
  <div class="panel-heading">
    <h2 class="panel-title">Educaci&oacute;n</h2>
  </div>
  <div class="panel-body">
    <p class="colorTexto">La herramienta indispensable para la búsqueda de cursos de Educación: presenciales, en línea o a distancia. Encuentra tu curso a traves de diferentes opciones.</p>
      </div>

  <div class="panel-footer">  <button type="submit" class="btn btn-info" name="btnFiltroEdu">Ver m&aacute;s</button></div>
</div>
      </div>



    </div>

 </form>

  </div>

</div>

 </div>

 </div>



          <div class="row">

            <div class="col-md-2">



</div>

 

             <div class="col-md-8">

        <h1>Ultimos cursos publicados</h1>

         <?php 
         $resultado= getAllCursos();
        //$row=$resultado->fetch_assoc();

          while ($row=$resultado->fetch_assoc()) {
         ?>


         <div class="panel panel-primary">
  <div class="panel-heading">
    <h2 class="panel-title"><?php echo "{$row["cur_nombre"]}"; ?></h2>
  </div>
  <div class="panel-body">
    <p><b><i>Empresa que imparte el curso:</i></b> <?php echo "{$row["cur_empresa"]}"; ?> </p>
   <p><b><i>Recomendado para :</i></b> <?php echo "{$row["cur_personas"]}"; ?> </p> 
    
     <p><b><i>Tipo de curso:</i></b> <?php echo "{$row["cur_tipo"]}"; ?> </p>

     <p><b><i>Costo $</i></b> <?php echo "{$row["cur_costo"]}"; ?> </p>

      <form action="informacionCurso.php" method="POST">
      <input type="hidden" name="idCurso" value="<?php echo "{$row["id_curso"]}"; ?>">
     <button type="submit" class="btn btn-primary">M&aacute;s informaci&oacute;n</button>
     </form>
     
  </div>
  <div class="panel-footer"> <?php echo "{$row["cur_categoria"]}"; ?> </div>


</div>


<?php  }
         ?>

        </div>

          <div class="col-md-2">

             </div>  

        </div>
        

    </div>





    
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
