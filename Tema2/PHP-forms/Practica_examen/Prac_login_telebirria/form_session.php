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

       $_SESSION["name"] = $_POST["nombre"];
       $_SESSION["address"] = $_POST["direccion"];
       $_SESSION["email"] = $_POST["email"];
       $_SESSION["color"] = $_POST["color"];
       $_SESSION["accesorios"] = $_POST["accesorios"];

       echo "<p>Revise la informacion del pedido por favor:</p>
            <ul>Datos:
                <li>Nombre:".$_SESSION["name"]."</li>
                <li>Direccion:".$_SESSION["address"]."</li>
                <li>Email:".$_SESSION["email"]."</li>
                <li>Color de producto:".$_SESSION["color"]."</li>
                <ul>Accesorios:";
                foreach($_SESSION["accesorios"] as $accesorio){
                    echo "<li>".$accesorio."</li>";
                }
        echo "</ul></ul>";

        echo "<div><a href='checkeo_pedido.php'>Todo es correcto</a></div>";
        echo "<div><a href='form.html'>Volver al formulario</a></div>";


   ?>
    
</body>
</html>