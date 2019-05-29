<?php               //reanuda la sesion 
             session_start();
                            //ahora la destruimos y que nos redireccione al formulario
             session_destroy();

            header("location:../index.php");
             ?>