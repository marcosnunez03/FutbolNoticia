<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>
	<p>Datos introducidos:</p>
	<?php  
	echo "Equipo:";echo $_POST['Equipo']; echo "<br/>";
	echo "Equipo favorito:";echo $_POST['fav']; echo "<br/>";
	echo "Color:";echo $_POST['color']; echo "<br/>";
	echo "Nivel de equipo:";echo $_POST['rango']; echo "<br/>";

	?>
</body>
</html>