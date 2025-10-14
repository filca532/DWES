<?php
// Ejemplo: Pedir una clave hasta que sea correcta.
$claveCorrecta = "1234";
$intento = '';
$numeroIntentos = 0;

do {

    $intento = rand(1000, 2000);
    $numeroIntentos++;

    echo "<p>Intento $numeroIntentos con la clave: $intento...</p>";
} while (((string) $intento !== $claveCorrecta) && ($numeroIntentos < 100));

if ($intento != $claveCorrecta)
    echo "<p style='color: red;'><strong>No se ha podido acceder</strong></p>";
else
    echo "<p style='color: green;'><strong>Acceso concedido con la clave $intento con $numeroIntentos intentos.</strong></p>";
?>