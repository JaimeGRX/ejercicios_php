<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<h1>Ejercicio III: Edad</h1>
	


	<form action="#" method="post">
		<div id="edad1">
			<label>Edad 1</label>
			<input type="text" name="edad1">
		</div>

		<div id="edad2">
			<label>Edad 2</label>
			<input type="text" name="edad2">
		</div>

		<div id="edad3">
			<label>Edad 3</label>
			<input type="text" name="edad3">
		</div>

		<div id="boton">
			<input type="submit" value="Enviar" class="boton">
		</div>

	</form>

<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (is_numeric($_POST["edad1"]) && is_numeric($_POST["edad2"]) && is_numeric($_POST["edad3"])) {

		echo ("La edad media es: ").($_POST["edad1"] + $_POST["edad2"] + $_POST["edad3"])/3;

		} else {

		echo "(Falta algún dato o has introducido algún número, por favor revíselo.)";
		}

	}	

?>



</body>
</html>