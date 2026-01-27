<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $wine = $_POST["nWine"];
    $winery = $_POST["nWinery"];
    $region = $_POST["nRegion"];
    $type = $_POST["type"];
    $aging = $_POST["aging"];

    require_once "connection.php";

    $connection->query("use Bodega");

    $sql = "insert into wines (name,winery,region,type,aging) values (?,?,?,?,?)";
    $statement = $connection->prepare($sql);
    $statement->bindParam(1,$wine);
    $statement->bindParam(2,$winery);
    $statement->bindParam(3,$region);
    $statement->bindParam(4,$type);
    $statement->bindParam(5,$aging);
    $statement->execute();

    echo "<p>Los datos se introdujeron correctamente</p>";
    #echo "<div><a href='showEvents.php'>Visualizacion de eventos</a></div>";
    echo "<div><a href='formWine.php'>Volver al formulario de eventos</a></div>";


}
?>