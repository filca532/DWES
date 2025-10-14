<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Creadora de Slugs</title>
</head>

<body>
    <h1>Creadora de Slugs</h1>

    <?php
    if (isset($_POST["cadena_usuario"])) {
        $cadena = $_POST["cadena_usuario"];

        function crearSlug($cadena): string
        {
            $cadenaFormateada = strtolower($cadena);
            $cadenaFormateada = str_replace(' ', '-', $cadenaFormateada);
            $cadenaFormateada = preg_replace("/[^a-z0-9-]+/", '', $cadenaFormateada);

            return $cadenaFormateada;
        }

        $slug = crearSlug($cadena);

        echo "<p>Cadena original: <strong>$cadena</strong></p>";
        echo "<p>Slug generado: <strong>$slug</strong></p>";
    } else {
        echo "<p>Introduce una cadena de texto en el formulario para generar el slug.</p>";
    }
    ?>
</body>

</html>