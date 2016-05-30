<?php
  session_start();
 ?>
 <?php
  if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
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
        <link rel="stylesheet" href="archivos/css/main.css">
        <link rel="stylesheet" href="archivos/css/media-queries.css">
    </head>

    <body>

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
                        <li>
                            <a href="index.php"><i class="fa fa-home"></i>Inicio</a>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-th-large"></i>Nosotros<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                <li><a href="presentacion.php">Presentación</a></li>
                                <li class="active"><a href="historia.php">Historia</a></li>
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
                    <div class="col-sm-12">
                        <div class = "banner">
                        <img src="archivos/img/banner.png"/>
                        </div>
                    </div>
                </div>
            </div> <!-- fin banner -->
           <!--///////////////////// RUTA DE NAVEGACION/////////////////////////////////////-->
        <div class="ruta-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <ol class="breadcrumb ruta">
                            <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
                            <li class="active">Nosotros</li>
                            <li class="active">Reseña Histórica</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--///////////////////// TITULO /////////////////////////////////////-->
        <div class="titulo-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="titulo">
                            <h3><i class="fa fa-history"></i>RESEÑA HISTÓRICA</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- //////////////  RESENIA HISTORICA //////////////// -->
        <div class="presentation-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                    <div class="timeline-history overflow">
                    <div class="timeline-title text-center">
                        <p class="btn btn-common">Biblioteca General Núcleo de Sucre</p>
                    </div>
                    <!-- **************************CARD 1************************************* -->
                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="cuadro timeline">
                                <div class="cuadro-wrapper">
                                    <div class="triangulo">
                                        <img src="archivos/img/historia/1.jpg" class="img-responsive">
                                        <div class="fecha-overlay">
                                           <span class="anio"><h3>1960</h3></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="historia-content overflow">
                                    <h3 class="historia-title ">Fundación</h3>
                                    <input type="checkbox" class="read-more-state" id="post-1"/>
                                    <p class="read-more-wrap">La Biblioteca General de la Universidad de Oriente, Núcleo de Sucre; fue fundada en al año 1960, simultáneamente con el inicio de los Cursos Básicos,   satisfaciendo las necesidades de  información requeridas en esa época para el comienzo de las actividades de docencia;
                                        <span class="read-more-target">así como la Investigación y Extensión surgientes con el nacimiento  de esta Institución, dicha biblioteca comenzó con un fondo bibliográfico de 200 textos en inglés (Según entrevista a la Sra. Ovidia de Grau (QEPD), siendo el primer encargado de su jefatura el Sr. Manuel Sánchez(QEPD), este señor creo los criterios para el manejo de la misma.
                                        <br>La Biblioteca de la Universidad de Oriente Núcleo de Sucre, ha soportado una serie de cambios y transformaciones en el transcurso del tiempo, desde su fundación hasta los actuales momentos, cuando se fortalece realmente con su estructura, por ello se hace necesario indicar en forma resumida, las etapas por las que ha pasado esta Unidad de Información.
                                        </span>
                                    </p>
                                    <label for="post-1" class="read-more-trigger"></label>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    <!-- **************************CARD 2************************************* -->

                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="cuadro timeline">
                                <div class="cuadro-wrapper">
                                    <div class="triangulo">
                                        <img src="archivos/img/historia/1.jpg" class="img-responsive" alt="">
                                        <div class="fecha-overlay">
                                           <span class="anio"><h3>1965</h3></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="historia-content overflow">
                                    <h3 class="historia-title ">Acervo Bibliográfico</h3>
                                    <p>Para 1965, estaba procesando técnicamente el Acervo Bibliográfico existente y se dio inicio a planes de intercambio Bibliográfico, a través de adquisiciones por donaciones.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-history overflow">
                    <!-- **************************CARD 3************************************* -->

                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="cuadro timeline">
                                <div class="cuadro-wrapper">
                                  <div class="triangulo">
                                      <img src="archivos/img/historia/1.jpg" class="img-responsive" alt="">
                                      <div class="fecha-overlay">
                                         <span class="anio"><h3>1966</h3></span>
                                     </div>
                                  </div>
                                </div>
                                <div class="historia-content overflow">
                                   <h3 class="historia-title ">Seccionamiento</h3>
                                   <input type="checkbox" class="read-more-state" id="post-2"/>
                                   <p class="read-more-wrap">Para el año de 1966, después de constituida la Biblioteca, esta sufre un seccionamiento, por cuanto una vez creada la Escuela de Ciencias, todo el Acervo Bibliográfico relativo a estas especialidades: (Biología, Física, Química, Matemáticas), pasa a constituir una Biblioteca para la referida Escuela, dependiendo en el aspecto Técnico y Administrativo de la Biblioteca Central, para aquel entonces.
                                       <span class="read-more-target">así como la Investigación y Extensión surgientes con el nacimiento  de esta Institución, dicha biblioteca comenzó con un fondo bibliográfico de 200 textos en inglés (Según entrevista a la Sra. Ovidia de Grau (QEPD), siendo el primer encargado de su jefatura el Sr. Manuel Sánchez(QEPD), este señor creo los criterios para el manejo de la misma.
                                       <br>Posteriormente ante la falta de espacio físico que restringía su crecimiento y ampliación, de lo que quedaba de la referida Biblioteca, motivó a que se organizaran distintas Bibliotecas en las Escuelas de Educación, Ciencias Sociales y Administración, satisfaciendo la demanda de Servicio Bibliográfico de estas Escuelas, hasta donde sus limitados fondos bibliográficos se lo permitían; ya que su existencia fue muy breve. También se mudaron las publicaciones periódicas una parte para la escuela de Ciencias (conocida actualmente como sala de vidrio) en la cual aún funciona, y la Sala de Matemáticas, ambas conservan las revistas de sus áreas.
                                       </span>
                                   </p>
                                   <label for="post-2" class="read-more read-more-trigger"></label>
                                   <br><br>
                               </div>
                            </div>
                        </div>
                    <!-- **************************CARD 4************************************* -->

                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="cuadro timeline">
                                <div class="cuadro-wrapper">
                                  <div class="triangulo">
                                      <img src="archivos/img/historia/1.jpg" class="img-responsive" alt="">
                                      <div class="fecha-overlay">
                                         <span class="anio"><h3>1973</h3></span>
                                     </div>
                                  </div>
                                </div>
                                <div class="historia-content overflow">
                                    <h3 class="historia-title ">Nueva edificación</h3>
                                    <p>Para el año 1973, se construyó una nueva edificación, aunque no adecuada para Biblioteca, reagrupándose de nuevo los Fondos Bibliográficos del Núcleo, que se encontraban dispersos entre las distintas Bibliotecas, de las Escuelas ya mencionadas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="timeline-history overflow">
                    <!-- **************************CARD 5************************************* -->

                    <div class="timeline-divider overflow padding-bottom">
                        <div class="col-sm-6 padding-right arrow-right wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="cuadro timeline">
                                <div class="cuadro-wrapper">
                                    <div class="triangulo">
                                        <img src="archivos/img/historia/1.jpg" class="img-responsive" alt="">
                                        <div class="fecha-overlay">
                                           <span class="anio"><h3>1980</h3></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="historia-content overflow">
                                    <h3 class="historia-title">Dirección General de Bibliotecas</h3>
                                    <p>Para el año 1980, todas las Normas de Procesamiento Técnico de todo el material Bibliográfico del Sistema de Biblioteca de la U.D.O. es absorbida por la Dirección General de Bibliotecas.</p>
                                </div>
                            </div>
                        </div>
                    <!-- **************************CARD 6************************************* -->

                        <div class="col-sm-6 padding-left padding-top arrow-left wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="cuadro timeline">
                                <div class="cuadro-wrapper">
                                    <div class="triangulo">
                                        <img src="archivos/img/historia/1.jpg" class="img-responsive" alt="">
                                        <div class="fecha-overlay">
                                            <span class="anio"><h3>Actual</h3></span>
                                       </div>
                                    </div>
                                </div>
                                <div class="historia-content overflow">
                                    <h3 class="historia-title ">Nueva biblioteca</h3>
                                    <p>En los actuales momentos se está construyendo un edificio para la Biblioteca que ya tiene más de 30 años en ese proceso y hasta la fecha está sin culminar y no se sabe para cuándo estará en funcionamiento completamente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>

        <div class = "espacio"></div>


        <!-- pie de pagina -->
        <footer>
            <div class="container">
               	<!-- <div class="footer-border"></div> -->
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
        <script src="archivos/js/jquery-1.11.1.min.js"></script>
        <script src="archivos/bootstrap/js/bootstrap.min.js"></script>
        <script src="archivos/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="archivos/js/wow.min.js"></script>
        <script src="archivos/js/retina-1.1.0.min.js"></script>
    </body>
</html>
