<!DOCTYPE html>
<HTML>
    <head>
	<title>Venta de Artículos</title>
    </head>
    <body>
	<h1>Venta de Artículos</h1>
	<p>Ingresa los datos del cliente y el produto para calcular el total a pagar.</p>
	<form action="ejercicio2.php" method="post">
	    <label>Nombre del cliente: </label>
	    <input type="text" name="cliente"><br>
	    <label>Nombre del producto: </label>
	    <input type="text" name="producto"><br>
	    <label>Cantidad del producto: </label>
	    <input type="number" name="cantidad"><br>
	    <label>Precio unitario del producto: </label>
	    <input type="number" name="precio"><br>
	    <input type="submit" value="Calcular total">
	</form>
    </body>
</HTML>
<?php
error_reporting(0);

$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$total = $cantidad * $precio; //total sin descuento

if ($total > 100.00) {
    $descuento = $total * 0.10; //calculo del descuento
    $total_descuento = $total - $descuento;
} else {
    $total_descuento = $total;
}

echo "<h2>Resumen de la Venta</h2>";
echo "Cliente: $cliente<br>";
echo "Producto: $producto<br>";
echo "Cantidad: $cantidad<br>";
echo "Precio unitario: $precio<br>";

if ($total > 100.00) {
    echo "Total sin descuento: $" . number_format($total, 2) . "<br>";
    echo "Descuento: $" . number_format($descuento, 2) . "<br>";
}

echo "Total a pagar: $" . number_format($total_descuento, 2) . "<br>";
// Turn off all error reporting
?>
