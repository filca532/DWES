<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Normalizar nombre de usuario</title>
</head>

<body>
    <h1>Normalizar nombre de usuario</h1>
    <?php
        if (isset($_POST["nombre_user_usuario"])) {
            $nombreUsuario = $_POST["nombre_user_usuario"];

            $nombreUsuarioNormalizado = trim($nombreUsuario);
            $nombreUsuarioNormalizado = strtolower($nombreUsuarioNormalizado);
            $nombreUsuarioNormalizado = ucwords($nombreUsuarioNormalizado);

            echo "<p>$nombreUsuario</p>";
            echo "<p>$nombreUsuarioNormalizado</p>";
        };
    ?>
</body>

</html>