<!DOCTYPE html>
<html lang="es">
<head>
    <title>triángulo</title>
</head>
<body>
    <header>
        <h1>triángulo</h1>
    </header>
    <main>
        <p>Escriba un programa que lea la longitud de los lados A, B y C de un triángulo. Utilizando 
            las instrucciones if...else. Determine si el triángulo es "Equilátero", "Isósceles" o "Escaleno". 
        </p>
        <form action="parcial_p1.php" method="post">
            <label for="lado1">lado A:</label>
            <input type="number" name="lado1" id="lado1" value="<?php if(isset($_POST['lado1'])) echo $_POST['lado1']; ?>" required>
            <br>
            <label for="lado2">lado B:</label>
            <input type="number" name="lado2" id="lado2" value="<?php if(isset($_POST['lado2'])) echo $_POST['lado2']; ?>" required>
            <br>
            <label for="lado3">lado C:</label>
            <input type="number" name="lado3" id="lado3" value="<?php if(isset($_POST['lado3'])) echo $_POST['lado3']; ?>" required>
            <br>
            <button type="submit">Calculate</button>
        </form>

    </main>
</body>
</html>


<?php
$ladoA = $_POST['lado1'];
$ladoB = $_POST['lado2'];
$ladoC = $_POST['lado3'];

// Check if the lados form a valid triangle
if ($ladoA + $ladoB > $ladoC && $ladoA + $ladoC > $ladoB && $ladoB + $ladoC > $ladoA) {
    // Valid triangle
    $type = '';

    // Determine triangle type
    if ($ladoA == $ladoB && $ladoB== $ladoC) {
        $type = 'Equilátero';
    } elseif ($ladoA == $ladoB || $ladoA== $ladoC|| $ladoB== $ladoC) {
        $type = 'Isósceles';
    } else {
        $type = 'Escaleno';
    }

    // Output the result
    echo "<br>El triángulo es: $type.";
} else {
    // Invalid triangle
    echo "<br>Los lados no forman un triángulo válido. ";
}
?>
