<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php

            $_SESSION["name"] = $_GET["name"];
            $_SESSION["surname"] = $_GET["surname"];
            $_SESSION["role"] = "customer";
         
        ?>
        <a href="sesion2Ej2.php">Ver resultados</a>
    </body>
</html>