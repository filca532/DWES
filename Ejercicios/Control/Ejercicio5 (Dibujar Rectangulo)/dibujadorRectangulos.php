<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Rectangulo</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <h1>Rectangulo</h1>
    <?php
    if (isset($_POST["numero_lado_usuario"]) && isset($_POST["numero_altura_usuario"])) {
        $lado = (int) $_POST["numero_lado_usuario"];
        $altura = (int) $_POST["numero_altura_usuario"];

        for ($i = 0; $i < $altura; $i++) {
            for ($j = 0; $j < $lado; $j++) {
                echo "*";
            }
            echo "<br>";
        }

        echo "<br>";

    } else {
        echo "<p>No se ha recibido ningún número o falta uno. Por favor, vuelve al formulario.</p>";
    }
    ?>
    <a href="index.html">Volver a calcular</a>
</body>

</html>