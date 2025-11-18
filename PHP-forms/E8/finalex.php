<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php

            $_SESSION["nombre"] = $_POST["Nombre"];
            $_SESSION["apellidos"] = $_POST["Apellidos"];
            $_SESSION["domicilio"] = $_POST["Domicilio"];
            $_SESSION["localidad"] = $_POST["Localidad"];
            $_SESSION["entrega"] = $_POST["entrega"];
            $_SESSION["size"] = $_POST["Tamano"];
            $_SESSION["ingredients"] = $_POST["Contenido"];
         
            if ($_SESSION["size"] == "pequeno"){

                $_SESSION["precio"] = 5;

            }elseif($_SESSION["size"] == "mediano"){

                $_SESSION["precio"] = 8;

            }elseif($_SESSION["size"] == "grande"){

                $_SESSION["precio"] = 12;

            }else{

                $_SESSION["precio"] = 16;

            }

            echo "<p>Verifique si su pedido es correcto:</p>";
            echo "<p>Direccion de entrega:",$_SESSION["domicilio"],", ",$_SESSION["localidad"],"</p>";
            echo "<p>Tamaño: ",$_SESSION["size"]," Precio. ",$_SESSION["precio"],"</p>";
        ?>
        <a href="finalex.html">Volver a seleccion de pedido</a>
        <a href="finalex2.php">Confirmar pedido</a>
    </body>
</html>