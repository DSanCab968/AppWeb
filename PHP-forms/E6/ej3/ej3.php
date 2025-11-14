<?php
session_start();
?>
<!DOCTYPE html>
<html lang=”en”>
    <body>
        <?php

            $_SESSION["name"] = $_GET["name"];
         
        ?>
        <a href="ej3_2.php">Ver resultados</a>
    </body>
</html>