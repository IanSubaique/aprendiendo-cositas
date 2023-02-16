<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario</title>
	<style>
		body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 400px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 380px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="formulario.php" method="POST">
		<?php

			$nombre = "";
			$password = "";
			$email = "";
			$pais = "";
			$nivel = "";
			$lenguajes = array();
			
			if(isset($_POST['nombre'])){	//valida si existe este metodo POST
				$nombre = $_POST['nombre'];	//capturando valores
				$password = $_POST['password'];
				$email = $_POST['email'];
				$pais = $_POST['pais'];
				if(isset(_POST['nivel'])){
					$nivel = _POST['nivel'];
				}
				else{
					$nivel = "";
				}

				if(isset($_POST['lenguajes'])){
					$lenguajes = $_POST['lenguajes'];
				}
				else{
					$lenguajes = [];
				}


				$campos = array();

				if($nombre == ""){
					//se anade un mensaje al array
					array_push($campos, "El campo Nombre no pude estar vacío");
				}

				if($password == "" || strlen($password) < 6){
					//se anade un mensaje al array
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
				}

				if($email == "" || strpos($email, "@") === false){	//se busca el @ para validar que el correo sea correcto
					//se anade un mensaje al array
					array_push($campos, "Ingresa un correo electrónico válido.");
				}

				if($pais == ''){
					array_push($campos, "Seleccione un pais de origen");
				}

				if($nivel == ''){
					array_push($campos, "Seleccione un nivel de desarrollo");
				}

				if($lenguajes == "" || count($lenguajes) < 2) {
					array_push($campos. "Seleccione al menos 2 lenguajes");
				}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			}
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value="<?php echo $nombre; ?>">
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password" value="<?php echo $password; ?>">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email" value="<?php echo $email; ?>">
		</p>


		<!-- https://www.youtube.com/watch?v=KDYbAxjvrfo&list=PLvRPaExkZHFkpBXXCsL2cn9ORTTcPq4d7&index=11 -->
		<p>
			Pais de origen: <br>
			<select name="pais" id="">
				<option value="">Selecciona un pais</option>
				<option value="mx"<?php if($pais == "mx") echo "selected" ?>>Mexico</option>
				<option value="eu"<?php if($pais == "eu") echo "selected" ?>>Estados Unidos</option>
				<option value="es"<?php if($pais == "es") echo "selected" ?>>Espana</option>
				<option value="ar"<?php if($pais == "ar") echo "selected" ?>>Argentina</option>
				<option value="cl"<?php if($pais == "cl") echo "selected" ?>>Chile</option>
			</select>
		</p>


		<!-- https://www.youtube.com/watch?v=45MAawcnajs&list=PLvRPaExkZHFkpBXXCsL2cn9ORTTcPq4d7&index=12 -->
		<p>
			Nivel de desarrollo <br>
			<input type="radio" name="nivel" value="principiante" <?php if($nivel =="principiante" echo "checked") ?>> principiante
			<input type="radio" name="nivel" value="Intermedio" <?php if($nivel =="Intermedio" echo "checked") ?>> Intermedio
			<input type="radio" name="nivel" value="Avanzado" <?php if($nivel =="Avanzado" echo "checked") ?>> Avanzado
		</p>


		<!-- https://www.youtube.com/watch?v=gwqTpyZwEY0&list=PLvRPaExkZHFkpBXXCsL2cn9ORTTcPq4d7&index=13 -->
		<p>
			Lenguajes de programacion <br>
			<input type="checkbox" name="lenguajes[]" value="php" <?php if($lenguajes == "php") echo "checked" ?>> PHP <br>
			<input type="checkbox" name="lenguajes[]" value="Javascript" <?php if($lenguajes == "Javascript") echo "checked" ?>> Javascript <br>
			<input type="checkbox" name="lenguajes[]" value="Java" <?php if($lenguajes == "Java") echo "checked" ?>> Java <br>
			<input type="checkbox" name="lenguajes[]" value="Swift" <?php if($lenguajes == "Swift") echo "checked" ?>> Switft <br>
			<input type="checkbox" name="lenguajes[]" value="Python" <?php if($lenguajes == "Python") echo "checked" ?>> Python <br>
		</p>

		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>