<?php
$dsn = "mysql:host=localhost;dbname=YourStore";
$user = "root";
$password = "";
try {
    $connection = new PDO($dsn, $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM customers ORDER BY Name";
    $statement = $connection->query($sql);
    echo "<table><caption>Customers</caption>";
    echo "<tr> <th>ID</th> <th>NAME</th> <th>CONTACT</th> <th>POSITION</th>
    <th>TELEPHONE</th> </tr>";
    $customers = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($customers as $customer){
    echo "<tr>";
    echo "<td>",$customer['CustomerId'] , "</td>";
    echo "<td>",$customer['Name'] , "</td>";
    echo "<td>",$customer['Contact'] , "</td>";
    echo "<td>",$customer['Position'] , "</td>";
    echo "<td>",$customer['Telephone'] , "</td>";
    echo "</tr>";
    }
    echo "</table>";
}catch (PDOException $exception){
echo "The connection failed. ", $exception->getmessage();
}
$connection = null;

#fetchAll --> Returns an array containing all of the result set rows

#fetch_assoc --> Specifies that the fetch method shall return each row as an array 
#indexed by column name as returned in the corresponding result set. If the result 
#set contains multiple columns with the same name, PDO::FETCH_ASSOC returns only a 
#single value per column name.
?>

