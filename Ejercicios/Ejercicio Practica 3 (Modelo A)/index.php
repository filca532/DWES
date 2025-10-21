<?php

session_start();

require_once "Task.php";

if (isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

if (isset($_POST['añadir_tarea'])) {
    if (isset($_POST['nombre_tarea_usuario']) && !empty(trim($_POST['nombre_tarea_usuario']))) {

        $title = htmlspecialchars(trim($_POST['nombre_tarea_usuario']));
        $description = isset($_POST['descripcion_tarea']) ? htmlspecialchars(trim($_POST['descripcion_tarea'])) : '';

        $filePath = "";
        $fileName = "";

        $tarea = new Task($title, $description, false, $filePath, $fileName);

        $_SESSION['tasks'][] = $tarea;
    }
}

include 'head.php';

include 'body.php';

include 'foot.php';
?>