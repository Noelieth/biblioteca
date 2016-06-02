<?php
  include_once('conexion.php');

  $query  = "select * from noticia order by id limit 4";
  $res    = mysqli_query($mysqli,$query);
  $count  =   mysqli_num_rows($res);
  $slides='';
  $indicators='';
  $counter=0;

      while($row=mysqli_fetch_array($res))
        {

            $title = $row['titulo'];
            $description = $row['cuerpo'];
            $image = $row['imagen'];
            if($counter == 0)
            {
                $indicators .='<li data-target="#slider-noticia" data-slide-to="'.$counter.'" class="active"></li>';
                $slides .= '<li data-thumb="archivos/subida/'.$image.'" alt="'.$title.'" class="active">
                              <a href="noticia.php">
                                 <img src="archivos/subida/'.$image.'" alt="'.$title.'" />
                              </a>
                              <div class="flex-caption">
                                  <h4>'.$title.'</h4>
                              </div>
                            </li>';

            }
            else
            {
                $indicators .='<li data-target="#slider-noticia" data-slide-to="'.$counter.'"></li>';
                $slides .= '<li data-thumb="archivos/subida/'.$image.'" alt="'.$title.'">
                              <a href="noticia.php">
                                 <img src="archivos/subida/'.$image.'" alt="'.$title.'" />
                              </a>
                              <div class="flex-caption">
                                  <h4>'.$title.'</h4>
                              </div>
                            </li>';
            }
            $counter++;
        }
?>