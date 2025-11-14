<?php
// Ejemplo 1: Escribiendo un log de eventos con el modo 'a' (append)
$logFile = 'events.log';
$event = date('[YYYY-MM-DD HH:MM:SS]') . " - Se ha ejecutado el script." . PHP_EOL;
// PHP_EOL es una constante que inserta el carácter de nueva línea correcto
// para el sistema operativo donde se ejecuta (LF en Linux/Mac, CRLF en Windows).

// file_put_contents() es el hermano escritor de file_get_contents()
// Usamos el flag FILE_APPEND para activar el modo 'a'.
file_put_contents($logFile, $event, FILE_APPEND);

echo "Evento registrado correctamente.";