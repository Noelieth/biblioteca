<?php
  session_start();
 ?>
<?php

  if (! empty($_POST)) {
    include_once("conexion.php");
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * from usuario where usuario = '$usuario' AND password = '$password'";
    $result = $mysqli->query($sql);
    echo $sql;
    $a = mysqli_num_rows($result);
    if ($a > 0) {
      echo "verdad";

      while($a = mysqli_fetch_assoc($result)){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nivel'] = $a['nivel'];
      }

      header("location: index.php");
    }
    else{
      echo "false";
      header("location: login.php?error=true");
    }
  }
  ?>
<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BIBLIOTECA GENERAL - UDO SUCRE</title>

        <!-- CSS -->
        <link rel="stylesheet" href="archivos/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="archivos/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="archivos/css/animate.css">
        <link rel="stylesheet" href="archivos/css/form-elements.css">
        <link rel="stylesheet" href="archivos/css/main.css">
        <link rel="stylesheet" href="archivos/css/media-queries.css">


    </head>

    <body>

        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <br class="visible-xs">
                    <h5><img src="archivos/img/logo.png" class="pull-left logo-movil visible-xs"><a class="blue visible-xs" href="index.php">Biblioteca General - Núcleo Sucre</a></h5>
                </div>
				<!-- menu -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="index.php"><i class="fa fa-home"></i>Inicio</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-th-large"></i>Nosotros<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li><a href="presentacion.php">Presentación</a></li>
                                <li><a href="historia.php">Historia</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-university"></i>Tu Universidad<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li><a href="autoridades.php">Autoridades</a></li>
                                <li><a href="organigrama-universidad.php">Organigrama</a></li>
                                <li><a href="historia-universidad.php">Reseña histórica</a></li>
                                <li><a href="ubicacion-universidad.php">Ubicación geográfica</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="1000">
                              <i class="fa fa-database"></i>Repositorios<span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-left" role="menu">
                              <li><a href="dbaa.php">Bases de datos</a></li>
                          </ul>
                        </li>
                        <li>
                            <a href="contact.php"><i class="fa fa-envelope"></i>Contacto</a>
                        </li>
                        <li>
                            <a href="sitemap.php"><i class="fa fa-sitemap"></i>Mapa del sitio</a>
                        </li>
                        <li class="active">
                            <a href="login.php"><i class="fa fa-user"></i>Acceso</a>
                        </li>
                    </ul>
				</div>
			</div>
		</nav>
            <div class="container">
            </div>
            <div class="espacio">
            </div>

        <!-- formulario -->
        <div class="login-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 login-form">
                       <div class ="form-container">
    	                    <h3>Iniciar sesión</h3>
                            <hr>
    	                    <form role="form" method="post" action="">
                             <?php
                                  if (isset($_GET['error'])) {
                                    echo "<p>Usuario o contraseña inválido, intente de nuevo</p>";
                                  }
                                 ?>
                                <div class="form-group">
                                    <label for="contact-name"><i class="fa fa-user"></i>Nombre de usuario</label>
                                    <br>
                                    <input type="text" name="usuario" id = "usuario" placeholder="Ingrese nombre de usuario" class="contact-name" id="contact-name">
                                </div>
                                <div class="form-group">
                                    <label for="contact-name"><i class="fa fa-key"></i>Contraseña</label>
                                    <br>
                                    <input type="password" name="password" id = "password" placeholder="Ingrese contraseña" class="contact-name" id="contact-name">
                                </div>
    	                        <button type="submit" name = "submit" class="btn" id = "acceder">Acceder</button>
                                <br>
                                <br>
                            </form>
                        </div>
	                </div>
	            </div>
	        </div>
        </div>

       <!-- pie de pagina -->
        <footer>
            <div class="container">
                <div class="row">
                  <div class="col-sm-2 col-md-2 footer-copyright wow fadeIn">

                  </div>
                  <div class="col-sm-4 col-md-4 footer-copyright wow fadeIn">
                      <p>
                        &copy; 2016 BIBLIOTECA GENERAL - UDO SUCRE.
                      </p>
                  </div>
                  <div class="col-sm-4 col-md-4 footer-copyright wow fadeIn">
                      <p><strong>"DEL PUEBLO VENIMOS, HACIA PUEBLO VAMOS."</strong></p>
                  </div>
                  <div class="col-sm-2 col-md-2 footer-social wow fadeIn">
                      <a href="#"><i class="fa fa-facebook-square"></i></a>
                      <a href="#"><i class="fa fa-twitter-square"></i></a>
                      <a href="#"><i class="fa fa-youtube-square"></i></a>
                  </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="archivos/js/jquery-1.11.1.min.js"></script>
        <script src="archivos/bootstrap/js/bootstrap.min.js"></script>
        <script src="archivos/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="archivos/js/wow.min.js"></script>
        <script src="archivos/js/retina-1.1.0.min.js"></script>
    </body>

</html>
