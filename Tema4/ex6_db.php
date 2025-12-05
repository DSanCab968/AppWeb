<?php
$dsn = "mysql:host=localhost;dbname=Library";
$user = "root";
$password = "";

# lo mismo que los interrogantes

try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Readers (nombre, direccion) VALUES
    (:nombre,:direccion);";
    $statement = $connection->prepare($sql);
    $statement->bindParam(':nombre', $nombre);
    $statement->bindParam(':direccion', $direccion);

    $nombre = 'Pérez Calero';
    $direccion = 'siuuu';
    $statement->execute(array(':nombre' => $nombre, ':direccion' => $direccion));

    $nombre = 'joselillo';
    $direccion = 'noooo';
    $statement->execute(array(':nombre' => $nombre, ':direccion' => $direccion));

}
catch (PDOException $exception){
    echo "The connection failed. ", $exception->getmessage();
}
$connection = null;
?>