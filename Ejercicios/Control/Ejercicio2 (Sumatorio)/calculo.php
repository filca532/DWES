<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <?php
        if (isset($_POST["numero_usuario"])) {
            $n = (int)$_POST["numero_usuario"];

            $resultado = 0;

            $contador = 1;

            while ($contador  <= $n) {
                $resultado += $contador;

                $contador++;
            };

            $contador = 1;

            echo "<p>El resultado del sumatorio $contador a $n es: $resultado</p>";
        } else {
            echo "<p>No se ha recibido ningún número. Por favor, vuelve al formulario.</p>";
        }
    ?>
    <a href="index.html">Volver a calcular</a>
</body>
</html>