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

            

            if($_SESSION["entrega"] == "envio a domicilio"){

                echo "<p>Estimado ".$_SESSION["nombre"]." su pedido llegará a su domicio en 20 minutos.</p>";

            }else{

                echo "<p>Estimado ".$_SESSION["nombre"]." su pedido estará listo para recoger en 10 minutos.</p>";

            }
            

            
        ?>

    </body>
</html>