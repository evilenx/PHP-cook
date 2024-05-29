<!DOCTYPE html>
<html>
<head>
    <title>Farmacia</title>
</head>
<body>
    <header>
        <h1>Farmacia</h1>
    </header>
    <form action="farm.php" method="post">
        <label for="jugos">Cantidad de jugos:</label><br>
        <input type="number" id="jugos" name="jugos" value="0" min="0"><br>
        <label for="empanadas">Cantidad de empanadas:</label><br>
        <input type="number" id="empanadas" name="empanadas" value="0" min="0"><br>
        <label for="medicamentos">Cantidad de medicamentos:</label><br>
        <input type="number" id="medicamentos" name="medicamentos" value="0" min="0"><br>
        <input type="submit" value="Calcular total">
    </form>
</body>
</html>

<?php
	$jugo = 0.50;
	$empanada = 1.25;
	$medicamento = 5.00;

        $jugos = $_POST['jugos'];
        $empanadas = $_POST['empanadas'];
        $medicamentos = $_POST['medicamentos'];

        $subtotal_jugos = $jugos * $jugo;
        $subtotal_empanadas = $empanadas * $empanada;
        $subtotal_medicamentos = $medicamentos * $medicamento;

        $total_sin_itbms = $subtotal_jugos + $subtotal_empanadas + $subtotal_medicamentos;

        $itbms_jugos = $subtotal_jugos * 0.07;
        $itbms_empanadas = $subtotal_empanadas * 0.07;
        $total_itbms = $itbms_jugos + $itbms_empanadas;

        $total_a_pagar = $total_sin_itbms + $total_itbms;

        echo "El total sin impuestos: $" . number_format($total_sin_itbms, 2) . "<br>";
        echo "El ITBMS: $" . number_format($total_itbms, 2) . "<br>";
        echo "El total a pagar es: $" . number_format($total_a_pagar, 2);
?>

