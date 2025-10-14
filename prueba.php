<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mezclando Mundos</title>
</head>
<body>
    <h1>Página de Bienvenida</h1>
    <p>Esto es HTML puro y duro.</p>

    /<?php
        // ¡Aquí empieza la magia de PHP!
        
        $nombreUsuario = "Alex";
        echo "<p>Hola, " . $nombreUsuario . ". ¡Tu aventura en PHP comienza ahora!</p>";
    ?>

    <p>Y esto... vuelve a ser HTML.</p>

    <!-- Forma corta para imprimir una variable -->
    <p>La hora actual del servidor es: <?= date('H:i:s'); ?></p>
</body>
</html>