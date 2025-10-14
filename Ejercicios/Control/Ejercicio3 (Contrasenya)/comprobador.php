<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Comprobador contraseña</title>
</head>

<body>
    <h1>Comprobador contraseña</h1>
    <?php
    if (isset($_POST["contrasenya_usuario"])) {
        $contrasenya = (int) $_POST["contrasenya_usuario"];

        $tokenCorrecto = "1234";

        $isTokenCorrecto = false;

        do {
            if ($contrasenya == $tokenCorrecto) {
                $isTokenCorrecto = true;

                echo "<h2 style = color:green;>Acceso Concedido</h2>";
            } else {
                $volverFormulario = 'index.html';

                header('Location: ' . $volverFormulario);
                exit();
            }
        } while (!$isTokenCorrecto);
    } else {
        echo "<p>No se ha recibido ningún dato. Por favor, vuelve al formulario.</p>";
    }
    ?>
    <a href="index.html">Volver a formulario</a>
</body>

</html>