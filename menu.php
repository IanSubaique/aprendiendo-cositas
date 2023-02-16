<!-- VENTAJA DE ESTOS ARCHIVOS ES QUE SE PUEDEN OCUPAR EN VARIAS PAGINAS
                Y AL MODIFICAR ESTE SE MODIFICAN TODAS LAS PAGINAS        -->

<div id="menu">
	<?php
		$lista = array('Inicio', 'Servicios', 'Blog','Contacto');
		for($i = 0; $i < count($lista); $i++){
			echo $lista[$i] . " ";
		}
	?>
</div>