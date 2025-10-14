<?php
// Ejemplo: Generar las opciones de un selector de año de nacimiento.
echo '<label for="anio">Año:</label>';
echo '<select name="anio" id="anio">';

$anioActual = date('Y');
for ($i = $anioActual; $i >= $anioActual - 100; $i--) {
    echo "<option value='$i'>$i</option>";
}

echo '</select>';

echo '<br>';
echo '<br>';

echo '<label for="mes">Mes:</label>';
echo '<select name="mes" id="mes">';

$mes = 12;
for ($i = $mes; $i > 0; $i--) {
    $selected = ($i == date('m')) ? ' selected' : '';
    echo "<option value='$i'$selected>$i</option>";
}

echo '</select>';

echo '<br>';
echo '<br>';

echo '<label for="dia">Día:</label>';
echo '<select name="dia" id="dia">';

$dia = 31;
for ($i = $dia; $i > 0; $i--) {
    $selected = ($i == date('d')) ? ' selected' : '';
    echo "<option value='$i'$selected>$i</option>";
}

echo '</select>';
?>