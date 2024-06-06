<!DOCTYPE html>
<html lang="es">
<head>
    <title>Descuento</title>
</head>
<body>
    <header>
        <h1>Descuento</h1>
    </header>
    <main>
        <form action="parcial2_p3.php" method="post">
            <label for="computer1">Precio de la primera computadora:</label>
            <input type="number" name="computer1" required>
            <br>
            <label for="computer2">Precio de la segunda computadora:</label>
            <input type="number" name="computer2" required>
            <br>
            <label for="computer3">Precio de la tercera computadora:</label>
            <input type="number" name="computer3" required>
            <br>
            <label for="payment_method">Método de pago:</label>
            <select name="payment_method">
                <option value="credit">Tarjeta de crédito</option>
                <option value="cash">Efectivo</option>
            </select>
            <br>
            <button type="submit">Calcular</button>
        </form>
    </main>
</body>
</html>

<?php
$computer1 = 0;
$computer2 = 0;
$computer3 = 0;
$payment_method = "";
$discount_percentage = 0;

if ($_POST) {
    $computer1 = $_POST["computer1"];
    $computer2 = $_POST["computer2"];
    $computer3 = $_POST["computer3"];
    $payment_method = $_POST["payment_method"];

    if ($payment_method == "credit") {
        $discount_percentage = 0.2;
    } else if ($payment_method == "cash") {
        $discount_percentage = 0.25;
    }

    $cost_computer1 = $computer1;
    $discount_computer1 = $cost_computer1 * $discount_percentage;
    $total_cost_computer1 = $cost_computer1 - $discount_computer1;

    $cost_computer2 = $computer2;
    $discount_computer2 = $cost_computer2 * $discount_percentage;
    $total_cost_computer2 = $cost_computer2 - $discount_computer2;

    $cost_computer3 = $computer3;
    $discount_computer3 = $cost_computer3 * $discount_percentage;
    $total_cost_computer3 = $cost_computer3 - $discount_computer3;

    $total_cost = $total_cost_computer1 + $total_cost_computer2 + $total_cost_computer3;

    echo "La computadora 1 cuesta: $" . number_format($cost_computer1, 2) . "<br>";
    echo "El precio sin descuento es: $" . number_format($total_cost_computer1, 2) . "<br>";
    echo "El descuento es: $" . number_format($discount_computer1, 2) . "<br>";
    echo "El total a pagar es: $" . number_format($total_cost_computer1, 2) . "<br>";
    echo "<br>";

    echo "La computadora 2 cuesta: $" . number_format($cost_computer2, 2) . "<br>";
    echo "El precio sin descuento es: $" . number_format($total_cost_computer2, 2) . "<br>";
    echo "El descuento es: $" . number_format($discount_computer2, 2) . "<br>";
    echo "El total a pagar es: $" . number_format($total_cost_computer2, 2) . "<br>";
    echo "<br>";

    echo "La computadora 3 cuesta: $" . number_format($cost_computer3, 2) . "<br>";
    echo "El precio sin descuento es: $" . number_format($total_cost_computer3, 2) . "<br>";
    echo "El descuento es: $" . number_format($discount_computer3, 2) . "<br>";
    echo "El total a pagar es: $" . number_format($total_cost_computer3, 2) . "<br>";
    echo "<br>";

    echo "El total a pagar por las 3 computadoras es: $" . number_format($total_cost, 2);
}
?>
