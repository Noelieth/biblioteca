<?php 
  session_start();
 ?>
 <?php
  include_once("../../conexion.php");
  $tipo = isset($_GET['tipo']);
  $op = isset($_GET['op']);
  if (($tipo == 'usuario') &&( $op == 'mostrar')) {
    $sql = "SELECT * from usuario";

  }elseif(($tipo == 'noticia') &&( $op == 'mostrar')){
    $sql = "SELECT * from noticia";
  }
  elseif(($tipo == 'usuario') &&( $op == 'eliminar')){
    $id = $_GET['id'];
    $sql = "DELETE from usuario where id = '$id'";
    echo "Elemento Borrado. <br>";
  }
  elseif(($tipo == 'noticia') &&( $op == 'eliminar')){
    $id = $_GET['id'];
    $sql = "DELETE from noticia where id = '$id'";
    echo "Elemento Borrado. <br>";
  }
  else{
    $sql = "SELECT * from usuaio";
  }
  $result = $mysqli->query($sql);
  $mysqli->close();
 ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BIBLIOTECA GENERAL - PANEL DE ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">BIBLIOTECA GENERAL - PANEL DE CONTROL</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown usuario-->
                <?php
                    if (isset($_SESSION['usuario'])) {
                        if(($_SESSION['nivel'] == 1)){
                            echo"<li class='dropdown'>
                                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                                        <i class='fa fa-user fa-fw'></i>  <i class='fa fa-caret-down'></i>";
                                echo "<div class='pull-left'>Bienvenido, ".$_SESSION['usuario']."</div></a>";
                             echo"<ul class='dropdown-menu dropdown-user'>
                                    <li><a href='../../archivos/manual-de-usuario.pdf'><i class='fa fa-book fa-fw'></i>Manual de usuario</a>
                                    </li>
                                    <li class='divider'></li>
                                    <li><a href='../../index.php?logout=true'><i class='fa fa-sign-out fa-fw'></i>Cerrar sesión</a>
                                    </li>
                                </ul>
                            </li>";
                       ?>
    </ul>
            <!-- /.navbar-top-links -->

            <!-- ///////////////////MENU LATERAL ////////////////////-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admin.php"><i class="fa fa-th-large fa-fw"></i> Panel</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="agregarusuario.php"><i class="fa fa-plus-circle"></i> Agregar usuario</a>
                                </li>
                                <li>
                                    <a href="tables.php?tipo=usuario&op=mostrar"><i class="fa fa-edit"></i> Listar/Editar usuario</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Noticias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="publicarnoticia.php"><i class="fa fa-plus-circle"></i> Agregar noticia</a>
                                </li>
                                <li>
                                    <a href="tables.php?tipo=noticia&op=mostrar"><i class="fa fa-edit"></i> Listar/Editar noticia</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="../../index.php"><i class="fa fa-home fa-fw"></i> Página de Inicio</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- /////////////////////CONTENEDOR CENTRAL ////////////////////-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Inicio</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-1">
                                    <i class="fa fa-plus-circle fa-2x"></i>
                                </div>
                                <div class="col-xs-2">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <a href="agregarusuario.php">
                            <div class="panel-footer">
                                <span class="pull-left">Agregar usuario</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-1">
                                    <i class="fa fa-plus-circle fa-2x"></i>
                                </div>
                                <div class="col-xs-2">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <a href="publicarnoticia.php">
                            <div class="panel-footer">
                                <span class="pull-left">Agregar noticia</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-1">
                                    <i class="fa fa-th-list fa-2x"></i>
                                </div>
                                <div class="col-xs-2">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <a href="tables.php?tipo=usuario&op=mostrar">
                            <div class="panel-footer">
                                <span class="pull-left">Listar/Editar usuario</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-1">
                                    <i class="fa fa-th-list fa-2x"></i>
                                </div>
                                <div class="col-xs-2">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                            </div>
                        </div>
                        <a href="tables.php?tipo=noticia&op=mostrar">
                            <div class="panel-footer">
                                <span class="pull-left">Listar/Editar noticia</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/admin.js"></script>

</body>
 <?php
            } //fin si usuario nivel 1
       }  //fin si usuario      
        else{
            header("location:../../login.php");
        }
      ?> 
</html>
