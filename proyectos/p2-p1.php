<!DOCTYPE html>
<html lang="es">
    <head>
        <title>problema 1 - empleado</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                padding: 20px;
                background-color: #f0f0f0;
            }
            header {
                text-align: center;
                margin-bottom: 20px;
            }
            main {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            label, input, button {
                display: block;
                margin: 10px 0;
            }
            button {
                padding: 10px 15px;
                background-color: #007BFF;
                color: #ffffff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>problema 1 - empleado</h1>
        </header>
        <main>
            <h3>Enunciado</h3>
            <p>Introduzca el valor que gana por hora el empleado y la cantidad de horas trabajadas. Debe determinar
                la cantidad de dinero que recibirá un empleado por concepto de las horas extras trabajadas en una empresa, sabiendo
                que cuando las horas de trabajo exceden de 40, el resto se consideran horas extras y que estas se pagan al doble
                de una hora norma cuando no exceden de 8; si las horas extras exceden de 8 se pagan las primeras 8 al doble de lo 
                que se pagan las horas normales y el resto al triple. 
            </p>
            <form action="p2-p1.php" method="post">
                <label for="valor_hora">Valor por hora:</label>
                <input type="number" step="0.01" name="valor_hora" id="valor_hora" value="<?php if(isset($_POST['valor_hora'])) echo $_POST['valor_hora']; ?>" required>
                <br>
                <label for="total_horas">Horas trabajadas:</label>
                <input type="number" step="0.1" name="total_horas" id="total_horas" value="<?php if(isset($_POST['total_horas'])) echo $_POST['total_horas']; ?>" required>
                <br>
                <button type="submit">Calcular</button>
            </form>
        </main>
    </body>
</html>
<?php
if (isset($_POST['valor_hora']) && isset($_POST['total_horas'])) {
    $valor_hora = $_POST['valor_hora'];
    $total_horas = $_POST['total_horas'];

    $horas_normales = $total_horas < 40 ? $total_horas : 40;
    $pago_normal = $valor_hora * $horas_normales;

    $horas_extras = $total_horas - $horas_normales;
    if ($horas_extras > 8) {
        $pago_extras = ($valor_hora * 2 * 8) + ($valor_hora * 3 * ($horas_extras - 8));
    } else {
        $pago_extras = $valor_hora * 2 * $horas_extras;
    }

    $pago_total = $pago_normal + $pago_extras;

    echo "<br>El empleado recibirá $" . number_format($pago_total, 2) . " por las " . $total_horas . " horas trabajadas.";
}
?>

