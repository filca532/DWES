<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de Cuadrados</title>
</head>

<body>
    <h1>Calcular Metrica</h1>
    <?php
    if (isset($_POST["serie_numeros_usuario"])) {
        $serieNumeros = $_POST["serie_numeros_usuario"];

        $arrayNumeros = explode(",", $serieNumeros);

        function calcularMetricas($arrayNumeros): array
        {
            $totalTareas = sizeof($arrayNumeros);

            $totalHoras = 0;

            for ($i = 0; $i < sizeof($arrayNumeros); $i++) {
                $totalHoras += $arrayNumeros[$i];
            }

            $mediaHoras = $totalHoras / $totalTareas;

            return [
                'Total tareas' => $totalTareas,
                'Total horas' => $totalHoras,
                'Media horas' => $mediaHoras
            ];
        }

        $arrayMetricas = calcularMetricas($arrayNumeros);

        foreach ($arrayMetricas as $key => $value) {
            echo "<p>$key: $value</p>";
        }
        ;
    }
    ?>

    <a href="index.html">Volver</a>
</body>

</html>