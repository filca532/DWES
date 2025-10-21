<?php

// body.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Añadir Nueva Tarea</h2>
    <form action="index.php" method="POST" enctype="multipart/form-data">
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

    <hr>

    <h2>Tareas Pendientes</h2>
    <?php
    // Comprobar si existe la variable de sesión 'tasks' y si tiene elementos.
    if (isset($_SESSION['tasks']) && is_array($_SESSION['tasks']) && count($_SESSION['tasks']) > 0) {
        echo '<ul>';
        // Iterar sobre el array de tareas.
        foreach ($_SESSION['tasks'] as $task) {
            // Asegurarse de que el objeto es una instancia de la clase Task y tiene el método getTitle().
            if ($task instanceof Task) {
                $title = htmlspecialchars($task->getTitle());
                $description = htmlspecialchars($task->getDescription());
                $completed = $task->getCompleted() ? '✅ Completada' : '⏳ Pendiente';

                echo "<li>";
                echo "<strong>Título:</strong> $title ($completed)";
                // Mostrar la descripción solo si no está vacía.
                if (!empty($description)) {
                    echo "<br><em>Descripción:</em> $description";
                }
                echo "</li>";
            }
        }
        echo '</ul>';
    } else {
        // Mensaje si no hay tareas.
        echo '<p>No hay tareas añadidas aún.</p>';
    }
    ?>
</body>
</html>