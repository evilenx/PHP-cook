<!DOCTYPE html>
<html>
    <head>
	<h1>Menor de los 5 números y su suma</h1>
    </head>
    <body>
	<h3>Emanuel Avilés</h3>
	<p>Ingresa 5 números enteros y presiona el botón "Calcular" para obtener el menor de los 5 números y la suma de los mismos.</p>

	<form action="problema1.php" method="post">
	    <label>Ingresar el primer número: </label>
	    <input type="text" name="n1"><br>
	    <label>Ingresar el segundo número: </label>
	    <input type="text" name="n2"><br>
	    <label>Ingresar el tercer número: </label>
	    <input type="text" name="n3"><br>
	    <label>Ingresar el cuarto número: </label>
	    <input type="text" name="n4"><br>
	    <label>Ingresar el quinto número: </label>
	    <input type="text" name="n5"><br><br>
	    <input type="submit" value="Calcular"><br>
	</form>
    </body>

</html>

<?php
echo "<br>";
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];

$menor = min($n1, $n2, $n3, $n4, $n5); //menor de los 5 números

$suma = $n1 + $n2 + $n3 +  $n4 + $n5; //producto de los 5 números


echo "El menor de los 5 números es: $menor<br>";
echo "La suma de los 5 números es: $suma<br>";
?>

