<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="Index.php" method="POST" enctype="multipart/form-data">
        <label for="nombre_tarea">Nombre de la tarea:</label>
        <input type="text" id="nombre_tarea" name="nombre_tarea_usuario" required>
        <br><br>
        
        <label for="descripcion_tarea">Descripción de la tarea:</label>
        <textarea id="descripcion_tarea" name="descripcion_tarea" rows="3" cols="50"></textarea>
        <br><br>
        
        <label for="archivo_tarea">Archivo adjunto (máximo 5MB):</label>
        <input type="file" id="archivo_tarea" name="archivo_tarea" accept="*/*">
        <small>Tamaño máximo: 5MB</small>
        <br><br>
        
        <input type="submit" name="añadir_tarea" value="Añadir tarea">
    </form>
</body>
</html>