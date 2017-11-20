<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<h1>Ejercicio II: Nombre compuesto</h1>
	


	<form action="#" method="post">
		<div id="nombre">
			<label>Nombre</label>
			<input type="text" name="nombre">
		</div>

		<div id="primerape">
			<label>1º Apellido</label>
			<input type="text" name="primerape">
		</div>

		<div id="segundoape">
			<label>2º Apellido</label>
			<input type="text" name="segundoape">
		</div>

		<div id="boton">
			<input type="submit" value="Enviar" class="boton">
		</div>

	</form>

<p>
<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if ( (isset($_POST["nombre"]) && !empty($_POST["nombre"]) && !is_numeric($_POST["nombre"])) && 
		 (isset($_POST["primerape"]) && !empty($_POST["primerape"]) && !is_numeric($_POST["primerape"])) && 
		 (isset($_POST["segundoape"]) && !empty($_POST["segundoape"]) && !is_numeric($_POST["segundoape"])) ){

		echo ucwords($_POST["nombre"]." ".$_POST["primerape"]." ".$_POST["segundoape"]);

		} else {

		echo "(Falta algún dato o has introducido algún número, por favor revíselo.)";
		}

	}	

?>

</p>



</body>
</html>