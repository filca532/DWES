<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculo Inversión</title>

    <style>
        table {
            border: 1px solid;
        }

        td {
            border: 1px solid;
        }

        th {
            border: 1px solid;
        }

        thead {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Calculo Inversión</Frame>
    </h1>
    <?php
    if (isset($_POST["capital_inicial_usuario"]) && isset($_POST["interes_usuario"]) && isset($_POST["anyos_inversion_usuario"])) {
        $capitalInicial = (int) $_POST["capital_inicial_usuario"];
        $interesAnual = (int) $_POST["interes_usuario"];
        $anyosInversion = (int) $_POST["anyos_inversion_usuario"];

        $interesGanado = 0;
        $balanceAcumulado = 0;

        echo "<table>";
        echo "<thead>Interes Fijo</thead>";
        echo "<tr>";
        echo "<th>Año</th>";
        echo "<th>Interes Ganado</th>";
        echo "<th>Balance Final</th>";
        echo "</tr>";

        for ($i = 1; $i <= $anyosInversion; $i++) {
            $interesGanado = $capitalInicial * ($interesAnual / 100);
            $balanceAcumulado = $capitalInicial + ($interesGanado * $i);


            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$interesGanado</td>";
            echo "<td>$balanceAcumulado</td>";
            echo "</tr>";
        };

        echo "</table>";

        echo "<br>";
        echo "<br>";

        echo "<table>";
        echo "<thead>Interes Compuesto</thead>";
        echo "<tr>";
        echo "<th>Año</th>";
        echo "<th>Interes Ganado</th>";
        echo "<th>Balance Final</th>";
        echo "</tr>";

        for ($i = 1; $i <= $anyosInversion; $i++) {
            $interesGanado = $capitalInicial * ($interesAnual / 100);
            $balanceAcumulado = $capitalInicial + $interesGanado;

            $capitalInicial = $balanceAcumulado;

            echo "<tr>";
            echo "<td>$i</td>";
            echo '<td>' . number_format($interesGanado, 2) . '</td>';
            echo '<td>' . number_format($balanceAcumulado, 2) . '</td>';
            echo "</tr>";
        };

        echo "</table>";
    } else {
        echo "<p>No se ha recibido ningún número. Por favor, vuelve al formulario.</p>";
    }
    ?>

    <br>
    <br>

    <a href="index.html">Volver</a>
</body>

</html>