<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="indez.php" method="get">
		<input type="text" name="operando1" value="0">
		<select class="" name="operador">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="text" name="operando2" value="0">
		<input type="submit" value="Calcular">
		
	</form>
<?php
if (isset($_GET["operando1"]) && isset($_GET["operando2"]) && isset($_GET["operador"])) {
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	$solucion = 0; 
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
	}

	echo "<center> <h2> RESULTADO : $solucion </h2>";

	

}
	
?>
</body>
</html>
