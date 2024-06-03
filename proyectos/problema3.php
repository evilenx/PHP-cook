<!DOCTYPE html>
<HTML>
    <head>
        <title>Préstamo Personal</title>
    </head>
    <body>
        <h1>Préstamo Personal</h1>
        <h3>Emanuel Avilés</h3>
        <p>Ingresa los datos del préstamo para calcular el monto a pagar.</p>
        <form action="problema3.php" method="post">
            <label>Monto del préstamo: </label>
            <input type="number" name="monto"><br>
            <label>Tipo de empleado: </label>
            <select name="empleado">
                <option value="publico">Empleado Público</option>
                <option value="privado">Empleado Privado</option>
            </select><br>
            <input type="submit" value="Calcular monto a pagar">
        </form>
    </body>
</HTML>

<?php
error_reporting(0);
$monto = $_POST['monto'];
$empleado = $_POST['empleado'];

if ($empleado == "publico") {
    $interes = $monto * 0.09; // 9% de interés para empleados públicos
} else {
    $interes = $monto * 0.11; // 11% de interés para empleados privados
}

$monto_a_pagar = $monto + $interes;

echo "<h2>Resumen del Préstamo</h2>";
echo "Monto del préstamo: $" . number_format($monto, 2) . "<br>";
echo "Tipo de empleado: $empleado<br>";
echo "Interés: $" . number_format($interes, 2) . "<br>";
echo "Monto a pagar: $" . number_format($monto_a_pagar, 2) . "<br>";
?>
