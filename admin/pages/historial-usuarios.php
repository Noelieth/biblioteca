<?php
include("sessions/config.php");

$url = "historial.php";

$query = "SELECT * FROM sesiones";
$rs_query = mysqli_query($db, $query);
$num_total_registros = mysqli_num_rows($rs_query);
//Si hay registros
if ($num_total_registros > 0) {
	//Limito la busqueda
	$TAMANO_PAGINA = 6;
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

	$consulta = "SELECT user_id, message, date_format(date_start, '%d-%m-%Y a las %H:%i:%s %p') AS inicio, date_format(date_end, '%d-%m-%Y a las %H:%i:%s %p') AS fin FROM sesiones ORDER BY log_id ASC LIMIT ".$inicio."," . $TAMANO_PAGINA;
	$rs = mysqli_query($db, $consulta);

	$contenido_historial = '';
	while ($row = mysqli_fetch_array($rs)) {
		 	$usuario = $row['user_id'];
            $msg = $row['message'];
            if($msg == 'ha iniciado sesión'){$fecha = $row['inicio'];}
            elseif($msg == 'ha cerrado sesión'){$fecha = $row['fin'];}
            else{echo "error";}

        $contenido_historial .= '
        	<div class="list-group-item">
               <i class="fa fa-user fa-fw"></i> El usuario <em class="text-muted">'.$usuario.'</em>
                <b>'.$msg.'</b> la fecha <span class="text-muted"><em>'.$fecha.'</em>
                </span>
            </div>'; 
	}
	
	///////////////////////// paginacion /////////////////////////
	
	$paginacion = '';
	$paginacion.= '<div class="historial-pagination"><ul class="pagination">';
	
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