<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $ciudad = $_POST["selectedCity"];
    require_once "../../ejercicioExamen/general/connection.php";
    $connection->query("use YourStore");

    $sql="select Name,Telephone 
    from customers
    where City = ? 
    order by Name asc";
    $statement=$connection->prepare($sql);
    $statement->bindParam(1,$ciudad);
    $statement->execute();

    $customers=[];
    $customers=$statement->fetchAll(PDO::FETCH_ASSOC);

    if($customers){

        echo "<table>
                <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                </tr>";

            foreach($customers as $customer){
                echo "<tr>";
                echo "<td>".$customer["Name"]."</td>";
                echo "<td>".$customer["Telephone"]."</td>";
                echo "</tr>";
            }

        echo "</table>";
    }

    
}


?>
