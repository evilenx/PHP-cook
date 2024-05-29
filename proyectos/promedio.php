<!DOCTYPE html>
<HTML>
  <head>
    <title>Problema de Practica en PHP</title>
  </head>
  <body>
    <h1>Promedio</h1>
    <p>Calcular el promedio de 3 notas e imprima el resultado, elija el valor de la variable.
    </p>
    </div>

    <body>
      <form action="promedio.php" method="post">
        <label>digite la primera nota: </label>
        <input type="text" name="nota1"><br>
        <label>digite la segunda nota: </label>
        <input type="text" name="nota2"><br>
        <label>digite la tercera nota: </label>
        <input type="text" name="nota3"><br>
        <input type="submit" value="total">
      </form>
    </body>  
</HTML>




<?php
//calcular el promedio de 3 notas e imprimir el resultado
//elegir el valor de la variable 
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$promedio = ($nota1 + $nota2 + $nota3) / 3;

echo "El promedio es: $promedio";


?>



