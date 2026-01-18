<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $eventName = $_POST["nEvento"];
    $eventDate = $_POST["fEvento"];
    $eventLocation = $_POST["lEvento"];
    $eventOrganizer = $_POST["oEvento"];

    require_once "../general/connection.php";

    $connection->query("use eventpro");

    $sql = "insert into events (name,date,location,id_organizer) values (?,?,?,?)";
    $statement = $connection->prepare($sql);
    $statement->bindParam(1,$eventName);
    $statement->bindParam(2,$eventDate);
    $statement->bindParam(3,$eventLocation);
    $statement->bindParam(4,$eventOrganizer);
    $statement->execute();

    echo "<p>Los datos se introdujeron correctamente</p>";
    echo "<div><a href='showEvents.php'>Visualizacion de eventos</a></div>";
    echo "<div><a href='eventForm.php'>Volver al formulario de eventos</a></div>";


}
?>