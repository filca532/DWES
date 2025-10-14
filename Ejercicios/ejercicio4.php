<?php
$diasParaEvento = 10;
$textoMostrar = "";

for ($i = $diasParaEvento; $i >= 0; $i--) {
    $diaActual = date("d") + $diasParaEvento;

    $diaMostrado = $diaActual - $i;
    echo "<h2>$diaMostrado</h2>";

    if ($diaMostrado == $diaActual) {
        break;
    }

    for ($j = $diasParaEvento; $j >= $i; $j--) {

        echo "<p>Faltan $j días para el evento...</p>";
    }
}

echo "<h2>¡Hoy es el gran día!</h2>"
?>