<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombreOrg = $_POST["nombre"];
    $emailOrg = $_POST["email"];
    $telefonoOrg = $_POST["telefono"];

    require_once "../general/connection.php";

    $sql = "use eventpro";
    $connection->query($sql);

    $sql = "insert into organizers (name,email,phone) values (?,?,?)";
    $statement= $connection->prepare($sql);
    $statement->bindParam(1,$nombreOrg);
    $statement->bindParam(2,$emailOrg);
    $statement->bindParam(3,$telefonoOrg);
    $statement->execute();

    echo "<div><p>Los datos del organizador se registraron correctamente<p></div>";
    echo "<div><a href='modifOrganizers.php'>Ir a modificacion de organizadores</a></div>";
    echo "<div><a href='organizersForm.php'>Volver al formulario de organizadores</a></div>";

}

?>