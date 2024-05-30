<!DOCTYPE html>
<HTML>
  <head>
    <title>Menor y Producto de 3 Números</title>
  </head>
  <body>
    <h1>Menor y Producto de 3 Números</h1>
    <p>Ingresa 3 números enteros y presiona el botón "Calcular" para obtener el menor de los 3 números y el producto de los mismos.</p>
    <form action="ejercicio1.php" method="post">
      <label>Digite el primer número: </label>
      <input type="text" name="num1"><br>
      <label>Digite el segundo número: </label>
      <input type="text" name="num2"><br>
      <label>Digite el tercer número: </label>
      <input type="text" name="num3"><br>
      <input type="submit" value="Calcular">
    </form>
  </body>
</HTML>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

$menor = min($num1, $num2, $num3);


$producto = $num1 * $num2 * $num3; //producto

echo "El menor número es: $menor<br>";
echo "El producto de los 3 números es: $producto";
?>
