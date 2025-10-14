<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>
<body>
    <h1>Factorial</Frame></h1>
    <?php
        if (isset($_POST["numero_usuario"])) {
            $n = (int)$_POST["numero_usuario"];

            $resultado = 1;

            $contador = 1;

            while ($contador <= $n) {
                $resultado = $resultado * $contador;
                $contador++;
            }

            echo "<p>El factorial de $n es: $resultado</p>";
        } else {
            echo "<p>No se ha recibido ningún número. Por favor, vuelve al formulario.</p>";
        }
    ?>
    <a href="index.html">Volver a calcular</a>
</body>
</html>