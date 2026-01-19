<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $asistName=$_POST["nAttendee"];
    $asistEmail=$_POST["eAttendee"];
    $asistTel=$_POST["tAttendee"];
    $asistEvent=$_POST["eventAttendee"];

    require_once "../general/connection.php";
    $connection->query("use eventpro");

    $sql="insert into attendees (name,email,phone,id_event) values (?,?,?,?)";
    $statement=$connection->prepare($sql);
    $statement->bindParam(1,$asistName);
    $statement->bindParam(2,$asistEmail);
    $statement->bindParam(3,$asistTel);
    $statement->bindParam(4,$asistEvent);
    $statement->execute();

    echo "<p>Los datos se introdujeron correctamente</p>";
    echo "<div><a href='showAttendees.php'>Visualizacion de asistentes</a></div>";
    echo "<div><a href='attendeesForm.php'>Volver al formulario de asistentes</a></div>";

}



?>
