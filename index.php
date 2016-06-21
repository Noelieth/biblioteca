<?php
  session_start();
 ?>
 <?php
  include_once("admin/pages/sessions/config.php");
  include_once("admin/pages/sessions/logging.php");
  if (isset($_GET['logout'])) {
    write_mysql_log("ha cerrado sesión", $db);

    session_unset();
    session_destroy();  
  }

  include_once('admin/pages/noticia-reciente.php');
  include_once('admin/pages/noticia-carousel.php');
  ?>

<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BIBLIOTECA GENERAL - UDO SUCRE</title>

        <!-- CSS -->
        <link rel="shortcut icon" type="image/x-icon" href="archivos/img/logo.ico"/>
        <link rel="stylesheet" href="archivos/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="archivos/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="archivos/css/animate.css">
        <link rel="stylesheet" href="archivos/flexslider/flexslider.css">
        <link rel="stylesheet" href="archivos/css/main.css">
        <link rel="stylesheet" href="archivos/css/media-queries.css">
        <meta name="author" content="Noelieth Longart">
        <!-- Modernizer Script para viejos navegadores -->
        <script src="archivos/js/modernizr-2.6.2.min.js"></script>

    </head>

    <body>

        <!-- plugin social facebook -->
        <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>

        <!-- fin plugin facebook     -->

        <!-- menu arriba -->
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
  				<!-- menu  -->
  				<div class="collapse navbar-collapse" id="top-navbar-1">
  					<ul class="nav navbar-nav navbar-right">
  						<li class="active">
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
                  <a href="repositorios.php" class="dropdown-toggle" data-hover="dropdown" data-delay="1000">
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
                <a href="sitemap.php"><i class="fa fa-sitemap"></i>Mapa del Sitio</a>
              </li>
  					</ul>
  				</div>
        </div>
  		</nav>
        <!-- banner -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class = "banner">
                        <img src="archivos/img/banner.png"/>
                        </div>
                    </div>
                </div>
            </div> <!-- fin banner -->
        <!-- noticias recientes -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="news gris">
                          <span><p>Noticias</p></span>
                          <ul>
                            <?php echo $recents;?>
                          </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- fin de noticias recientes -->


        <div class="slider-container"> <!-- Slider noticias-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-9 slider">
                        <div class="flexslider" id="slider-noticias">
                            <ul class="slides">
                                <?php echo $slides; ?> 
                            </ul>
                        </div>
                    </div>

                    <!-- botones laterales derecho -->
                      <div class="col-sm-3 col-md-3">
                        <div class="lateral-der">
                                <div class="botones">
                                    <a href = "#" class = "lista">CATÁLOGO DE KOHA</a>
                                    <br>
                                    <a href = "#" class = "lista">REPOSITORIO DIGITAL</a>
                                    <br>
                                    <a href = "#" class = "lista">UDO SPACE</a>
                                    <br>
                                </div>
                        </div> <!-- fin botones laterales derechos -->
                      </div>

                        <!-- plugin de facebook -->
                        <div class="col-sm-3 col-md-3">
                          <div class="fb-page" data-href="https://www.facebook.com/BibliotecaGeneralSucre" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-height="250">
                              <div class="fb-xfbml-parse-ignore">
                                  <blockquote cite="https://www.facebook.com/BibliotecaGeneralSucre">
                                      <a href="https://www.facebook.com/BibliotecaGeneralSucre">Biblioteca General Núcleo Sucre</a>
                                  </blockquote>
                              </div>
                          </div>
                        </div>
                </div> <!-- fin row -->
            </div> <!-- fin container -->
        </div> <!-- fin container-slider -->

        <!-- pie de pagina -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-md-2 footer-copyright wow fadeIn">
                        <p>
                          <?php
                              if (isset($_SESSION['usuario'])) {
                                  if(($_SESSION['nivel'] == 1)){
                                    echo "<a href='admin/pages/admin.php?tipo=elegir&op=elegir'><i class='fa fa-gear'></i>ADMINISTRACIÓN</a>";
                                  }
                                }
                                else{
                                  echo "<a href='login.php'><i class='fa fa-user'></i>ACCESO</a>";
                                }
                            ?>
                          </p>
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
                        <a href="https://www.facebook.com/BibliotecaGeneralSucre"><i class="fa fa-facebook-square"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                        <a href="https://www.youtube.com/channel/UCwlQ4IYLVr9bdGh_kKh9N9g"><i class="fa fa-youtube-square"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="archivos/js/jquery-2.2.3.min.js"></script>
        <script src="archivos/bootstrap/js/bootstrap.min.js"></script>
        <script src="archivos/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="archivos/js/wow.min.js"></script>
        <script src="archivos/js/retina-1.1.0.min.js"></script>
        <script src="archivos/flexslider/jquery.flexslider-min.js"></script>
        <script src="archivos/js/main.js"></script>
    </body>
</html>
