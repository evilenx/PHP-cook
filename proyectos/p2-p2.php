<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f0f0f0;
        }
    </styleEmanuel Avilés>
    <title>Venta de Artículos</title>
    <script>
        function generarCamposProductos() {
            const cantidad = document.getElementById('cantidadProductos').value;
            const contenedor = document.getElementById('contenedorProductos');
            contenedor.innerHTML = '';

            for (let i = 1; i <= cantidad; i++) {
                contenedor.innerHTML += `
                    <h3>Producto ${i}</h3>
                    <label>Nombre del Producto: </label>
                    <input type="text" name="productos[${i}][nombre]" required><br>
                    <label>Cantidad: </label>
                    <input type="number" name="productos[${i}][cantidad]" required><br>
                    <label>Precio: </label>
                    <input type="number" name="productos[${i}][precio]" required><br>
                `;
            }
        }
    </script>
</head>
<body>
    <h1>Venta de Artículos</h1>
    <h2>Emanuel Avilés</h2>
    <form action="p2-p2.php" method="post">
        <label>Cliente: </label>
        <input type="text" name="cliente" required><br>
        <label>Cantidad de productos: </label>
        <input type="number" id="cantidadProductos" name="cantidadProductos" onchange="generarCamposProductos()" required><br>
        <div id="contenedorProductos"></div>
        <label>Forma de pago: </label>
        <select name="forma_pago" required>
            <option value="tarjeta">Tarjeta de crédito</option>
            <option value="efectivo">Efectivo</option>
        </select><br>
        <input type="submit" value="Calcular total">
    </form>
</body>
</html>



<?php
if (isset($_POST['cliente']) && isset($_POST['cantidadProductos']) && isset($_POST['forma_pago']) && isset($_POST['productos'])) {
    $cliente = $_POST['cliente'];
    $cantidadProductos = $_POST['cantidadProductos'];
    $forma_pago = $_POST['forma_pago'];
    $productos = $_POST['productos'];
    
    $total_sin_descuento = 0;
    echo "<h2>Salida de la Venta</h2>";
    echo "Cliente: $cliente<br>";
    
    foreach ($productos as $producto) {
        $nombre = $producto['nombre'];
        $cantidad = $producto['cantidad'];
        $precio = $producto['precio'];
        $costo_unitario = $precio;
        $total_producto = $cantidad * $precio;
        $total_sin_descuento += $total_producto;

        echo "<h3>Producto: $nombre</h3>";
        echo "Cantidad: $cantidad<br>";
        echo "Precio unitario: $" . number_format($costo_unitario, 2) . "<br>";
        echo "Total por producto: $" . number_format($total_producto, 2) . "<br><br>";
    }

    if ($forma_pago == "tarjeta") {
        $descuento = $total_sin_descuento * 0.20; // 20%
    } else {
        $descuento = $total_sin_descuento * 0.15; // 15%
    }

    $total_a_pagar = $total_sin_descuento - $descuento;

    echo "Total sin descuento: $" . number_format($total_sin_descuento, 2) . "<br>";
    echo "Descuento: $" . number_format($descuento, 2) . "<br>";
    echo "Total a pagar: $" . number_format($total_a_pagar, 2) . "<br>";
} else {
    echo "Por favor, complete todos los campos.";
}
?>

