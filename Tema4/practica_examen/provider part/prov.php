<?php
session_start();

$_SESSION["NOMBRE"] = $_POST["nombre"];

#var_dump($_POST);

$dsn = "mysql:host=localhost;dbname=YourStore";
$user = "root";
$password = "";
try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT products.Name from products 
    inner join providers on products.Provider = providers.ProviderId
    where providers.Name = ?
    order by products.Name asc";

    $statement = $connection->prepare($sql);
    $nombre = $_SESSION["NOMBRE"];
    $statement->bindParam(1,$nombre);
    $statement->execute();


    echo "<h3>PRODUCTOS DEL PROVEEDOR ".$_SESSION['NOMBRE'];
    echo "<ul>";
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($products as $product){
    echo "<li>".htmlspecialchars($product['Name']). "</li>";
    }
    echo "</ul>";
    
}catch (PDOException $exception){
echo "The connection failed. ", $exception->getmessage();
}


?>