<?php
$rol = "editor";

if ($rol == "admin") {
    echo "<p>Acceso al panel de administración</p>";
}
else {
    echo "<p>Acceso limitado al panel de contenidos</p>";
}

$isMiembroActivo = false;

$estadoAcceso = "";

$estadoAcceso = $isMiembroActivo ? "Acceso Permitido" : "Cuenta Inactiva";

echo "<p>$estadoAcceso</p>";
?>