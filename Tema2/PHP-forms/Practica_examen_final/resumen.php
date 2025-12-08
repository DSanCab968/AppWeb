<?php
session_start();

if (!isset($_SESSION["loggeo"])) {
    header("Location: login.html");
    exit;
}

echo "<ul>DATOS DEL PEDIDO:
    <li>Nombre de usuario: ".$_COOKIE["Usuario"]."</li>
    <li>Producto: ".$_SESSION["producto"]."</li>
    <li>Cantidad: ".$_SESSION["cantidad"]."</li>
    <li>Direccion: ".$_SESSION["direccion"]."</li>
    </ul>";

echo "<div><a href='logout.php'>CERRAR SESION</a></div>";
?>
