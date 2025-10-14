<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <?php
        if (isset($_POST["numero_usuario"]) && (int)$_POST["numero_usuario"] >= 10) {
            $n = (int)$_POST["numero_usuario"];

            $contadorPares = 0;

            for ($i = 0; $i <= $n; $i++) {
                if ($i % 2 == 0) {
                    echo "<p>$i</p>";

                    $contadorPares++;
                }
            };

            echo "<p>Hay $contadorPares numeros</p>";
        } else {
            echo "<p>No se ha recibido ningún número o es menor de 10. Por favor, vuelve al formulario.</p>";
        }
    ?>
    <a href="index.html">Volver a calcular</a>
</body>
</html>