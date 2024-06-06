<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Trabajador</title>
        <style>
        body, button, label for{
        font-family: 'Courier New', monospace; 
        }
        p, {
        line-height: 1.5
        }
        </style>
    </head>
    <body>
        <header>
            <h1>Trabajador</h1>
        </header>
        <main>
            <p>Introduzca el valor que gana por hora el trabajador y la cantidad de horas trabajadas. Debe determinar
                la cantidad de dinero que recibirá un trabajador por concepto de las horas extras trabajadas en una empresa, sabiendo
                que cuando las horas de trabajo exceden de 40, el resto se consideran horas extras y que estas se pagan al doble
                de una hora norma cuando no exceden de 8; si las horas extras exceden de 8 se pagan las primeras 8 al doble de lo 
                que se pagan las horas normales y el resto al triple. 
            </p>
            <form action="parcial2_p2.php" method="post">
                <label for="hora_normal">Valor por hora:</label>
                <input type="number" step="0.01" name="hora_normal" id="hora_normal" value="<?php if(isset($_POST['hora_normal'])) echo $_POST['hora_normal']; ?>" required>
                <br>
                <label for="horas_trabajadas">Horas trabajadas:</label>
                <input type="number" step="0.1" name="horas_trabajadas" id="horas_trabajadas" value="<?php if(isset($_POST['horas_trabajadas'])) echo $_POST['horas_trabajadas']; ?>" required>
                <br>
                <button type="submit">Calcular</button>
            </form>
        </main>
    </body>
</html>
<?php
if (isset($_POST['hora_normal']) && isset($_POST['horas_trabajadas'])) {
    $hora_normal = $_POST['hora_normal'];
    $horas_trabajadas = $_POST['horas_trabajadas'];

    $horas_regulares = $horas_trabajadas < 40 ? $horas_trabajadas : 40;
    $pago_regular = $hora_normal * $horas_regulares;

    $horas_extras = $horas_trabajadas - $horas_regulares;
    $pago_extras = $horas_extras > 0 ? ($hora_normal * 2 * $horas_extras) : 0;

    $total_pago = $pago_regular + $pago_extras;

    echo "<br>El trabajador recibirá $" . number_format($total_pago, 2) . " por las " . $horas_trabajadas . " horas trabajadas.";
}
?>
