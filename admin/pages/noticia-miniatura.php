<?php
  include_once('conexion.php');

  $query  = "SELECT id, titulo,imagen, date_format(fecha, '%d %M %Y') AS fechia FROM noticia ORDER BY fecha DESC LIMIT 4";
  $res    = mysqli_query($mysqli,$query);
  $count  =   mysqli_num_rows($res);
  $miniatura='';

      if (mysqli_num_rows($res)) {
         while($row=mysqli_fetch_array($res))
        {
            $id = $row['id'];
            $title = $row['titulo'];
            $image = $row['imagen'];
            $fecha = $row['fechia'];

            $miniatura .= '<div class="media">
                                <div class="pull-left">
                                    <a href="noticia.php?pagina='.$id.'"><img src="archivos/subida/'.$image.'" alt=""></a>
                                </div>
                                <div class="media-body justify">
                                    <h5><a href="noticia.php?pagina='.$id.'">'.$title.'</a></h5>
                                    <p>'.$fecha.'</p>
                                </div>
                            </div>';
           
        }
      }
     
?>