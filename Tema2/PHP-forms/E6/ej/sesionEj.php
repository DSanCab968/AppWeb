<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php

            $_SESSION["name"] = $_GET["name"];
            $_SESSION["surname"] = $_GET["surname"];
        
        ?>
        <a href="sesion2Ej.php">Ver resultados</a>
    </body>
</html>