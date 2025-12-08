<?php
session_start();
?>
<html>
    <head>
        <title>Checkeo pedido</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <?php
            if($_SESSION["loggeo"] == true){
                $_SESSION["producto"] = $_POST["producto"];
                $_SESSION["cantidad"] = $_POST["cantidad"];
                $_SESSION["direccion"] = $_POST["direccion"];

                header("Location: resumen.php");
            }

        ?>
    </body>
</html>