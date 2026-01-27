<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $wine = $_POST["idWine"];
    $grape = $_POST["idGrape"];
    $percentage = $_POST["percentage"];

    require_once "connection.php";

    $connection->query("use Bodega");

    $sql = "insert into composition (wine,grape,percentage) values (?,?,?)";
    $statement = $connection->prepare($sql);
    $statement->bindParam(1,$wine);
    $statement->bindParam(2,$grape);
    $statement->bindParam(3,$percentage);
    $statement->execute();

    echo "<p>Los datos se introdujeron correctamente</p>";
    #echo "<div><a href='showEvents.php'>Visualizacion de eventos</a></div>";
    echo "<div><a href='formComposition.php'>Volver al formulario de composicion</a></div>";


}
?>