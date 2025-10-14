<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parser de Logs</title>
</head>
<body>
    <h1>Logs de ERROR</h1>
    
    <?php
    $logData = <<<LOG
[2025-07-28 10:00:00] [INFO] User 'ana' logged in successfully.
[2025-07-28 10:01:15] [DEBUG] Database query executed.
[2025-07-28 10:02:30] [ERROR] Failed to connect to payment gateway.
[2025-07-28 10:03:00] [INFO] User 'luis' updated his profile.
[2025-07-28 10:05:00] [ERROR] Division by zero in financial report generator.
LOG;

    // 1. Dividir el log en líneas usando explode()
    $lineas = explode("\n", $logData);
    
    echo "<table border='1'>";
    echo "<tr><th>Fecha</th><th>Nivel</th><th>Mensaje</th></tr>";
    
    // 2. Recorrer cada línea con foreach
    foreach ($lineas as $linea) {
        // 3. Comprobar si contiene [ERROR] con strpos()
        if (strpos($linea, '[ERROR]') !== false) {
            // Separar la línea en partes usando explode()
            $partes = explode('] ', $linea);
            $fecha = str_replace('[', '', $partes[0]);
            $nivel = str_replace('[', '', $partes[1]);
            $mensaje = $partes[2];
            
            echo "<tr>";
            echo "<td>$fecha</td>";
            echo "<td>$nivel</td>";
            echo "<td>$mensaje</td>";
            echo "</tr>";
        }
    }
    
    echo "</table>";
    ?>
</body>
</html>