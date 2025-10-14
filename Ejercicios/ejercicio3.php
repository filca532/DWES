<?php
$nuevosEmpleados = [
    "Ana García",
    "Carlos Rodríguez",
    "Beatriz Fernández",
    "David Martínez"
];

echo "<h2>Directorio de Nuevos Empleados</h2>";

echo "<ul>";
foreach ($nuevosEmpleados as $empleado) {
    echo "<li>$empleado</li>";
}
echo "</ul>";
?>