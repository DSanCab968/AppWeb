<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $proveedor = $_POST["selectedProvider"];
    require_once "../../ejercicioExamen/general/connection.php";
    $connection->query("use YourStore");

    $sql="select products.Name
    from products
    where products.Provider = ?";
    $statement=$connection->prepare($sql);
    $statement->bindParam(1,$proveedor);
    $statement->execute();

    $products=[];
    $products=$statement->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($products)){

        echo "<h1>PRODUCTOS DEL PROVEEDOR ".$_POST["nombre"]."</h1>";

        echo "<ul>";

            foreach($products as $product){
    
                echo "<li>".$product["Name"]."</li>";
      
            }

        echo "</ul>";
    }

}


?>