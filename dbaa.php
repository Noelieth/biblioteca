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
                        <li class="dropdown active">
                          <a href="repositorios.php" class="dropdown-toggle" data-hover="dropdown" data-delay="1000">
                              <i class="fa fa-database"></i>Repositorios<span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-left" role="menu">
                              <li class="active"><a href="dbaa.php">Bases de datos</a></li>
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
                            <li class="active">Bases de datos</li>
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
                            <h3><i class="fa fa-database"></i>BASES DE DATOS DE ACCESO ABIERTO</h3>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- ////////////CONTENEDOR DE LAS DB //////////////////////////////////////-->
        <div class = "presentation-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                       <section id="databases">
        <div class="container">
            <div class="box">
                <ul class="db-filter">
                    <li><a class="btn btn-primary active" href="#" data-filter="*">Todas</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".nacionales">Nacionales</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".espaniol">En Español</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".otrosidiomas">Otros Idiomas</a></li>
                </ul><!--/#filter-->
                <ul class="db-items col-4">
                <div class="col-sm-3">
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/benthamopen.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://benthamopen.com/index.php"><i class="fa fa-link"></i> Visitar</a>             
                                </div>
                            </div>
                            <h5>Bentham Open.</h5>
                        </div>
                    </li><!--/.bd-item-->

                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/unam.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://biblioteca.ibt.unam.mx/vcba/index.php"><i class="fa fa-link"></i> Visitar</a>  
                                </div>
                            </div> 
                            <h5>Biblioteca Virtual de Biotecnología para las Américas.</h5>         
                        </div>
                    </li><!--/.bd-item-->
                   
                    <li class="db-item nacional espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/bvs.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.bireme.br/php/index.php? lang=es"><i class="fa fa-link"></i> Visitar</a>        
                                </div> 
                            </div>
                            <h5>Biblioteca Virtual en Salud (BIREME).</h5>          
                        </div>           
                    </li><!--/.bd-item-->

                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/bioline.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.bioline.org.br/"><i class="fa fa-link"></i> Visitar</a>          
                                </div>   
                            </div>
                            <h5>Bioline Internacional.</h5>        
                        </div>           
                    </li><!--/.bd-item-->

                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/biomedcentral.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.biomedcentral.com/"><i class="fa fa-link"></i> Visitar</a>          
                                </div>  
                            </div>
                            <h5>BioMed Central.</h5>  
                        </div>       
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/bioone.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.bioone.org/search/advanced"><i class="fa fa-link"></i> Visitar</a>           
                                </div>  
                            </div>
                            <h5>BioOne.</h5>         
                        </div>           
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/cellmigration.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.cellmigration.org/index.shtml"><i class="fa fa-link"></i> Visitar</a>          
                                </div>  
                            </div>
                            <h5>Cell Migration Gateway.</h5>  
                        </div>       
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/digitalcsic.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://digital.csic.es/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>Digital CSIC.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                     <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/doaj.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="https://doaj.org/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>DOAJ.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/redib.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.erevistas.csic.es/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>E-revist@s.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/freebooks4doctors.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.freebooks4doctors.com/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>Free Books 4 Doctors.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/mhikari.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.m-hikari.com/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>Hikari.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/imbiomed.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.imbiomed.com.mx/1/1/catalogo.html"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>IMBIOMED.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/iop.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.iop.org/"><i class="fa fa-link"></i> Visitar</a>           
                                </div>   
                            </div>
                            <h5>Institute of Physics (IOP).</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/intermedicina.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.intermedicina.com/Revfree.htm"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Intermedicina.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/jstor.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.jstor.org/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>J-STOR.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/springerlink.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://link.springer.com/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Springer Link.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/lilacs.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://bases.bireme.br/cgibin/wxislind.exe/iah/online/?IsisScript=iah/iah.xis&base=LILACS&lang=e"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>LILACS.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/usnationallibrary.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.ncbi.nlm.nih.gov/pubmed"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>US National Library of Medicine National Institute of Health.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/redalyc.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.redalyc.org/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Redalyc.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol nacionales">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/revencyt.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.revencyt.ula.ve/revencyt/index.jsp"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>REVENCYT.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/scielo.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.scielo.org/php/index.php? lang=es"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>SCIELO.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item otrosidiomas">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/scitable.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.nature.com/scitable"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Scitable.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item nacionales espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/bibliodar.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.bibliodar.mppeu.gob.ve"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>BIBLIODAR.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/bid.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://publications.iadb.org/facet-view? localeattribute=es&field=type_view"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Banco Interamericano de Desarrollo.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/idb.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://data.iadb.org/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>IDB.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/oei.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.oei.es/bibliotecadigital.php"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca digital de la Organización de Estados Iberoamericanos.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol nacionales">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/pnud.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.ve.undp.org/content/venezuela/es/home/library.html"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca de publicaciones digitales del PNUD.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/cepal.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.cepal.org/biblioteca/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca CEPAL.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/clades.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.clades.cl/documentos/documentos.htm"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Biblioteca del Centro Latino Americano de Desarrollo Sustentable (CLADES).</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol nacionales">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/saberucv.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://saber.ucv.ve/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Saber UCV.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol nacionales">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/saberula.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.saber.ula.ve/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Saber ULA.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/rad.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://www.rad.unam.mx/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Red de Acervos Digitales.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                    <li class="db-item espaniol">
                        <div class="item-inner">
                            <div class="db-image">
                                <img src="archivos/img/dbaa/gredos.png" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-primary" href="http://gredos.usal.es/jspui/"><i class="fa fa-link"></i> Visitar</a>
                                </div>   
                            </div>
                            <h5>Gredos.</h5>        
                        </div>         
                    </li><!--/.bd-item-->
                </ul>   
            </div><!--/.box-->
        </div><!--/.container-->
    </section> 
                    </div>
                </div>
            </div>
        </div>
        <div class = "espacio"></div>


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
        <script src="archivos/js/jquery-1.11.1.min.js"></script>
        <script src="archivos/bootstrap/js/bootstrap.min.js"></script>
        <script src="archivos/js/jquery.isotope.min.js"></script>
        <script src="archivos/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="archivos/js/wow.min.js"></script>
        <script src="archivos/js/retina-1.1.0.min.js"></script>
        <script src="archivos/js/dbaa.js"></script>
    </body>
</html>
