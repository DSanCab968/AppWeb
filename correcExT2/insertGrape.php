<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $variety = $_POST["vGrape"];
    $origin = $_POST["oGrape"];
    $skin = $_POST["scGrape"];
    $flavour = $_POST["fGrape"];

    require_once "connection.php";

    $connection->query("use Bodega");

    $sql = "insert into grapes (variety,origin,skin_color,flavour) values (?,?,?,?)";
    $statement = $connection->prepare($sql);
    $statement->bindParam(1,$variety);
    $statement->bindParam(2,$origin);
    $statement->bindParam(3,$skin);
    $statement->bindParam(4,$flavour);
    $statement->execute();

    echo "<p>Los datos se introdujeron correctamente</p>";
    #echo "<div><a href='showEvents.php'>Visualizacion de eventos</a></div>";
    echo "<div><a href='formGrape.php'>Volver al formulario de eventos</a></div>";


}
?>