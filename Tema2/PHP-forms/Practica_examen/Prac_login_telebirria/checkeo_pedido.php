<?php
session_start();
?>
<html>
<head>
    <meta charset='utf-8'>
    <title>Datos loggeo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
   <?php

        $precios=["producto"=>200,"auriculares" => 10,"cargador" => 7,"funda" => 5];

        $total = $precios["producto"];
        foreach($_SESSION["accesorios"] as $accesorio){

            $total += $precios[$accesorio];
        }

        echo "<p>Usuario: ".$_COOKIE["username"]."</p>";

        echo "<p>El precio total del pedido es de ".$total." €.</p>
                <p>Recibira el pedido en menos de 24h en su domicilio: ".$_SESSION["address"]."</p>";

        echo "<div><a href='logout.php'>Cerrar sesion</a></div>";
   ?>
    
</body>
</html>