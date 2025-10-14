<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina el número</title>
</head>
<body>
    <h1>Adivina el número</h1>
    
    <?php
    if (!isset($_POST["secreto"])) {
        $secreto = rand(1, 100);
    } else {
        $secreto = $_POST["secreto"];
    }

    if (isset($_POST["intento"])) {
        $intento = $_POST["intento"];
        
        if ($intento == $secreto) {
            echo "<p>¡Correcto! El número era $secreto</p>";
            echo "<a href='adivinarNumero.php'>Jugar otra vez</a>";
        } elseif ($intento > $secreto) {
            echo "<p>Demasiado alto</p>";
        } else {
            echo "<p>Demasiado bajo</p>";
        }
    }

    if (!isset($_POST["intento"]) || $_POST["intento"] != $secreto) {
    ?>
        <form method="post">
            <p>Adivina el número (1-100):</p>
            <input type="number" name="intento" min="1" max="100" required>
            <input type="hidden" name="secreto" value="<?php echo $secreto; ?>">
            <input type="submit" value="Probar">
        </form>
    <?php
    }
    ?>
</body>
</html>