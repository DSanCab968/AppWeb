<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Session</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <?php

            $_SESSION["nombre"] = $_POST["nombre"];
            $_SESSION["apellidos"] = $_POST["apellidos"];
            $_SESSION["domicilio"] = $_POST["domicilio"];
            $_SESSION["localidad"] = $_POST["localidad"];
            $_SESSION["entrega"] = $_POST["entrega"];
            $_SESSION["ofertas"] = $_POST["ofertas"];
            $_SESSION["size"] = $_POST["size"];
            $_SESSION["ingredientes"] = $_POST["ingredientes"];
            $_SESSION["sugerencias"] = $_POST["sugerencias"];

            echo "<p>Please, check that your information is correct:</p>";
            echo "<ul>
                    <li>Name: " . $_SESSION["nombre"] . "</li>
                    <li>Surname: " . $_SESSION["apellidos"] . "</li>
                    <li>Address: " . $_SESSION["domicilio"] . ", " . $_SESSION["localidad"] . "</li>
                    <li>Entrega: " . $_SESSION["entrega"] . "</li>
                    <li>Ofertas: " . $_SESSION["ofertas"] . "</li>
                    <li>Tamaño bocadillo: " . $_SESSION["size"] . "</li>
                    <li>Ingredientes:
                        <ul>";

                foreach ($_SESSION["ingredientes"] as $ingrediente) {
                    echo "<li>$ingrediente</li>";
                }
            

            echo "      </ul>
                    </li>
                    <li>Sugerencias: " . $_SESSION["sugerencias"] . "</li>

                </ul>";

        ?>

        <div><a href="pago.php">Todo es correcto!</a></div>
        <div><a href="form.html">Volver a la seleccion de pedido</a></div>

    </body>
</html>
