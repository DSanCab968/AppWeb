<?php
$dsn = "mysql:host=localhost;dbname=Library";
$user = "root";
$password = "";
    try {
        $connection = new PDO($dsn, $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM Lectores WHERE direccion = ? ORDER BY nombre";
        $statement = $connection->prepare($sql);
        $statement->bindParam(2, $direccion);
        $direccion = 'Londres';
        $statement->execute();
        echo "<table><caption>Customers in “, $direccion, “</caption>";
        echo "<tr> <th>ID</th> <th>nombre</th> <th>direccion</th>
        </tr>";
        while ($tuple = $statement->fetch()){
        echo "<tr>";
        echo "<td>",$tuple['nombre'] , "</td>";
        echo "<td>",$tuple['direccion'] , "</td>";
        echo "</tr>";
        }
        echo "</table>";

    }catch (PDOException $exception){
        echo "The connection failed. ", $exception->getmessage();
    }
    $connection = null;
?>