<?php
  include_once('conexion.php');

  $query  = "SELECT id, titulo FROM noticia ORDER BY fecha DESC LIMIT 4";
  $res    = mysqli_query($mysqli,$query);
  $count  =   mysqli_num_rows($res);
  $recents='';

      if (mysqli_num_rows($res)) {
         while($row=mysqli_fetch_array($res))
        {
            $id = $row['id'];
            $title = $row['titulo'];

            $recents .= '<li><a href="noticia.php?pagina='.$id.'"">'.$title.'</a></li>';
           
        }
      }
     
?>