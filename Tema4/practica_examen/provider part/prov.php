<?php
session_start();

#$_SESSION["NOMBRE"] = $_POST["nombre"];

#var_dump($_POST);

#nota: no haria falta la preparada pero esta bien usarla igualmente

$dsn = "mysql:host=localhost;dbname=YourStore";
$user = "root";
$password = "";
try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT products.Name from products 
    inner join providers on products.Provider = providers.ProviderId
    where providers.Name = ?";

    $statement = $connection->prepare($sql);
    $nombre = $_POST["nombre"];
    $statement->bindParam(1,$nombre);
    $statement->execute();


    echo "<h1>PRODUCTOS DEL PROVEEDOR ".$_POST["nombre"]."</h1>";
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