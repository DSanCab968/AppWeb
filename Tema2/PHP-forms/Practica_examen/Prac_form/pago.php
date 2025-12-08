<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Pago</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
        <?php

           $sizes = ["pequeño" => 4,"mediano" => 6, "grande" => 8, "gigante" => 12];
           $ingredients = ["lechuga" => 1, "tomate" => 1.2, "lomo" => 2, "atun" => 2.5];

           $total = $sizes[$_SESSION["size"]];
           foreach($_SESSION["ingredientes"] as $ingredient){
                $total += $ingredients[$ingredient];
           }

           echo "<p>El precio total a pagar será: ".$total.".</p>";
        ?>

        <div><a href="envio.php">Todo correcto</a></div>
        <div><a href="form.html">Volevr a la seleccion de pedido</a></div>
    </body>
</html>