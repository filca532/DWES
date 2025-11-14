<?php
?>

<html>

<head>
    <title>Simulacion Examen</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>PAISES DE LA UNIÓN EUROPEA</h1>
    <form>
        <?php
        include "views/listaPaises.php";
        ?>

        <br>

        <fieldset>
            <legend>Pais de la unión europeas</legend>
            <label for="pais">Pais:</label>
            <input type="text" id="pais" name="pais">
            <br>
            <br>
            <label for="capital">Capital:</label>
            <input type="text" id="capital" name="capital">
            <br>
            <br>
            <button type="submit" action="add">Añadir pais</button>
            <button type="submit">Limpiar Campos</button>
        </fieldset>
    </form>
</body>

</html>