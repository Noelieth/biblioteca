<?php
include("conexion.php");

$url = "noticia.php";

$consulta_noticias = "SELECT * FROM noticia";
$rs_noticias = mysqli_query($mysqli, $consulta_noticias);
$num_total_registros = mysqli_num_rows($rs_noticias);
//Si hay registros
if ($num_total_registros > 0) {
	//Limito la busqueda
	$TAMANO_PAGINA = 1;
        $pagina = false;

	//examino la pagina a mostrar y el inicio del registro a mostrar
        if (isset($_GET["pagina"]))
            $pagina = $_GET["pagina"];
        
	if (!$pagina) {
		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina - 1) * $TAMANO_PAGINA;
	}
	//calculo el total de paginas
	$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

	$consulta = "SELECT titulo, cuerpo, imagen, date_format(fecha, '%d') AS dia, date_format(fecha, '%M') AS mes FROM noticia ORDER BY id ASC LIMIT ".$inicio."," . $TAMANO_PAGINA;
	$rs = mysqli_query($mysqli, $consulta);

	$contenido_noticia = '';
	
	while ($row = mysqli_fetch_array($rs)) {
		 	$title = $row['titulo'];
            $content = $row['cuerpo'];
            $day = $row['dia'];
            $month = $row['mes'];
            $img = $row['imagen'];

        $contenido_noticia .= '<div class="noticia-container">
						<div>
						<div class="triangle">
						<img class="img-responsive" src="archivos/subida/'.$img.'" alt="'.$title.'" />
						<div class="date-overlay">
						<span class="uppercase"><a>'.$day.'<br><small>'.$month.'</small></a></span>
						</div> 
						</div> 
						<div class="post-content justify">
						<h2 class="post-title">'.$title.'</h2>
						<p>'.$content.'</p>
						<a href="#" class="open-more">Ver más</a>
						</div> 
						</div> 
						</div>';//fin noticia-container
	}

	///////////////////////// paginacion /////////////////////////
	
	$paginacion = '';
	$paginacion.= '<div class="noticia-pagination"><ul class="pagination">';
	
	if ($total_paginas > 0 && $total_paginas!=1 && $pagina <= $total_paginas) {
		$r_links = $pagina + 1;
		$previo = $pagina - 1;
		$siguiente = $pagina + 1;
		$primer_link = true;

		if ($pagina > 1){
			$previo_link = ($previo<=0)?1:$previo;
			
			$paginacion.= '<li><a href="'.$url.'?pagina='.$primer_link.'" title="Primera"><i class="fa fa-angle-double-left"></i></a></li>';
			
			$paginacion.= '<li><a href="'.$url.'?pagina='.$previo_link.'" data-page="'.$previo_link.'" title="Previa"><i class="fa fa-angle-left"></i></a></li>';
				

			 for($i = ($pagina-2); $i < $pagina; $i++){ //crea links del lado izq
                    if($i > 0){
                        $paginacion .= '<li><a href="'.$url.'?pagina='.$i.'" data-page="'.$i.'" title="Pag. '.$i.'">'.$i.'</a></li>';
                    }
                }
            $primer_link = false;    
		}

		if($primer_link){ //si el primer link es una pag actual
            $paginacion .= '<li class="active">'.$pagina.'</li>';
        }elseif($pagina == $total_paginas){ //si el ultimo link es una pag actual
            $paginacion .= '<li class="active">'.$pagina.'</li>';
        }else{ //link cualquiera actual
            $paginacion .= '<li class="active">'.$pagina.'</li>';
        }

        for($i = $pagina+1; $i < $r_links ; $i++){ //crea los link del lado derecho
            if($i<=$total_paginas){
                $paginacion .= '<li><a href="'.$url.'?pagina='.$i.'" data-page="'.$i.'" title="Pag. '.$i.'">'.$i.'</a></li>';
            }
        }

        if($pagina < $total_paginas){ 
				$siguiente_link = ($i > $total_paginas) ? $total_paginas : $i;
                $paginacion .= '<li><a href="'.$url.'?pagina='.$i.'"  data-page="'.$siguiente_link.'" title="Siguiente"><i class="fa fa-angle-right"></i></a></li>'; //siguiente link
                $paginacion .= '<li class="last"><a href="'.$url.'?pagina='.$total_paginas.'" data-page="'.$total_paginas.'" title="Última"><i class="fa fa-angle-double-right"></i></a></li>'; //ultimo link
        }
        $paginacion.= '</ul></div>';
	}
	
}
?>