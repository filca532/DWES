<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <?php
        // Comprobamos si la variable 'numero_usuario' ha sido enviada
        if (isset($_POST["numero_usuario"])) {
            // Recuperamos el número del formulario.
            // Lo convertimos a entero para asegurar que es un número.
            $n = (int)$_POST["numero_usuario"];

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $i * $n;
                
                echo "$n x $i = $resultado";
                echo "<br>";
                echo "<br>";
            };
        } else {
            echo "<p>No se ha recibido ningún número. Por favor, vuelve al formulario.</p>";
        }
    ?>
    <a href="index.html">Volver a calcular</a>
</body>
</html>