<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1 align="center">Calculadora PHP simple</h1>
	<form action="claseNueve.php" method="post">
		<input type="text" name="n1" value="0">
		<select class="" name="opciones">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="n2" value="0">
		<input type="submit" value="Calcular">
	</form>



<?php

if (isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["opciones"])) {
	$numero1 =  $_POST["n1"];
	$numero2 =  $_POST["n2"];
	$opciones = $_POST["opciones"];
	$resultados = 0;
	if ($opciones == "+") {
		$resultados = $numero1 + $numero2;
				# code...
	}elseif ($opciones == "-") {
		$resultados = $numero1 - $numero2;
	}

	elseif ($opciones == "*") {
		$resultados = $numero1 * $numero2;
	}

	else 
	{
		$resultados = $numero1 / $numero2;
	}

	echo "<center><h2>RESULTADO: $resultados</h2>";
}

?>



</body>
</html>