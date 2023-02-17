<?php

	function multiplicar($n1, $n2){ //Sintaxis de funciones
		return $n1 * $n2;
	}

	function esNumero($n1, $n2){    //Sintaxis de funciones
		if(is_numeric($n1) && is_numeric($n2)){ //comprobacion de tipo de dato
			return true;
		}else{
			return false;
		}
	}

	function mostrarError(){        //Sintaxis de funciones
		echo "<span class='error'>Ingresa solo números</span>";
	}

	function validarCampos(){       //Sintaxis de funciones
		if(isset($_POST['numero01']) && isset($_POST['numero02'])){
			$n1 = $_POST['numero01'];   //si existen las variables se les asigna a n1 y n2
			$n2 = $_POST['numero02'];

			if(esNumero($n1, $n2)){
				echo multiplicar($n1, $n2);
			}else{
				mostrarError();
			}
		}
	}






?>