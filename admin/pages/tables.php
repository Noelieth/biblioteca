<?php 
  session_start();
 ?>
 <?php
  include_once("../../conexion.php");
  $tipo = $_GET['tipo'];
  $op = $_GET['op'];
  if (($tipo == 'usuario') &&( $op == 'mostrar')) {
    $sql = "SELECT * from usuario";

  }elseif(($tipo == 'noticia') &&( $op == 'mostrar')){
    $sql = "SELECT * from noticia";
  }
  elseif(($tipo == 'usuario') &&( $op == 'eliminar')){
    $id = $_GET['id'];
    $sql = "DELETE from usuario where id = '$id'";
    echo "Elemento Borrado.<br>";
  }
  elseif(($tipo == 'noticia') &&( $op == 'eliminar')){
    $id = $_GET['id'];
    $sql = "DELETE from noticia where id = '$id'";
    echo "Elemento Borrado.<br>";
  }
  else{
    $sql = "SELECT * from usuario";
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

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php">BIBLIOTECA GENERAL - PANEL DE CONTROL</a>
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
                        }
                    }        
                else{
                    header("location:../../login.php");
                }
      ?> 
    </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <?php  if ($_SESSION['nivel'] == 1) {
                    ?>
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
        
    <div id="page-wrapper">
            
    <?php 
         if (($tipo == 'usuario') &&( $op == 'mostrar')) { 
            echo "
            <div class='row'>
                <div class='col-md-12'>
                    <h3 class='page-header'>Inicio / Listar - Editar usuarios </h3>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='panel panel-yellow'>
                        <div class='panel-heading'>
                            Usuarios almacenados en la base de datos
                        </div>
                        <div class='panel-body'> 
                            <div class='dataTable_wrapper'>
                                <div class='table-responsive'>
                                    <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Usuario</th>
                                                <th>Password</th>
                                                <th>Email</th>
                                                <th>Nivel</th>
                                                <th>Fecha</th>
                                                <th colspan = '2'>Acción</th>
                                            </tr>
                                        </thead>";
                                         while ($a = mysqli_fetch_assoc($result)) {
                                        echo "
                                        <tbody>
                                            <tr>
                                                <td>".$a['id']."</td>
                                                <td> ".$a['nombre']."</td>
                                                <td> ".$a['apellido']."</td>
                                                <td> ".$a['usuario']."</td>
                                                <td> ".$a['password']."</td>
                                                <td> ".$a['email']."</td>
                                                <td> ".$a['nivel']."</td>
                                                <td> ".$a['Timestamp']."</td>
                                                <td class='btn btn-success'><a href='modificarusuario.php?tipo=usuario&op=modificar&id=".$a['id']."'><i class='fa fa-pencil fa-2x'></i></a></td>
                                                <td class='btn btn-danger'><a href='admin.php?tipo=usuario&op=eliminar&id=".$a['id']."'><i class='fa fa-times-circle fa-2x'></i></a></td>
                                            </tr>
                                        </tbody>";
                                        }
                                    echo "</table>
                                    </div>
                                    </div> 
                                    </div>
                                </div>
                                </div>
                                </div>";
                                }
                                
                elseif(($tipo == 'noticia') &&( $op == 'mostrar')){
                    echo "
                        <div class='row'>
                            <div class='col-md-12'>
                                <h3 class='page-header'>Inicio / Listar - Editar noticias</h3>
                            </div>
                        </div>
                        <div class='panel panel-red'>
                            <div class='panel-heading'>
                                Noticias almacenadas
                            </div>
                            <div class='panel-body'>
                                <div class='dataTable_wrapper'>
                                    <div class='table-responsive'>
                                    <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Título</th>
                                                <th>Cuerpo</th>
                                                <th>Imagen</th>
                                                <th>Fecha</th>
                                                <th colspan = '2'>Acción</th>
                                            </tr>
                                        </thead>";
                                        while ($a = mysqli_fetch_assoc($result)){
                                        echo "<tbody>
                                                    <tr>
                                                        <td>".$a['id']."</td>
                                                        <td> ".$a['titulo']."</td>
                                                        <td> ".$a['cuerpo']."</td>
                                                        <td> ".$a['imagen']."</td>
                                                        <td> ".$a['fecha']."</td>
                                                        <td class='btn btn-success'><a href='modificarnoticia.php?tipo=noticia&op=modificar&id=".$a['id']."'><i class='fa fa-pencil fa-2x'></i></a></td>
                                                        <td class='btn btn-danger'><a href='admin.php?tipo=noticia&op=eliminar&id=".$a['id']."'><i class='fa fa-times-circle fa-2x'></i></a></td>
                                                    </tr>
                                                </tbody>";
                                        }
                                        echo "</table>
                                        <div>
                                        </div> <!-- dataTable_wrapper -->
                                    </div><!-- /.panel-body -->
                                </div><!-- /.panel -->";
                                    }

                            elseif(($tipo == 'elegir') &&( $op == 'elegir')){
                              echo "<div class = 'mensaje'>Escoge una opción</div>";
                            } ?> 

                            <?php
                              }else{
                              echo "<div>No tienes permiso para acceder a esta página</div>";

                            }?>             
                  
    </div> <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
