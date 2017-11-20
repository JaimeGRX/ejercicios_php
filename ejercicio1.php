<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 1</title>
</head>
<body>
	<h1>Ejercicio I: Nombre compuesto</h1>
	


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
			<input type="submit" value="Enviar">
		</div>

	</form>

<?php
	

		if ( (isset($_POST["nombre"]) && !empty($_POST["nombre"])) && 
		 (isset($_POST["primerape"]) && !empty($_POST["primerape"])) && 
		 (isset($_POST["segundoape"]) && !empty($_POST["segundoape"])) ){

		echo $_POST["nombre"]." ".$_POST["primerape"]." ".$_POST["segundoape"];

		} else {

		echo ("Falta algún dato, por favor revíselo.");
		}

?>

</body>
</html>