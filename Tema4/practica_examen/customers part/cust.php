<?php
session_start();

$_SESSION["CIUDAD"] = $_POST["ciudad"];

#var_dump($_POST);

$dsn = "mysql:host=localhost;dbname=YourStore";
$user = "root";
$password = "";
try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT Name,Telephone from customers where City = ?";
    $statement = $connection->prepare($sql);
    $ciudad = $_SESSION["CIUDAD"];
    $statement->bindParam(1,$ciudad);
    $statement->execute();


    echo "<table><caption>CLIENTES DE ".$_SESSION['CIUDAD']."</caption>";
    echo "<tr> <th>Nombre</th> <th>Telefono</th> </tr>";
    $customers = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($customers as $customer){
    echo "<tr>";
    echo "<td>",$customer['Name'] , "</td>";
    echo "<td>",$customer['Telephone'] , "</td>";
    echo "</tr>";
    }
    echo "</table>";
    
}catch (PDOException $exception){
echo "The connection failed. ", $exception->getmessage();
}


?>