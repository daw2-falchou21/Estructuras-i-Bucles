<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<form action="Exercicios3.php" method="POST">
		<p>nombre: <input type="text" name="nombre"></p>
		<p>apellido: <input type="text" name="apellido"></p>
		<p>edad: <input type="number" name="edad"></p>
		<input type="color" name="color">
		<select name="fuentetexto">
			<option>Arial</option>
			<option>Sans</option>
			<option>Gotham</option>
			<option>Comic Sans</option>
			<option>Colibri</option>
		</select>
		<input type="submit" value="enviar">
		<input type="checkbox" id="cbox1" value="first_checkbox"><label for="cbox1">Desea guardar la informacion</label>
	</form>

</body>
</html>