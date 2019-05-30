<?php 
    session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="../../css/bootstrap.min.css" rel="stylesheet">
          <link href="../../css/EstiloHome.css" rel="stylesheet">

            
</head>
<body>

   <div class=""> 
        <header>
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            

                            <li class="dropdown">
                                <a href="·" class="dropdown-toggle" data-toggle="dropdown" role="button"> Ofertas de trabajo <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="../registroVacante.php"><span class=" glyphicon glyphicon-plus"></span> Agregar un nueva vacante</a></li>
                                     <li><a href="../consultaVacantesCan.php"><span class="glyphicon glyphicon-inbox"></span> Vacantes publicadas</a></li>
                                     <li class="divider"></li>
                                     <li><a href="../consultaVacantes.php"><span class="glyphicon glyphicon-cog"></span>  Administraci&oacute;n de vacantes</a></li>

                                 </ul>
                             </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> Cursos <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="../registroCurso.php"><span class=" glyphicon glyphicon-plus"></span> Agregar un nuevo curso</a></li>
                                   <!--  <li><a href="#"><span class="glyphicon glyphicon-inbox"></span> Cursos publicados</a></li>  -->
                                     <li class="divider"></li>
                                     <li><a href="../consultaCursos.php"><span class="glyphicon glyphicon-cog"></span>  Administraci&oacute;n de cursos</a></li>

                                 </ul>
                             </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">  <?php echo "{$_SESSION["usuarioEmp"]}"; ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                     <li><a href="../modificaEmpresa.php">Mi perfil de empresa</a></li>
                                
                                    <li class="divider"></li>
                                    <li><a href="../../Controlador/ControladorSesion.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesi&oacute;n</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div> 
                </div>
            </nav>
        </header>

    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="../../imagenes/logo.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><font color="black">Sea Bienvenida Tu Empresa</font></h1>
              <p><font color="black">Aqui podras registrar diversos cursos para asi capacitar con mayor facilidad a tus posibles candidatos y los puestos solicitados que tu empresa necesite de manera administrada.</font></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="../../imagenes/logo.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><font color="black">Registra Tus Cursos</font></h1>
              <p><font color="black">Has que tus usuarios vivan una experiencia extraordinaria capacitandose para su puesto a traves de cursos.</font></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="../../imagenes/logo.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><font color="black">Administra Tus Vacantes</font></h1>
              <p><font color="black">Manten actualizados a los diferentes usuarios con los puestos solicitados por tu empresa para que puedan postularse.</font></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel --><br><br>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="../../imagenes/Cursos1.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Cursos En Linea O Presenciales</h2>
          <p>Toda la informacion necesaria se brinda a traves de ti. Oferta los mejores cursos sobre marketing, teconologia, educacion, desarrollo personal y otros temas.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../../imagenes/cursos2.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Comunidad</h2>
          <p>Las mejores empresas estan en este eje de contenido brindando informacion y servicios a la sociedad disponible demandantes de empleo.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../../imagenes/cursos3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Informacion Actualizada</h2>
          <p>Sabemos que el talento humano es clave para alcanzar el exito, solicita personas con metas ambiciosas y mentalidad ganadora con informacion de empleos disponibles dentro de tu empresa.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->



    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>
